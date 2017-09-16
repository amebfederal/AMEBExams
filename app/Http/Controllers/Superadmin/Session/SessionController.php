<?php namespace App\Http\Controllers\SuperAdmin\Session;

use App\Http\Controllers\SuperAdmin\AdminBaseController;
use App\Http\Requests\SessionRequest;
use App\Modules\Models\SessionVenue;
use App\Modules\Services\Venue\VenueService;
use App\Modules\Services\Session\SessionService;
use Illuminate\Support\Facades\DB;

class SessionController extends AdminBaseController
{
    protected $venue;
    protected $session;

    public function __construct(
        VenueService $venue,
        SessionService $session
    )
    {
        $this->middleware('superadmin');
        $this->venue = $venue;
        $this->session = $session;
    }

    /**
     * write brief description
     * @return mixed
     */
    public function index()
    {
        $sessions = $this->session->paginate();
        return view('superadmin.session.index', compact('sessions'));
    }

    public function create(){
        $venues = $this->venue->all();

        return view('superadmin.session.create', compact('venues'));
    }

    public function store(SessionRequest $request){
        if ($this->session->create($request->all())) {
            return redirect()->route('session.index')->with('success', 'Session created successfully.');
        }

        return redirect()->route('session.create')->with('error', 'Session could not be created.');
    }

    public function edit($id){
        $venues = $this->venue->all();
        $session = $this->session->find($id);

        $savedVenues = SessionVenue::select('venue_id')->where('session_id', '=', $id)->get();
        $sessionVenues = $venues;
        $svArr = [];
        foreach($sessionVenues as $sv){
            $svArr[] = $sv->id;
        }
        $savedVenue = [];
        foreach($savedVenues as $sav){
            $savedVenue[] = $sav->venue_id;
        }
        $session->venue_ids = $svArr;
        $session->savedVenue = $savedVenue;

        return view('superadmin.session.edit', compact('venues', 'session'));
    }

    public function update($id, SessionRequest $request){
        if ($this->session->update($id, $request->all())) {
            return redirect()->route('session.index')->with('success', 'Session updated successfully.');
        }

        return redirect()->route('session.create')->with('error', 'Session could not be created.');
    }

    public function destroy($id){
        if ($this->session->delete($id)) {
            return redirect()->route('session.index')->with('success', 'Session deleted successfully.');
        }

        return redirect()->route('session.index')->with('error', 'Session could not be deleted.');
    }
}