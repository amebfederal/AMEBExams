<?php namespace App\Modules\Services\Product;

use App\Modules\Models\OnlineExamination;
use App\Modules\Models\OnlineExaminationStatePrice;
use App\Modules\Services\Service;
use Illuminate\Support\Facades\Auth;

class OnlineExaminationService extends Service
{
    protected $product;
    protected $statePrice;

    public function __construct(
        OnlineExamination $product,
        OnlineExaminationStatePrice $statePrice
    ){
        $this->product = $product;
        $this->statePrice = $statePrice;
    }

    /**
     * write brief description
     * @param array $data
     * @return $this|\Illuminate\Database\Eloquent\Model|null
     */
    public function create(array $data)
    {
        try {

            $file = $data['image'];

            if(!empty($file)){
                $this->uploadPath = 'uploads/online-exams';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;
            }else{
                unset($data['image']);
            }

            //now logic to store in database for few inputs
            $data['certificate_type'] = json_encode($data['certificate_types']);
            $markingTypes = $data['marking_types'];
            $data['is_manual_marking'] = in_array('manual-marking', $markingTypes) ? '1' : '0';
            $data['marking_type'] = json_encode($data['marking_types']);

            $expiryDate = date('Y-m-d', strtotime('+'.$data['expiry_months'].' months'));
            $data['expiry_date'] = $expiryDate;

            $data['last_updated_by'] = Auth::user()->full_name;
            $data['last_updated_by_user'] = Auth::user()->id;

            $data['status'] = $data['status'] == 'on' ? 'active' : 'inactive';
            $data['visibility'] = $data['visibility'] == 'on' ? 'visible' : 'not-visible';
            $data['state_price'] = isset($data['state_price']) && $data['state_price'] == 'on' ? 'state' : 'default';

            $product = $this->product->create($data);

            $states = $data['states'];
            $product->states()->sync($states);

            return $product;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return null;
        }
    }

    /**
     * Paginate all Product
     *
     * @param array $filter
     * @return Collection
     */
    public function paginate(array $filter = [])
    {
        $filter['limit'] = 20;

        return $this->product->paginate($filter['limit']);
    }

    /**
     * Get all Products
     *
     * @return Collection
     */
    public function all()
    {
        return $this->product->all();
    }

    /**
     * Get a Product
     *
     * @param $id
     * @return Product|null
     */
    public function find($id)
    {
        try {
            return $this->product->find($id);
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Update the product category
     * @param $productId
     * @param array $data
     * @return bool
     */
    public function update($productId, array $data)
    {
        try {
            $product = $this->product->find($productId);

            $file = isset($data['image']) ? $data['image'] : '';

            if(!empty($file)){
                $this->uploadPath = 'uploads/online-exams';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;

                $this->__deleteImages($product);
            }else{
                unset($data['image']);
            }

            //now logic to store in database for few inputs
            $data['certificate_type'] = json_encode($data['certificate_types']);
            $markingTypes = $data['marking_types'];
            $data['is_manual_marking'] = in_array('manual-marking', $markingTypes) ? '1' : '0';
            $data['marking_type'] = json_encode($data['marking_types']);

            $expiryDate = date('Y-m-d', strtotime('+'.$data['expiry_months'].' months'));
            $data['expiry_date'] = $expiryDate;

            $data['last_updated_by'] = Auth::user()->full_name;
            $data['last_updated_by_user'] = Auth::user()->id;

            $data['status'] = $data['status'] == 'on' ? 'active' : 'inactive';
            $data['visibility'] = $data['visibility'] == 'on' ? 'visible' : 'not-visible';
            $data['state_price'] = $data['state_price'] == 'on' ? 'state' : 'default';

            $product->update($data);

            $states = $data['states'];
            $product->states()->sync($states);
            //$this->logger->info(' created successfully', $data);

            return $product;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }

    /**
     * Delete a Product
     *
     * @param Id
     * @return bool
     */
    public function delete($productId)
    {
        try {
            $product = $this->product->find($productId);

            $this->__deleteImages($product);

            $productStates = $product->states;
            if(!empty($productStates)){
                $svArr = [];
                foreach($productStates as $sv){
                    $svArr[] = $sv->id;
                }

                $product->states()->detach($svArr);
            }
            //unset the files uploaded first
            return $product->delete();

        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * write brief description
     * @param $type
     * @return mixed
     */
    public function getByType($type){
        return $this->product->whereType($type);
    }


    /**
     * write brief description
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug){
        return $this->product->whereSlug($slug);
    }


    public function savePrice($id, $data){
        $product = $this->product->find($id);

        $defaultPrice = $data['default_price'];
        $statePrices = $data['state_price'];

        $prices = [];
        foreach($statePrices as $k => $statePrice){
            $prices[] = new $this->statePrice([
                'state_id' => $k,
                'last_updated_by' => Auth::user()->id,
                'price' => !empty($statePrice) ? $statePrice : $defaultPrice
            ]);
        }

        return $product->state_prices()->saveMany($prices);
    }

    private function __deleteImages($product){
        try{
            if(is_file($product->image_path))
                unlink($product->image_path);

            if(is_file($product->thumbnail_path))
                unlink($product->thumbnail_path);
        }catch (\Exception $e){

        }
    }

}