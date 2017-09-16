<?php

namespace App\Http\Controllers\SuperAdmin\Product;

use App\Http\Controllers\SuperAdmin\AdminBaseController;
use App\Http\Requests\OnlineExaminationRequest;
use App\Modules\Services\Product\OnlineExaminationService;
use App\Modules\Services\Product\SubCategoryService;
use App\Modules\Services\State\StateService;
use Illuminate\Http\Request;

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
            return redirect()->route('online-examination.index')->with('success', 'Online Examination updated successfully');
        }

        return redirect()->route('online-examination.index')->with('error', 'Online Examination could not be successfully');
    }


    function destroy($id){
        if ($this->product->delete($id)) {
            return redirect()->route('online-examination.index')->with('success', 'Online Examination deleted successfully.');
        }

        return redirect()->route('online-examination.index')->with('error', 'Online Examination could not be deleted.');
    }

    function managePrice($id){
        $product = $this->product->find($id);

        $statePrices = $product->state_prices;
        $spArr = [];
        foreach($statePrices as $price){
            $spArr[$price->state_id] = $price->price;
        }

        if(!$product->has_state_price){
            return redirect()->route('online-examination.index')->with('success', 'State pricing not enabled for the product.');
        }

        $states = $this->state->all();

        return view('superadmin.product.price.manage', compact('states', 'product', 'spArr'));
    }

    function savePrice(Request $request, $id){

        if($this->product->savePrice($id, $request->all())){
            return redirect()->route('online-examination.index')->with('success', 'State pricing saved for the product.');
        }

        return redirect()->route('product.manage-price', $id)->with('success', 'State price not saved for the product. Please try again later.');

    }
}
