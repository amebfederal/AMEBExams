<?php namespace App\Http\Controllers\SuperAdmin\Account;

use App\Modules\Services\Option\CountryService;
use App\Modules\Services\State\StateService;
use App\Http\Controllers\SuperAdmin\AdminBaseController;
use App\Http\Requests\AccountHolderRequest;
use App\Modules\Services\AccountHolder\AccountHolderService;

class AccountController extends AdminBaseController
{
    protected $account;
    protected $states;
    protected $country;

    public function __construct(
        AccountHolderService $account,
        StateService $state,
        CountryService $country
    )
    {
        $this->middleware('auth');
        $this->account = $account;
        $this->states = $state;
        $this->country = $country;
    }

    /**
     * write brief description
     * @return mixed
     */
    public function index()
    {
        $accounts = $this->account->paginate();
        return view('superadmin.account.index', compact('accounts'));
    }

    /**
     *
     */

    /**
     * Store a newly created Bank in storage.
     *
     * @param AccountHolderRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AccountHolderRequest $request)
    {
        if ($this->state->create($request->all())) {
            return redirect()->route('account.index')->with('success', 'Account created successfully.');
        }

        return redirect()->route('account.create')->with('error', 'Account could not be created.');
    }

    /**
     * Show the form for editing the specified Bank.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = $this->account->find($id);
        $countries= $this->country->all();
        $states = $this->states->all();

        return view('superadmin.account.edit', compact('account', 'countries', 'states'));
    }

    /**
     * Update the specified Bank in storage.
     *
     * @param AccountHolderRequest $request
     * @param                 $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AccountHolderRequest $request, $id)
    {
        if($this->account->update($id, $request->all())) {
            return redirect()->route('account.index')->with('success', 'Account updated successfully.');
        }

        return redirect()->route('account.edit',[$id])->with('error', 'Account could not be updated.');
    }

    /**
     * Remove the specified Bank from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->account->delete($id)) {
            return redirect()->route('account.index')->with('success', 'Account deleted successfully.');
        }

        return redirect()->route('account.index')->with('error', 'Account could not be deleted.');
    }
}