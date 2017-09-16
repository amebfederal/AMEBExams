<?php

namespace App\Http\Controllers\SuperAdmin\Course;

use App\Http\Requests\CourseRequest;
use App\Modules\Services\Course\CourseService;
use App\Modules\Services\Product\CategoryService;
use App\Modules\Services\Product\GradeService;
use App\Modules\Services\Product\SubCategoryService;
use App\Modules\Services\State\StateService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{

    protected $course;
    protected $category;
    protected $subCategory;
    protected $grade;
    private $state;


    public function __construct(CourseService $course,
                                CategoryService $category,
                                SubCategoryService $subCategory,
                                GradeService $grade, StateService $state)
    {
        $this->middleware('superadmin');
        $this->course = $course;
        $this->category = $category;
        $this->subCategory = $subCategory;
        $this->grade = $grade;
        $this->state =$state;

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

    function managePrice($id){
        $course = $this->course->find($id);

        $statePrices = $course->state_prices;
        $spArr = [];
        foreach($statePrices as $price){
            $spArr[$price->state_id] = $price->price;
        }

        if(!$course->has_state_price){
            return redirect()->route('course.index')->with('success', 'State pricing not enabled for the product.');
        }

        $states = $this->state->all();

        return view('superadmin.course.price.manage', compact('states', 'course', 'spArr'));
    }

    function savePrice(Request $request, $id){

        if($this->course->savePrice($id, $request->all())){
            return redirect()->route('course.index')->with('success', 'State pricing saved for the course.');
        }

        return redirect()->route('course.manage-price', $id)->with('success', 'State price not saved for the course. Please try again later.');

    }
}
