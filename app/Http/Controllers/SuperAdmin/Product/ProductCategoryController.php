<?php namespace App\Http\Controllers\SuperAdmin\Product;

use App\Http\Controllers\Superadmin\AdminBaseController;
use App\Http\Requests\ProductCategoryRequest;
use App\Modules\Services\Product\ProductCategoryService;

class ProductCategoryController extends AdminBaseController
{
    protected $category;

    public function __construct(ProductCategoryService $category
    )
    {
        //$this->middleware('auth');
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
     * Store a newly created Bank in storage.
     *
     * @param ProductCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductCategoryRequest $request)
    {
        if ($this->category->create($request->all())) {
            return redirect()->route('product-category.index')->with('success', 'Product category created successfully.');
        }

        return redirect()->route('product-category.create')->with('error', 'Product category could not be created.');
    }

    /**
     * Show the form for editing the specified Bank.
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
     * Update the specified Bank in storage.
     *
     * @param ProductCategoryRequest $request
     * @param                 $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductCategoryRequest $request, $id)
    {
        if($this->category->update($id, $request->all())) {
            return redirect()->route('product-category.index')->with('success', 'Product Category updated successfully.');
        }

        return redirect()->route('product-category.edit',[$id])->with('error', 'Product Category could not be updated.');
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
            return redirect()->route('product-category.index')->with('success', 'Product Category deleted successfully.');
        }

        return redirect()->route('product-category.index')->with('error', 'Product Category could not be deleted.');
    }
}