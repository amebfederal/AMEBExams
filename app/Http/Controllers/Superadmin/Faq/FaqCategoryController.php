<?php

namespace App\Http\Controllers\SuperAdmin\Faq;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\FaqCategoryRequest;
use App\Modules\Services\Course\CourseService;
use App\Modules\Services\Faq\FaqCategoryService;
use App\Modules\Services\Faq\FaqService;
use App\Modules\Services\Product\CategoryService;
use App\Modules\Services\Product\GradeService;
use App\Modules\Services\Product\SubCategoryService;
use App\Modules\Services\State\StateService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqCategoryController extends Controller
{


    protected $faqCategory;



    public function __construct(FaqCategoryService $faqCategory
                             )
    {
        $this->middleware('superadmin');
        $this->faqCategory = $faqCategory;


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->faqCategory->paginate();
        return view('superadmin.faq.category.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('superadmin.faq.category.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqCategoryRequest $request)
    {
        if ($this->faqCategory->create($request->all())) {
            return redirect()->route('faq-category.index')->with('success', 'Faq-Category created successfully.');
        }

        return redirect()->route('faq-category,create')->with('error', 'Faq-Category could not be created.');

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->faqCategory->find($id);

        return view('superadmin.faq.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqCategoryRequest $request, $id)
    {

        if($this->faqCategory->update($id, $request->all())) {
            return redirect()->route('faq-category.index')->with('success', 'Faq-Category updated successfully.');
        }

        return redirect()->route('faq-category.edit',[$id])->with('error', 'Faq-Category could not be updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->faqCategory->delete($id)) {

            return redirect()->route('faq-category.index')->with('success', 'Faq-Category deleted successfully.');
        }

        return redirect()->route('faq-category.index')->with('error', 'Faq-Category could not be deleted.');
    }

}
