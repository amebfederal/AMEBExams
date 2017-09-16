<?php namespace App\Http\Controllers\SuperAdmin\State;

use App\Http\Controllers\SuperAdmin\AdminBaseController;
use App\Http\Requests\StateRequest;
use App\Modules\Services\State\StateService;

class StateController extends AdminBaseController
{
    protected $state;

    public function __construct(StateService $state
    )
    {
        $this->middleware('auth');
        $this->state = $state;
    }

    /**
     * write brief description
     * @return mixed
     */
    public function index()
    {
        //dd('here');
        $states = $this->state->paginate();
        return view('superadmin.state.index', compact('states'));
    }

    /**
     *
     */
    public function create()
    {
        return view('superadmin.state.create');
    }

    /**
     * Store a newly created Bank in storage.
     *
     * @param StateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StateRequest $request)
    {
        if ($this->state->create($request->all())) {
            return redirect()->route('state.index')->with('success', 'State created successfully.');
        }

        return redirect()->route('state.create')->with('error', 'State could not be created.');
    }

    /**
     * Show the form for editing the specified Bank.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $state = $this->state->find($id);

        return view('superadmin.state.edit', compact('state'));
    }

    /**
     * Update the specified Bank in storage.
     *
     * @param StateRequest $request
     * @param                 $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StateRequest $request, $id)
    {
        if($this->state->update($id, $request->all())) {
            return redirect()->route('state.index')->with('success', 'State updated successfully.');
        }

        return redirect()->route('state.edit',[$id])->with('error', 'State could not be updated.');
    }

    /**
     * Remove the specified Bank from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->state->delete($id)) {
            return redirect()->route('state.index')->with('success', 'State deleted successfully.');
        }

        return redirect()->route('state.index')->with('error', 'State could not be deleted.');
    }
}