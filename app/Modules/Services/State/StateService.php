<?php namespace App\Modules\Services\State;

use App\Modules\Models\State;
use App\Modules\Services\Service;

class StateService extends Service
{
    protected $state;

    public function __construct(
        State $state
    ){
        $this->state = $state;
    }

    /**
     * Create new State
     *
     * @param array $data
     * @return State|null
     */
    public function create(array $data)
    {
        try {
            $state = $this->state->create($data);
            return $state;
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Paginate all State
     *
     * @param array $filter
     * @return Collection
     */
    public function paginate(array $filter = [])
    {
        $filter['limit'] = 10;

        return $this->state->paginate($filter['limit']);
    }

    /**
     * Get all State
     *
     * @return Collection
     */
    public function all()
    {
        return $this->state->all();
    }

    /**
     * Get a State
     *
     * @param $stateId
     * @return State |null
     */
    public function find($stateId)
    {
        try {
            return $this->state->find($stateId);
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Update the state
     * @param $stateId
     * @param array $data
     * @return bool
     */
    public function update($stateId, array $data)
    {
        try {
            $st = $this->state->find($stateId);

            $state = $st->update($data);
            //$this->logger->info(' created successfully', $data);

            return $state;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }

    /**
     * Delete a state
     *
     * @param Id
     * @return bool
     */
    public function delete($stateId)
    {
        try {
            $state = $this->state->find($stateId);

            return $state->delete();

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
        return $this->state->whereName($name);
    }

    public function getBySlug($slug){
        return $this->state->whereSlug($slug);
    }

}