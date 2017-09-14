<?php namespace App\Modules\Services\Faq;

use App\Modules\Models\Course;
use App\Modules\Models\CourseStatePrice;
use App\Modules\Models\FaqCategory;
use App\Modules\Models\Session;
use App\Modules\Services\Service;
use Illuminate\Support\Facades\Auth;

class FaqCategoryService extends Service
{
    protected $faqCategory;


    public function __construct(
       FaqCategory $faqCategory
    ){
        $this->faqCategory = $faqCategory;

    }

    /**
     * Create new Session
     *
     * @param array $data
     * @return Session|null
     */
    public function create(array $data)
    {
        try {

            $category = $this->faqCategory->create($data);

            return $category;
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Paginate all Session
     *
     * @param array $filter
     * @return Collection
     */
    public function paginate(array $filter = [])
    {
        $filter['limit'] = 10;

        return $this->faqCategory->paginate($filter['limit']);
    }

    /**
     * Get all Session
     *
     * @return Collection
     */
    public function all()
    {
        return $this->faqCategory->all();
    }

    /**
     * Get a Session
     *
     * @param $sessionId
     * @return Session |null
     */
    public function find($categoryId)
    {
        try {
            return $this->faqCategory->find($categoryId);
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Update the Session
     * @param $sessionId
     * @param array $data
     * @return bool
     */
    public function update($categoryId, array $data)
    {
        try {
            $st = $this->faqCategory->find($categoryId);

            $category = $st->update($data);
            //$this->logger->info(' created successfully', $data);


            return $category;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }

    /**
     * Delete a Session
     *
     * @param Id
     * @return bool
     */
    public function delete($categoryId)
    {
        try {
            $category = $this->faqCategory->find($categoryId);
            return $category->delete();

        } catch (Exception $e) {

            return false;

        }
    }

    /**
     * write brief description
     * @param $name
     * @return mixed
     */
    public function getByName($name){
        return $this->course->whereName($name);
    }

    public function getBySlug($slug){
        return $this->course->whereSlug($slug)->first();
    }

    public function savePrice($id, $data){
        $course = $this->course->find($id);

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

        return $course->state_prices()->saveMany($prices);
    }

    private function __deleteImages($course){
        try{
            if(is_file($course->image_path))
                unlink($course->image_path);

            if(is_file($course->thumbnail_path))
                unlink($course->thumbnail_path);
        }catch (\Exception $e){

        }
    }

}