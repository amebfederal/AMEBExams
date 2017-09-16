<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\SuperAdmin\AdminBaseController;
use App\Modules\Models\Category;
use App\Modules\Services\Product\CategoryService;
use App\Modules\Services\Product\GradeService;
use App\Modules\Services\Product\SubCategoryService;
use Illuminate\Http\Request;

class CourseController extends AdminBaseController
{
    protected $grade;
    protected $subCategory;
    protected $category;

    public function __construct(
        GradeService $grade,
        SubCategoryService $subCategory,
        CategoryService $category
    )
    {
        $this->middleware('superadmin');
        $this->grade = $grade;
        $this->subCategory = $subCategory;
        $this->category = $category;
    }

    /**
     * write brief description
     * @return mixed
     */
    public function showSubCategory(Request $request)
    {
       return $subCat = $this->subCategory->all()->where('category_id', '=', $request->get('category_id'));

    }

    public function showGrade(Request $request)
    {
       return $subCat = $this->grade->all()->where('sub_category_id', '=', $request->get('sub_category_id'));

    }
}