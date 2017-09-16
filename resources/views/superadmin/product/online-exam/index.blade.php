@extends('layouts.super-admin')

@section('content')

    <div id="page-title">
        <h2>Online Examinations</h2>

        <p>You can manage online exams from here.</p>
    </div>

    <div class="panel">
        <div class="panel-body">
            <a class="btn btn-sm btn-success add-button" href="{{URL::route('online-examination.create')}}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add Exam</a>

            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Subject Code</th>
                    <th>Grade</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($products->count() > 0)
                    @foreach($products as $k => $product)
                        <tr>
                            <td>{{ ++$k }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->subject_code }}</td>
                            <td>{{ $product->grade->title }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->default_price }}</td>
                            <td>{{ $product->status_text }}</td>
                            <td>
                                <a href="{{ route('online-examination.edit', $product->id) }}" title="Manage Details">
                                    <i class="glyph-icon icon-pencil" aria-hidden="true"></i>
                                    Edit
                                </a>
                                @if($product->has_state_price)
                                    <a href="{{ route('product.manage-price', $product->id) }}"
                                       title="Manage Exam price"><i
                                                class="glyph-icon icon-money" aria-hidden="true"></i> Price </a>
                                @endif
                                {!! delete_form(route('online-examination.destroy', [$product->id]))
                                !!}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="8">No data found.</td>
                    </tr>
                @endif

                </tbody>
            </table>
            <div class="col-md-12 text-right">
                {!! $products->render() !!}
            </div>
        </div>
    </div>
@endsection
