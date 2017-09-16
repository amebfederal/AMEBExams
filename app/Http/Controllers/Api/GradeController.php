<?php namespace App\Http\Controllers\Api;

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
    public function index($slug)
    {
        $subCategory = $this->subCategory->getBySlug($slug);
        $grades = $subCategory->grades;
        return $grades;
    }


}