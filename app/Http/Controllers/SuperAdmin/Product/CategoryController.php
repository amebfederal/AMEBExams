<?php namespace App\Http\Controllers\SuperAdmin\Product;

use App\Http\Controllers\SuperAdmin\AdminBaseController;
use App\Http\Requests\CategoryRequest;
use App\Modules\Services\Product\CategoryService;

class CategoryController extends AdminBaseController
{
    protected $category;

    public function __construct(CategoryService $category
    )
    {
        $this->middleware('superadmin');
        $this->category = $category;
    }

    /**
     * write brief description
     * @return mixed
     */
    public function index()
    {
        $categories = $this->category->paginate();
        return view('superadmin.product.category.index', compact('categories'));
    }

    /**
     *
     */
    public function create()
    {
        return view('superadmin.product.category.create');
    }

    /**
     * Store a newly created Category in storage.
     *
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        if ($this->category->create($request->all())) {
            return redirect()->route('category.index')->with('success', 'Category created successfully.');
        }

        return redirect()->route('category.create')->with('error', 'Category could not be created.');
    }

    /**
     * Show the form for editing the specified Category.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->category->find($id);

        return view('superadmin.product.category.edit', compact('category'));
    }

    /**
     * Update the specified Category in storage.
     *
     * @param CategoryRequest $request
     * @param                 $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoryRequest $request, $id)
    {
        if($this->category->update($id, $request->all())) {
            return redirect()->route('category.index')->with('success', 'Category updated successfully.');
        }

        return redirect()->route('category.edit',[$id])->with('error', 'Category could not be updated.');
    }

    /**
     * Remove the specified Bank from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->category->delete($id)) {
            return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
        }

        return redirect()->route('category.index')->with('error', 'Category could not be deleted.');
    }
}