<?php namespace App\Modules\Services\Faq;

use App\Modules\Models\Course;
use App\Modules\Models\CourseStatePrice;
use App\Modules\Models\Faq;
use App\Modules\Models\FaqCategory;
use App\Modules\Models\Session;
use App\Modules\Services\Service;
use Illuminate\Support\Facades\Auth;

class FaqService extends Service
{
    protected $faq;
    protected $faqCategory;


    public function __construct(
        Faq $faq, FaqCategory $faqCategory
    )
    {
        $this->faq = $faq;
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

            $faq = $this->faq->create($data);

            return $faq;
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

        return $this->faq->paginate($filter['limit']);
    }

    /**
     * Get all Session
     *
     * @return Collection
     */
    public function all()
    {
        return $this->faq->all();
    }

    /**
     * Get a Session
     *
     * @param $sessionId
     * @return Session |null
     */
    public function find($faqId)
    {
        try {
            return $this->faq->find($faqId);
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
    public function update($faqId, array $data)
    {
        try {
            $st = $this->faq->find($faqId);

            $faq = $st->update($data);
            //$this->logger->info(' created successfully', $data);


            return $faq;
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
    public function delete($faqId)
    {
        try {
            $faq = $this->faq->find($faqId);
            return $faq->delete();

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
        return $this->faq->whereName($name);
    }

    public function getBySlug($slug){
        return $this->faq->whereSlug($slug)->first();
    }




}