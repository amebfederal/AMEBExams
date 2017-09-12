<?php namespace App\Modules\Services\Lesson;

use App\Modules\Models\Grade;
use App\Modules\Models\Lesson;
use App\Modules\Models\SubCategory;
use App\Modules\Services\Service;

class LessonService extends Service
{
    protected $lesson;


    public function __construct(
        Lesson $lesson

    ){
        $this->lesson = $lesson;

    }

    /**
     * write brief description
     * @param $subCategory
     * @param array $data
     * @return $this|\Illuminate\Database\Eloquent\Model|null
     */
    public function create(array $data)
    {
        try {


            $lesson = $this->lesson->create($data);
            return $lesson;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return null;
        }
    }

    /**
     * Paginate all Product Category
     *
     * @param array $filter
     * @return Collection
     */
    public function paginate(array $filter = [])
    {
        $filter['limit'] = 20;

        return $this->lesson->paginate($filter['limit']);
    }

    /**
     * Get all Product Categorys
     *
     * @return Collection
     */
    public function all()
    {
        return $this->lesson->all();
    }

    /**
     * Get a Product Category
     *
     * @param $id
     * @return Product Category|null
     */
    public function find($id)
    {
        try {
            return $this->lesson->find($id);
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Update the product category
     * @param $lessonId
     * @param array $data
     * @return bool
     */
    public function update($lessonId, array $data)
    {
        try {
            $cat = $this->lesson->find($lessonId);



            $lesson = $cat->update($data);
            //$this->logger->info(' created successfully', $data);

            return $lesson;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }

    /**
     * Delete a product category
     *
     * @param Id
     * @return bool
     */
    public function delete($lessonId)
    {
        try {
            $lesson = $this->lesson->find($lessonId);
            //unset the files uploaded first
            return $lesson->delete();

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
        return $this->lesson->whereType($type);
    }
    public function getBySlug($slug){
        return $this->lesson->whereSlug($slug);
    }
}