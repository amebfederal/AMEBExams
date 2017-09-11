<?php

namespace App\Http\Controllers\Superadmin\Course;

use App\Http\Requests\CourseRequest;
use App\Modules\Services\Course\CourseService;
use App\Modules\Services\Product\CategoryService;
use App\Modules\Services\Product\GradeService;
use App\Modules\Services\Product\SubCategoryService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{

    protected $course;
    protected $category;
    protected $subCategory;
    protected $grade;


    public function __construct(CourseService $course,
                                CategoryService $category,
                                SubCategoryService $subCategory,
                                GradeService $grade)
    {
        $this->middleware('superadmin');
        $this->course = $course;
        $this->category = $category;
        $this->subCategory = $subCategory;
        $this->grade = $grade;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = $this->course->paginate();
        return view('superadmin.course.index', compact('courses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->category->all();
        return view('superadmin.course.create', compact('categories', 'subCategories', 'grades'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        if ($this->course->create($request->all())) {
            return redirect()->route('course.index')->with('success', 'Course created successfully.');
        }

        return redirect()->route('course.create')->with('error', 'Course could not be created.');

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = $this->course->find($id);
        $categories =$this->category->all();
        $savedCategory = $this->category->find($course->category_id);
        $subCategories = $this->subCategory->find($course->sub_category_id);
        $grade = $this->grade->find( $course->grade_id);
        return view('superadmin.course.edit', compact('course','categories', 'subCategories', 'grade', 'savedCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request, $id)
    {

        if($this->course->update($id, $request->all())) {
            return redirect()->route('course.index')->with('success', 'Course updated successfully.');
        }

        return redirect()->route('course.edit',[$id])->with('error', 'Course could not be updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->course->delete($id)) {
            return redirect()->route('course.index')->with('success', 'Course deleted successfully.');
        }

        return redirect()->route('course.index')->with('error', 'Course could not be deleted.');
    }
}
