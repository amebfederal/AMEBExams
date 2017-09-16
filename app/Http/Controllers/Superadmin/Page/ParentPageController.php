<?php namespace App\Http\Controllers\SuperAdmin\Page;

use App\Http\Controllers\SuperAdmin\AdminBaseController;
use App\Http\Requests\ParentPageRequest;
use App\Modules\Services\Page\ParentPageService;


class ParentPageController extends AdminBaseController
{
    protected $p_page;

    public function __construct(ParentPageService $p_page
    )
    {
        $this->middleware('superadmin');
        $this->p_page = $p_page;
    }

    /**
     * write brief description
     * @return mixed
     */
    public function index()
    {
        $p_pages = $this->p_page->paginate();
        ;
        return view('superadmin.parent-page.index', compact('p_pages'));
    }

    /**
     *
     */
    public function create()
    {

        return view('superadmin.parent-page.create');
    }

    /**
     * Store a newly created Bank in storage.
     *
     * @param PageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ParentPageRequest $request)
    {
        if ($this->p_page->create($request->all())) {
            return redirect()->route('parent-page.index')->with('success', 'Parent Page created successfully.');
        }

        return redirect()->route('parent-page.create')->with('error', 'Parent Page could not be created.');
    }

    /**
     * Show the form for editing the specified Bank.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p_page = $this->p_page->find($id);

        return view('superadmin.parent-page.edit', compact('p_page'));
    }

    /**
     * Update the specified Bank in storage.
     *
     * @param PageRequest $request
     * @param                 $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ParentPageRequest $request, $id)
    {
        if($this->p_page->update($id, $request->all())) {
            return redirect()->route('parent-page.index')->with('success', 'CMS Page updated successfully.');
        }

        return redirect()->route('parent-page.edit',[$id])->with('error', 'CMS Page could not be updated.');
    }

    /**
     * Remove the specified Bank from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->p_page->delete($id)) {
            return redirect()->route('parent-page.index')->with('success', 'Parent Page deleted successfully.');
        }

        return redirect()->route('parent-page.index')->with('error', 'Parent Page could not be deleted.');
    }
}