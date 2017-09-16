<?php

namespace App\Http\Controllers\SuperAdmin\Lesson;

use App\Http\Controllers\SuperAdmin\AdminBaseController;
use App\Http\Requests\LessonRequest;
use App\Modules\Services\Course\CourseService;
use App\Modules\Services\Lesson\LessonService;
use Illuminate\Http\Request;


class LessonController extends AdminBaseController
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
    public function index($slug='')
    {
            if(empty($slug))
            {
                $lessons = $this->lesson->paginate();
            }
            else
            {
                $course = $this->course->getBySlug($slug);

                $lessons = $course->lessons;
            }

        return view('superadmin.lesson.index', compact('course', 'lessons'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
        $course = $this->course->getBySlug($slug);
        return view('superadmin.lesson.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($slug, LessonRequest $request)
    {
        if ($this->lesson->create($request->all())) {
            return redirect()->route('course.lesson.index', $slug)->with('success', 'Lesson created successfully.');
        }

        return redirect()->route('course.lesson.create', $slug)->with('error', 'Lesson could not be created.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug,$id)
    {
        $lesson = $this->lesson->find($id);
        $course = $this->course->getBySlug($slug);
        return view('superadmin.lesson.edit', compact('course', 'lesson', 'savedCourse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LessonRequest $request, $slug,  $id)
    {
        if($this->lesson->update($id, $request->all())){
            return redirect()->route('course.lesson.index',$slug)->with('success', 'Lesson updated successfully');
        }

        return redirect()->route('course.lesson.index', $slug)->with('error', 'Lesson could not be successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug,$id)
    {
        if ($this->lesson->delete($id)) {
            return redirect()->route('course.lesson.index',$slug)->with('success', 'Lesson deleted successfully.');
        }

        return redirect()->route('course.lesson.index',$slug)->with('error', 'Lesson could not be deleted.');
    }
}
