<?php namespace App\Modules\Services\Product;

use App\Modules\Models\ProductCategory;
use App\Modules\Services\Service;

class ProductCategoryService extends Service
{
    protected $productCategory;

    public function __construct(
        ProductCategory $category
    ){
        $this->productCategory = $category;
    }

    /**
     * Create new Product Category
     *
     * @param array $data
     * @return Product Category|null
     */
    public function create(array $data)
    {
        try {
            //now try to upload the file
            $file = $data['file'];

            if(!empty($file)){
                $this->uploadPath = 'uploads/product-category';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;
            }else{
                unset($data['image']);
            }

            $category = $this->productCategory->create($data);
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
        $filter['limit'] = 1;

        return $this->productCategory->paginate($filter['limit']);
    }

    /**
     * Get all Product Categorys
     *
     * @return Collection
     */
    public function all()
    {
        return $this->productCategory->all();
    }

    /**
     * Get a Product Category
     *
     * @param $bankId
     * @return Product Category|null
     */
    public function find($bankId)
    {
        try {
            return $this->productCategory->find($bankId);
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
    public function update($categoryId, array $data)
    {
        try {
            $cat = $this->productCategory->find($categoryId);

            $file = $data['file'];

            if(!empty($file)){
                $this->uploadPath = 'uploads/product-category';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;

                $this->__deleteImages($cat);
            }else{
                unset($data['image']);
            }

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
            $category = $this->productCategory->find($categoryId);

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
        return $this->productCategory->whereType($type);
    }

    /**
     * write brief description
     * @param $name
     * @return mixed
     */
    public function getByName($name){
        return $this->productCategory->whereName($name);
    }

    public function getBySlug($slug){
        return $this->productCategory->whereSlug($slug);
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