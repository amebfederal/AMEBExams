<?php

namespace App\Http\Controllers\SuperAdmin\Product;

use App\Http\Controllers\Superadmin\AdminBaseController;
use App\Http\Requests\OnlineExaminationRequest;
use App\Modules\Services\Product\OnlineExaminationService;
use App\Modules\Services\Product\SubCategoryService;
use App\Modules\Services\State\StateService;

class OnlineExaminationController extends AdminBaseController
{
    private $onlineExam;
    private $subCategory;
    private $state;

    function __construct(
        OnlineExaminationService $onlineExam,
        SubCategoryService $subCategory,
        StateService $state
    ){
        $this->product = $onlineExam;
        $this->subCategory = $subCategory;
        $this->state = $state;
    }

    public function index(){
        $products = $this->product->paginate();

        return view('superadmin.product.online-exam.index', compact('products'));
    }


    function create(){
        $subCategories = $this->subCategory->all();
        $states = $this->state->all();
        return view('superadmin.product.online-exam.create', compact('subCategories', 'states'));
    }

    function store(OnlineExaminationRequest $request){

        if($this->product->create($request->all())){
            return redirect()->route('online-examination.index')->with('success', 'Online Examination added successfully');
        }

        return redirect()->route('online-examination.index')->with('error', 'Online Examination could not be successfully');

    }

    function edit($id){
        $subCategories = $this->subCategory->all();
        $states = $this->state->all();
        $product = $this->product->find($id);
        $productStatesIds = [];
        foreach($product->states as $state){
            $productStatesIds[] = $state->id;
        }
        $product->state_ids = $productStatesIds;
        $product->marking_type = json_decode($product->marking_type);
        $product->certificate_type = json_decode($product->certificate_type);
        return view('superadmin.product.online-exam.edit', compact('subCategories', 'states', 'product'));
    }


    function update(OnlineExaminationRequest $request, $id){
        if($this->product->update($id, $request->all())){
            return redirect()->route('online-examination.index')->with('success', 'Online Examination added successfully');
        }

        return redirect()->route('online-examination.index')->with('error', 'Online Examination could not be successfully');
    }


    function destroy($id){
        if ($this->product->delete($id)) {
            return redirect()->route('online-examination.index')->with('success', 'Online Examination deleted successfully.');
        }

        return redirect()->route('online-examination.index')->with('error', 'Online Examination could not be deleted.');
    }
}
