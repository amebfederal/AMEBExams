@extends('layouts.super-admin')
@section('content')

    <div id="page-title">
        <h2>Manage State Price</h2>

        <p></p>
    </div>

    <div class="panel">
        <div class="panel-body">
            <h3 class="title-hero">
                Set exam price for States
            </h3>

            <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" action="{{ route('product.save-price', $product->id) }}"
                        method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Exam Title <span class="text-danger">*</span> </label>

                        <div class="col-sm-6">
                            <input type="text" name="" id="" class="form-control" disabled="disabled"
                                   placeholder="Exam name here" value="{{ $product->title }}">
                        </div>
                    </div>
                    <div class="form-group">

                        <label class="col-sm-3 control-label">Default Price</label>

                        <div class="col-sm-6">
                            <input type="text" name="default_price" class="form-control" placeholder=""
                                   value="{{ $product->default_price }}">
                        </div>
                    </div>

                    @foreach($states as $state)

                        <div class="form-group">

                            <label class="col-sm-3 control-label">{{ $state->name }}</label>

                            <div class="col-sm-6">
                                <input type="text" name="state_price[{{ $state->id }}]" value="{{ isset($spArr[$state->id]) ? $spArr[$state->id] : '0.00' }}"
                                       class="form-control" placeholder="Enter price here">
                            </div>
                        </div>

                    @endforeach

                    <div class="form-group">
                        <label class="col-sm-3 control-label"></label>

                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-success" value="Update Price">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

