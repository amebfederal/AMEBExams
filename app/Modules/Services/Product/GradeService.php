<?php namespace App\Modules\Services\Product;

use App\Modules\Models\Grade;
use App\Modules\Models\SubCategory;
use App\Modules\Services\Service;

class GradeService extends Service
{
    protected $grade;
    protected $subCategory;

    public function __construct(
        Grade $grade,
        SubCategory $subCategory
    ){
        $this->grade = $grade;
        $this->subCategory = $subCategory;
    }

    /**
     * write brief description
     * @param $subCategory
     * @param array $data
     * @return $this|\Illuminate\Database\Eloquent\Model|null
     */
    public function create($subCategory, array $data)
    {
        try {
            if(empty($subCategory)){
                $categoryId = $data['sub_category_id'];
                $subCategory = $this->subCategory->find($categoryId);
            }

            $data['sub_category_id'] = $subCategory->id;

            $grade = $this->grade->create($data);
            return $grade;
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

        return $this->grade->paginate($filter['limit']);
    }

    /**
     * Get all Product Categorys
     *
     * @return Collection
     */
    public function all()
    {
        return $this->grade->all();
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
            return $this->grade->find($id);
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Update the product category
     * @param $gradeId
     * @param array $data
     * @return bool
     */
    public function update($subCategory, $gradeId, array $data)
    {
        try {
            $cat = $this->grade->find($gradeId);

            $data['sub_category_id'] = $subCategory->id;

            $grade = $cat->update($data);
            //$this->logger->info(' created successfully', $data);

            return $grade;
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
    public function delete($gradeId)
    {
        try {
            $grade = $this->grade->find($gradeId);
            //unset the files uploaded first
            return $grade->delete();

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
        return $this->grade->whereType($type);
    }
    public function getBySlug($slug){
        return $this->grade->whereSlug($slug);
    }
}