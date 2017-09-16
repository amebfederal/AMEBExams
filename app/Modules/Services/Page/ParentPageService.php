<?php namespace App\Modules\Services\Page;

use App\Modules\Models\Page;
use App\Modules\Models\ParentPage;
use App\Modules\Services\Service;

class ParentPageService extends Service
{
    protected $p_page;

    public function __construct(
        ParentPage $p_page
    )
    {
        $this->p_page = $p_page;
    }

    /**
     * Create new Parent Page
     *
     * @param array $data
     * @return Page|null
     */
    public function create(array $data)
    {
        try {
            //now try to upload the file
            if(isset($data['file']))
            $file = $data['file'];

            if(!empty($file)){
                $this->uploadPath = 'uploads/page';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;
            }else{
                unset($data['image']);
            }

            $p_page = $this->p_page->create($data);
            return $p_page;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return null;
        }
    }

    /**
     * Paginate all Parent Page
     *
     * @param array $filter
     * @return Collection
     */
    public function paginate(array $filter = [])
    {
        $filter['limit'] = 10;

        return $this->p_page->paginate($filter['limit']);
    }

    /**
     * Get all Parent Page
     *
     * @return Collection
     */
    public function all()
    {
        return $this->p_page->all();
    }

    /**
     * Get a Page
     *
     * @param $p_pageId
     * @return parent Page |null
     */
    public function find($p_pageId)
    {
        try {
            return $this->p_page->find($p_pageId);
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Update the Parent page
     * @param $p_pageId
     * @param array $data
     * @return bool
     */
    public function update($p_pageId, array $data)
    {
        try {
            $p_pid = $this->p_page->find($p_pageId);
            if(isset($data['file']))
            $file = $data['file'];

            if(!empty($file)){
                $this->uploadPath = 'uploads/page';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;

                $this->__deleteImages($p_pageId);
            }else{
                unset($data['image']);
            }

            $p_page = $p_pid->update($data);
            //$this->logger->info(' created successfully', $data);

            return $p_page;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }

    /**
     * Delete a parent page
     *
     * @param Id
     * @return bool
     */
    public function delete($p_pageId)
    {
        try {
            $p_page = $this->p_page->find($p_pageId);

            return $p_page->delete();

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
        return $this->p_page->whereName($name);
    }

    public function getBySlug($slug){
        return $this->p_page->whereSlug($slug);
    }

    private function __deleteImages($p_page){
        try{
            if(is_file($p_page->image_path))
                unlink($p_page->image_path);

            if(is_file($p_page->thumbnail_path))
                unlink($p_page->thumbnail_path);
        }catch (\Exception $e){

        }
    }

}