<?php

namespace App\Http\Controllers\Superadmin\Lesson;

use App\Http\Requests\LessonRequest;
use App\Modules\Services\Course\CourseService;
use App\Modules\Services\Lesson\LessonService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    protected $lesson;
    protected $course;

    public function __construct(CourseService $course, LessonService $lesson)
    {
        $this->middleware('superadmin');
        $this->lesson = $lesson;
        $this->course = $course;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $lessons = $this->lesson->paginate();
        return view('superadmin.lesson.index', compact('courses', 'lessons'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = $this->course->all();
        return view('superadmin.lesson.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($this->lesson->create($request->all())) {
            return redirect()->route('lesson.index')->with('success', 'Lesson created successfully.');
        }

        return redirect()->route('lesson.create')->with('error', 'Lesson could not be created.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = $this->lesson->find($id);
        $courses = $this->course->all();
        $savedCourse = $this->course->find($lesson->course_id);
        return view('superadmin.lesson.edit', compact('courses', 'lesson', 'savedCourse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LessonRequest $request, $id)
    {
        if($this->lesson->update($id, $request->all())){
            return redirect()->route('lesson.index')->with('success', 'Lesson updated successfully');
        }

        return redirect()->route('lesson.index')->with('error', 'Lesson could not be successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->lesson->delete($id)) {
            return redirect()->route('lesson.index')->with('success', 'Lesson deleted successfully.');
        }

        return redirect()->route('lesson.index')->with('error', 'Lesson could not be deleted.');
    }
}
