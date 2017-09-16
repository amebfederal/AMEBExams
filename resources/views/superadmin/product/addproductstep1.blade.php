@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Add Product</h2>
                <p>Choose Product Type.</p>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <h3 class="title-hero">
                        Select Product Type
                    </h3>
                    <div class="example-box-wrapper">
                        <form class="form-horizontal bordered-row" action="{{URL::route('superadmin.product.addproductstep2')}}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Select</label>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                        <option>Examination</option>
                                        <option>Bundled</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-6">
                                    <input type="submit" name="" value="Continue" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


@endsection

