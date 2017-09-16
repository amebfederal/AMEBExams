<?php namespace App\Modules\Services\Banner;

use App\Modules\Models\Banner;
use App\Modules\Models\Course;
use App\Modules\Models\CourseStatePrice;
use App\Modules\Models\Session;
use App\Modules\Services\Service;
use Illuminate\Support\Facades\Auth;

class BannerService extends Service
{
    protected $banner;


    public function __construct(
        Banner $banner
    ){
        $this->banner= $banner;

    }

    /**
     * Create new Session
     *
     * @param array $data
     * @return Session|null
     */
    public function create(array $data)
    {
        //dd($data);
        try {
            //now try to upload the file
            $file = $data['file'];

            if(!empty($file)){
                $this->uploadPath = 'uploads/banner';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;
            }else{
                unset($data['image']);
            }
            $banner = $this->banner->create($data);

            return $banner;
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

        return $this->banner->paginate($filter['limit']);
    }

    /**
     * Get all Session
     *
     * @return Collection
     */
    public function all()
    {
        return $this->banner->all();
    }

    /**˝˝
     * Get a Session
     *
     * @param $sessionId
     * @return Session |null
     */
    public function find($bannerId)
    {
        try {
            return $this->banner->find($bannerId);
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
    public function update($bannerId, array $data)
    {
        try {
            $st = $this->banner->find($bannerId);
            if(isset($date['file']))
            $file = $data['file'];

            if(!empty($file)){
                $this->uploadPath = 'uploads/banner';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;

                $this->__deleteImages($st);
            }else {
                unset($data['image']);
            }
            $course = $st->update($data);
            //$this->logger->info(' created successfully', $data);


            return $course;
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
    public function delete($bannerId)
    {
        try {
            $banner = $this->banner->find($bannerId);
            //unset the files uploaded first
            $this->__deleteImages($banner);
            return $banner->delete();

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
        return $this->banner->whereName($name);
    }




    private function __deleteImages($banner){
        try{
            if(is_file($banner->image_path))
                unlink($banner->image_path);

            if(is_file($banner->thumbnail_path))
                unlink($banner->thumbnail_path);
        }catch (\Exception $e){

        }
    }

}