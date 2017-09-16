<?php namespace App\Modules\Services\Product;

use App\Modules\Models\Category;
use App\Modules\Models\SubCategory;
use App\Modules\Services\Service;

class SubCategoryService extends Service
{
    protected $category;

    public function __construct(
        SubCategory $category
    ){
        $this->category = $category;
    }

    /**
     * Create new Product Category
     *
     * @param array $data
     * @return Product Category|null
     */
    public function create($category, array $data)
    {
        try {
            if(empty($category)){
                $categoryId = $data['category_id'];
                $category = $this->category->find($categoryId);
            }
            //now try to upload the file
            $file = $data['file'];

            if(!empty($file)){
                $this->uploadPath = 'uploads/sub-category';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;
            }else{
                unset($data['image']);
            }

            $data['category_id'] = $category->id;

            $category = $this->category->create($data);
            return $category;
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

        return $this->category->paginate($filter['limit']);
    }

    /**
     * Get all Product Categorys
     *
     * @return Collection
     */
    public function all()
    {
        return $this->category->all();
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
            return $this->category->find($id);
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Update the product category
     * @param $categoryId
     * @param array $data
     * @return bool
     */
    public function update($category, $categoryId, array $data)
    {
        try {
            $cat = $this->category->find($categoryId);

            $file = isset($data['file']) ? $data['file'] : '';

            if(!empty($file)){
                $this->uploadPath = 'uploads/product-category';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;

                $this->__deleteImages($cat);
            }else{
                unset($data['image']);
            }

            $data['category_id'] = $category->id;

            $category = $cat->update($data);
            //$this->logger->info(' created successfully', $data);

            return $category;
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
    public function delete($categoryId)
    {
        try {
            $category = $this->category->find($categoryId);
            //unset the files uploaded first
            $this->__deleteImages($category);

            return $category->delete();

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
        return $this->category->whereType($type);
    }

    /**
     * write brief description
     * @param $name
     * @return mixed
     */
    public function getByName($name){
        return $this->category->whereName($name)->first();
    }

    public function getBySlug($slug){
        try{
            return $this->category->whereSlug($slug)->first();
        }catch(\Exception $e){
            return null;
        }

    }

    public function withCategory(){
        return $this->category->with('category')->paginate(20);
    }

    private function __deleteImages($category){
        try{
            if(is_file($category->image_path))
                unlink($category->image_path);

            if(is_file($category->thumbnail_path))
                unlink($category->thumbnail_path);
        }catch (\Exception $e){

        }
    }
}