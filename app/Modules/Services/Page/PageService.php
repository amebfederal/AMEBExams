<?php namespace App\Modules\Services\Page;

use App\Modules\Models\Page;
use App\Modules\Services\Service;

class PageService extends Service
{
    protected $page;

    public function __construct(
        Page $page
    ){
        $this->page = $page;
    }

    /**
     * Create new Page
     *
     * @param array $data
     * @return Page|null
     */
    public function create(array $data)
    {
        try {
            //now try to upload the file
            $file = $data['file'];

            if(!empty($file)){
                $this->uploadPath = 'uploads/page';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;
            }else{
                unset($data['image']);
            }

            $page = $this->page->create($data);
            return $page;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return null;
        }
    }

    /**
     * Paginate all Page
     *
     * @param array $filter
     * @return Collection
     */
    public function paginate(array $filter = [])
    {
        $filter['limit'] = 10;

        return $this->page->paginate($filter['limit']);
    }

    /**
     * Get all Page
     *
     * @return Collection
     */
    public function all()
    {
        return $this->page->all();
    }

    /**
     * Get a Page
     *
     * @param $pageId
     * @return Page |null
     */
    public function find($pageId)
    {
        try {
            return $this->page->find($pageId);
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Update the page
     * @param $pageId
     * @param array $data
     * @return bool
     */
    public function update($pageId, array $data)
    {
        try {
            $pid = $this->page->find($pageId);

            $file = $data['file'];

            if(!empty($file)){
                $this->uploadPath = 'uploads/page';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;

                $this->__deleteImages($pid);
            }else{
                unset($data['image']);
            }

            $page = $pid->update($data);
            //$this->logger->info(' created successfully', $data);

            return $page;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }

    /**
     * Delete a page
     *
     * @param Id
     * @return bool
     */
    public function delete($pageId)
    {
        try {
            $page = $this->page->find($pageId);

            return $page->delete();

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
        return $this->page->whereName($name);
    }

    public function getBySlug($slug){
        return $this->page->whereSlug($slug);
    }

    private function __deleteImages($page){
        try{
            if(is_file($page->image_path))
                unlink($page->image_path);

            if(is_file($page->thumbnail_path))
                unlink($page->thumbnail_path);
        }catch (\Exception $e){

        }
    }

}