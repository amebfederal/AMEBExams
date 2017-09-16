<?php namespace App\Http\Controllers\SuperAdmin\Page;

use App\Http\Controllers\SuperAdmin\AdminBaseController;
use App\Http\Requests\PageRequest;
use App\Modules\Services\Page\PageService;
use App\Modules\Services\Page\ParentPageService;


class PageController extends AdminBaseController
{
    protected $page;
    protected $parentPage;

    public function __construct(PageService $page, ParentPageService $parentPage
    )
    {
        $this->middleware('superadmin');
        $this->page = $page;
        $this->parentPage = $parentPage;
    }

    /**
     * write brief description
     * @return mixed
     */
    public function index()
    {
        $pages = $this->page->paginate();
        return view('superadmin.page.index', compact('pages'));
    }

    /**
     *
     */
    public function create()
    {
        $pages = $this->parentPage->all();
        return view('superadmin.page.create', compact('pages'));
    }

    /**
     * Store a newly created Bank in storage.
     *
     * @param PageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PageRequest $request)
    {
        if ($this->page->create($request->all())) {
            return redirect()->route('page.index')->with('success', 'CMS Page created successfully.');
        }

        return redirect()->route('page.create')->with('error', 'CMS Page could not be created.');
    }

    /**
     * Show the form for editing the specified Bank.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = $this->page->find($id);

        return view('superadmin.page.edit', compact('page'));
    }

    /**
     * Update the specified Bank in storage.
     *
     * @param PageRequest $request
     * @param                 $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PageRequest $request, $id)
    {
        if($this->page->update($id, $request->all())) {
            return redirect()->route('page.index')->with('success', 'CMS Page updated successfully.');
        }

        return redirect()->route('page.edit',[$id])->with('error', 'CMS Page could not be updated.');
    }

    /**
     * Remove the specified Bank from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->page->delete($id)) {
            return redirect()->route('page.index')->with('success', 'CMS Page deleted successfully.');
        }

        return redirect()->route('page.index')->with('error', 'CMS Page could not be deleted.');
    }
}