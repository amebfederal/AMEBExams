<?php namespace App\Modules\Services\Course;

use App\Modules\Models\Course;
use App\Modules\Models\CourseStatePrice;
use App\Modules\Models\Session;
use App\Modules\Services\Service;
use Illuminate\Support\Facades\Auth;

class CourseService extends Service
{
    protected $course;
    protected $statePrice;

    public function __construct(
        Course $course, CourseStatePrice $statePrice
    ){
        $this->course = $course;
        $this->statePrice = $statePrice;
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
            $data['state_price'] = $data['state_price'] == 'on' ? 'state' : 'default';
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
            $data['state_price'] = $data['state_price'] == 'on' ? 'state' : 'default';
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