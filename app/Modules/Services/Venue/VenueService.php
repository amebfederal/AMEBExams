<?php namespace App\Modules\Services\Venue;

use App\Modules\Models\Venue;
use App\Modules\Services\Service;

class VenueService extends Service
{
    protected $venue;

    public function __construct(
        Venue $venue
    ){
        $this->venue = $venue;
    }

    /**
     * Create new Venue
     *
     * @param array $data
     * @return Venue|null
     */
    public function create(array $data)
    {
        try {
            $venue = $this->venue->create($data);
            return $venue;
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Paginate all Venue
     *
     * @param array $filter
     * @return Collection
     */
    public function paginate(array $filter = [])
    {
        $filter['limit'] = 10;

        return $this->venue->paginate($filter['limit']);
    }

    /**
     * Get all State
     *
     * @return Collection
     */
    public function all()
    {
        return $this->venue->all();
    }

    /**
     * Get a Venue
     *
     * @param $venueId
     * @return Venue |null
     */
    public function find($venueId)
    {
        try {
            return $this->venue->find($venueId);
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Update the venue
     * @param $venueId
     * @param array $data
     * @return bool
     */
    public function update($venueId, array $data)
    {
        try {
            $st = $this->venue->find($venueId);

            $venue = $st->update($data);
            //$this->logger->info(' created successfully', $data);

            return $venue;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }

    /**
     * Delete a venue
     *
     * @param Id
     * @return bool
     */
    public function delete($venueId)
    {
        try {
            $venue = $this->venue->find($venueId);

            return $venue->delete();

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
        return $this->venue->whereName($name);
    }

    public function getBySlug($slug){
        return $this->venue->whereSlug($slug);
    }

}