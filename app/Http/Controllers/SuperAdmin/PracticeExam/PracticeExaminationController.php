<?php

namespace App\Http\Controllers\SuperAdmin\PracticeExam;

use App\Http\Controllers\Superadmin\AdminBaseController;
use App\Http\Requests\PracticeExaminationRequest;
use App\Modules\Services\Product\PracticeExaminationService;
use Illuminate\Http\Request;

class PracticeExaminationController extends AdminBaseController
{
    private $exam;

    function __construct(
        PracticeExaminationService $exam
    ){
        $this->product = $exam;
    }

    public function index(){
        $products = $this->product->paginate();

        return view('superadmin.practice-exam.index', compact('products'));
    }


    function create(){
        return view('superadmin.practice-exam.create');
    }

    function store(PracticeExaminationRequest $request){

        if($this->product->create($request->all())){
            return redirect()->route('practice-exam.index')->with('success', 'Practice Examination added successfully');
        }

        return redirect()->route('practice-exam.index')->with('error', 'Practice Examination could not be successfully');

    }

    function edit($id){
        $product = $this->product->find($id);
        return view('superadmin.practice-exam.edit', compact('product'));
    }


    function update(PracticeExaminationRequest $request, $id){
        if($this->product->update($id, $request->all())){
            return redirect()->route('practice-exam.index')->with('success', 'Practice Examination updated successfully');
        }

        return redirect()->route('practice-exam.index')->with('error', 'Practice Examination could not be successfully');
    }


    function destroy($id){
        if ($this->product->delete($id)) {
            return redirect()->route('practice-exam.index')->with('success', 'Practice Examination deleted successfully.');
        }

        return redirect()->route('practice-exam.index')->with('error', 'Practice Examination could not be deleted.');
    }
}
