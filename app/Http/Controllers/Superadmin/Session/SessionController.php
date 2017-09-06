<?php namespace App\Http\Controllers\SuperAdmin\Product;

use App\Http\Controllers\Superadmin\AdminBaseController;
use App\Http\Requests\VenueRequest;
use App\Modules\Services\Venue\VenueService;
use App\Modules\Services\Session\SessionService;

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
    public function index($slug)
    {
        $venue = $this->venue->getBySlug($slug);
        $session = $venue->venues;
        return view('superadmin.product.sub-category.index', compact('venue', 'session'));
    }

   
}