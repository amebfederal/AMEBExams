<?php namespace App\Modules\Services\Course;

use App\Modules\Models\Course;
use App\Modules\Models\Session;
use App\Modules\Services\Service;

class CourseService extends Service
{
    protected $course;

    public function __construct(
        Course $course
    ){
        $this->course = $course;
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
            //now try to upload the file
            $file = $data['file'];

            if(!empty($file)){
                $this->uploadPath = 'uploads/course';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;
            }else{
                unset($data['image']);
            }
            $course = $this->course->create($data);

            return $course;
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

        return $this->course->paginate($filter['limit']);
    }

    /**
     * Get all Session
     *
     * @return Collection
     */
    public function all()
    {
        return $this->course->all();
    }

    /**
     * Get a Session
     *
     * @param $sessionId
     * @return Session |null
     */
    public function find($courseId)
    {
        try {
            return $this->course->find($courseId);
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
    public function update($courseId, array $data)
    {
        try {
            $st = $this->course->find($courseId);
            if(isset($date['file']))
            $file = $data['file'];

            if(!empty($file)){
                $this->uploadPath = 'uploads/course';
                $fileName = $this->upload($file);

                $data['image'] = $fileName;

                $this->__deleteImages($st);
            }else{
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
    public function delete($courseId)
    {
        try {
            $course = $this->course->find($courseId);
            //unset the files uploaded first
            $this->__deleteImages($course);
            return $course->delete();

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
        return $this->course->whereSlug($slug);
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