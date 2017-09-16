<?php namespace App\Modules\Services\Product;

use App\Modules\Models\PracticeExamination;
use App\Modules\Services\Service;
use Illuminate\Support\Facades\Auth;

class PracticeExaminationService extends Service
{
    protected $product;

    public function __construct(
        PracticeExamination $product
    ){
        $this->product = $product;
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
                $this->uploadPath = 'uploads/practice-exams';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;
            }else{
                unset($data['image']);
            }

            //now logic to store in database for few inputs
            $expiryDate = date('Y-m-d', strtotime('+'.$data['expiry_months'].' months'));
            $data['expiry_date'] = $expiryDate;

            $data['last_updated_by'] = Auth::user()->full_name;
            $data['last_updated_by_user'] = Auth::user()->id;

            $data['status'] = $data['status'] == 'on' ? 'active' : 'inactive';
            $data['visibility'] = $data['visibility'] == 'on' ? 'visible' : 'not-visible';

            $product = $this->product->create($data);

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
                $this->uploadPath = 'uploads/practice-exams';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;

                $this->__deleteImages($product);
            }else{
                unset($data['image']);
            }

            //now logic to store in database for few inputs
            $expiryDate = date('Y-m-d', strtotime('+'.$data['expiry_months'].' months'));
            $data['expiry_date'] = $expiryDate;

            $data['last_updated_by'] = Auth::user()->full_name;
            $data['last_updated_by_user'] = Auth::user()->id;

            $data['status'] = $data['status'] == 'on' ? 'active' : 'inactive';
            $data['visibility'] = $data['visibility'] == 'on' ? 'visible' : 'not-visible';

            $product->update($data);

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

    /**
     * write brief description
     * @param $product
     */
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