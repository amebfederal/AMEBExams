<?php namespace App\Http\Controllers\SuperAdmin\Product;

use App\Http\Controllers\SuperAdmin\AdminBaseController;
use App\Http\Requests\GradeRequest;
use App\Modules\Services\Product\GradeService;
use App\Modules\Services\Product\SubCategoryService;

class GradeController extends AdminBaseController
{
    protected $grade;
    protected $subCategory;

    public function __construct(
        GradeService $grade,
        SubCategoryService $subCategory
    )
    {
        $this->middleware('superadmin');
        $this->grade = $grade;
        $this->subCategory = $subCategory;
    }

    /**
     * write brief description
     * @return mixed
     */
    public function index($slug = '')
    {
        $subCategory = $this->subCategory->getBySlug($slug);
        if (!empty($subCategory)) {
            $grades = $subCategory->grades;
        } else {
            $grades = $this->grade->paginate();
        }

        return view('superadmin.product.grade.index', compact('subCategory', 'grades'));
    }

    /**
     * write brief description
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($slug)
    {
        $subCategory = $this->subCategory->getBySlug($slug);
        if (empty($subCategory)) {
            $subCategories = $this->subCategory->all();
        }
        return view('superadmin.product.grade.create', compact('subCategory', 'subCategories'));
    }

    /**
     * Store a newly created Category in storage.
     *
     * @param GradeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($slug, GradeRequest $request)
    {
        $category = $this->subCategory->getBySlug($slug);
        if ($this->grade->create($category, $request->all())) {
            if (!empty($category))
                return redirect()->route('sub-category.grade.index', $category->slug)
                    ->with('success', 'Grade created successfully.');
            else
                return redirect()->to('super-admin/grade')
                    ->with('success', 'Grade created successfully.');
        }

        return redirect()->route('sub-category.grade.create')
            ->with('error', 'Grade could not be created.');
    }

    /**
     * Show the form for editing the specified Category.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug, $id)
    {
        $subCategory = $this->subCategory->getBySlug($slug);
        $grade = $this->grade->find($id);

        return view('superadmin.product.grade.edit', compact('subCategory', 'grade'));
    }

    /**
     * Update the specified Category in storage.
     *
     * @param GradeRequest $request
     * @param                 $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(GradeRequest $request, $slug, $id)
    {
        $category = $this->subCategory->getBySlug($slug);
        if ($this->grade->update($category, $id, $request->all())) {
            return redirect()->route('sub-category.grade.index', $category->slug)
                ->with('success', 'Grade updated successfully.');
        }

        return redirect()->route('sub-category.grade.edit', [$category->slug, $id])
            ->with('error', 'Grade could not be updated.');
    }

    /**
     * Remove the specified Bank from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug, $id)
    {
        $category = $this->subCategory->getBySlug($slug);
        if ($this->grade->delete($id)) {
            return redirect()->route('sub-category.grade.index', $category->slug)
                ->with('success', 'Grade deleted successfully.');
        }

        return redirect()->route('sub-category.grade.index', $category->slug)
            ->with('error', 'Grade could not be deleted.');
    }
}