<?php namespace App\Http\Controllers\SuperAdmin\Venue;

use App\Http\Controllers\SuperAdmin\AdminBaseController;
use App\Http\Requests\VenueRequest;
use App\Modules\Services\Venue\VenueService;

class VenueController extends AdminBaseController
{
    protected $venue;

    public function __construct(VenueService $venue
    )
    {
        $this->middleware('auth');
        $this->venue = $venue;
    }

    /**
     * write brief description
     * @return mixed
     */
    public function index()
    {
        //dd('here');
        $venues = $this->venue->paginate();
        return view('superadmin.venue.index', compact('venues'));
    }

    /**
     *
     */
    public function create()
    {
        return view('superadmin.venue.create');
    }

    /**
     * Store a newly created Bank in storage.
     *
     * @param VenueRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(VenueRequest $request)
    {
        if ($this->venue->create($request->all())) {
            return redirect()->route('venue.index')->with('success', 'Venue created successfully.');
        }

        return redirect()->route('venue.create')->with('error', 'Venue could not be created.');
    }

    /**
     * Show the form for editing the specified Bank.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venues = $this->venue->find($id);

        return view('superadmin.venue.edit', compact('venues'));
    }

    /**
     * Update the specified Bank in storage.
     *
     * @param VenueRequest $request
     * @param                 $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(VenueRequest $request, $id)
    {
        if($this->venue->update($id, $request->all())) {
            return redirect()->route('venue.index')->with('success', 'Venue updated successfully.');
        }

        return redirect()->route('venue.edit',[$id])->with('error', 'Venue could not be updated.');
    }

    /**
     * Remove the specified Bank from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->venue->delete($id)) {
            return redirect()->route('venue.index')->with('success', 'Venue deleted successfully.');
        }

        return redirect()->route('venue.index')->with('error', 'Venue could not be deleted.');
    }
}