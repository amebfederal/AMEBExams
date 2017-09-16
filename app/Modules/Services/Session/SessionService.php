<?php namespace App\Modules\Services\Session;

use App\Modules\Models\Session;
use App\Modules\Services\Service;

class SessionService extends Service
{
    protected $session;

    public function __construct(
        Session $session
    ){
        $this->session = $session;
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
            $session = $this->session->create($data);

            //now assign session to venues
            $venues = $data['venues'];
            foreach($venues as $venue)
                $session->venues()->attach($venue);

            return $session;
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

        return $this->session->paginate($filter['limit']);
    }

    /**
     * Get all Session
     *
     * @return Collection
     */
    public function all()
    {
        return $this->session->all();
    }

    /**
     * Get a Session
     *
     * @param $sessionId
     * @return Session |null
     */
    public function find($sessionId)
    {
        try {
            return $this->session->find($sessionId);
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
    public function update($sessionId, array $data)
    {
        try {
            $st = $this->session->find($sessionId);

            $session = $st->update($data);
            //$this->logger->info(' created successfully', $data);

            $venues = $data['venues'];
            $st->venues()->sync($venues);

            return $session;
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
    public function delete($sessionId)
    {
        try {
            $ses = $this->session->find($sessionId);

            $sessionVenues = $ses->venues;
            if(!empty($sessionVenues)){
                $svArr = [];
                foreach($sessionVenues as $sv){
                    $svArr[] = $sv->id;
                }

                $ses->venues()->detach($svArr);
            }

            return $ses->delete();

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
        return $this->session->whereName($name);
    }

    public function getBySlug($slug){
        return $this->session->whereSlug($slug);
    }

}