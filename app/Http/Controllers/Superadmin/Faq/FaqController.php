<?php

namespace App\Http\Controllers\SuperAdmin\Faq;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\FaqRequest;
use App\Modules\Services\Course\CourseService;
use App\Modules\Services\Faq\FaqCategoryService;
use App\Modules\Services\Faq\FaqService;
use App\Modules\Services\Product\CategoryService;
use App\Modules\Services\Product\GradeService;
use App\Modules\Services\Product\SubCategoryService;
use App\Modules\Services\State\StateService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{

    protected $faq;
    protected $faqCategory;



    public function __construct(FaqService $faq,
                                FaqCategoryService $faqCategory
                             )
    {
        $this->middleware('superadmin');
        $this->faq = $faq;
        $this->faqCategory = $faqCategory;


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = $this->faq->paginate();
        return view('superadmin.faq.index', compact('faqs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faqCategories = $this->faqCategory->all();
        return view('superadmin.faq.create', compact('faqCategories'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqRequest $request)
    {
        if ($this->faq->create($request->all())) {
            return redirect()->route('faq.index')->with('success', 'Faq created successfully.');
        }

        return redirect()->route('faq.create')->with('error', 'Faq could not be created.');

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = $this->faq->find($id);
        $faqCategories =$this->faqCategory->all();
        $savedCategory = $faq->faq_catecory;

        return view('superadmin.faq.edit', compact('faq','faqCategories', 'savedCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqRequest $request, $id)
    {

        if($this->faq->update($id, $request->all())) {
            return redirect()->route('faq.index')->with('success', 'Faq updated successfully.');
        }

        return redirect()->route('faq.edit',[$id])->with('error', 'Faq could not be updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->faq->delete($id)) {
            return redirect()->route('faq.index')->with('success', 'Faq deleted successfully.');
        }

        return redirect()->route('faq.index')->with('error', 'Faq could not be deleted.');
    }

}
