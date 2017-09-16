<?php namespace App\Http\Controllers\SuperAdmin\Product;

use App\Http\Controllers\SuperAdmin\AdminBaseController;
use App\Http\Requests\CategoryRequest;
use App\Modules\Services\Product\CategoryService;
use App\Modules\Services\Product\SubCategoryService;

class SubCategoryController extends AdminBaseController
{
    protected $category;
    protected $subCategory;

    public function __construct(
        CategoryService $category,
        SubCategoryService $subCategory
    )
    {
        $this->middleware('superadmin');
        $this->category = $category;
        $this->subCategory = $subCategory;
    }

    /**
     * write brief description
     * @return mixed
     */
    public function index($slug = '')
    {
        if (empty($slug)) {
            $subCategories = $this->subCategory->withCategory();
        } else {
            $category = $this->category->getBySlug($slug);
            $subCategories = $category->sub_categories;
        }

        return view('superadmin.product.sub-category.index', compact('category', 'subCategories'));
    }

    /**
     * write brief description
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($slug)
    {
        $category = $this->category->getBySlug($slug);
        if (empty($category)) {
            $categories = $this->category->all();
        }
        return view('superadmin.product.sub-category.create', compact('category', 'categories'));
    }

    /**
     * Store a newly created Category in storage.
     *
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($slug, CategoryRequest $request)
    {
        $category = $this->category->getBySlug($slug);
        if ($subCategory = $this->subCategory->create($category, $request->all())) {
            if (!empty($category))
                return redirect()->route('category.sub-category.index', $slug)
                    ->with('success', 'Sub Category created successfully.');
            else
                return redirect()->to('super-admin/sub-category')
                    ->with('success', 'Sub Category created successfully.');
        }

        return redirect()->route('category.create')->with('error', 'Sub Category could not be created.');
    }

    /**
     * Show the form for editing the specified Category.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug, $id)
    {
        $category = $this->category->getBySlug($slug);
        $subCategory = $this->subCategory->find($id);

        return view('superadmin.product.sub-category.edit', compact('category', 'subCategory'));
    }

    /**
     * Update the specified Category in storage.
     *
     * @param CategoryRequest $request
     * @param                 $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoryRequest $request, $slug, $id)
    {
        $category = $this->category->getBySlug($slug);
        if ($this->subCategory->update($category, $id, $request->all())) {
            return redirect()->route('category.sub-category.index', $category->slug)
                ->with('success', 'Sub Category updated successfully.');
        }

        return redirect()->route('category.sub-category.edit', [$category->slug, $id])
            ->with('error', 'Sub Category could not be updated.');
    }

    /**
     * Remove the specified Bank from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug, $id)
    {
        $category = $this->category->getBySlug($slug);
        if ($this->subCategory->delete($id)) {
            return redirect()->route('category.sub-category.index', $category->slug)
                ->with('success', 'Sub Category deleted successfully.');
        }

        return redirect()->route('category.sub-category.index', $category->slug)
            ->with('error', 'Sub Category could not be deleted.');
    }
}