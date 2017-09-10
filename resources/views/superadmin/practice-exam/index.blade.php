@extends('layouts.super-admin')

@section('content')

    <div id="page-title">
        <h2>Practice Examinations</h2>

        <p>You can manage practice exams from here.</p>
    </div>

    <div class="panel">
        <div class="panel-body">
            <a class="btn btn-sm btn-success add-button" href="{{ route('practice-exam.create')}}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add Exam</a>

            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Exam Id</th>
                    <th>Price</th>
                    <th>Expiry Date</th>
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
                            <td><img src="{{ asset($product->thumbnail_path) }}" height="60px"/></td>
                            <td>{{ $product->exam_id }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->expiry_date }}</td>
                            <td>{{ $product->status_text }}</td>
                            <td>
                                <a href="{{ route('practice-exam.edit', $product->id) }}" title="Manage Details">
                                    <i class="glyph-icon icon-pencil" aria-hidden="true"></i>
                                    Edit
                                </a>
                                {!! delete_form(route('practice-exam.destroy', [$product->id]))
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
