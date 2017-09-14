@extends('layouts.super-admin')

@section('content')

    <div id="page-title">
        <h2>Faq</h2>


    </div>

    <div class="panel">
        <div class="panel-body">

            <a class="btn btn-sm btn-success add-button"
               href="{{ route('faq.create') }}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add FAQ

            </a>

            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if($faqs->count() > 0)
                    @foreach($faqs as $k => $faq)
                        <tr>
                            <td>{{ ++$k }}</td>
                            <td>{{ $faq->title }}</td>
                            <td>{{ $faq->status_text }}</td>
                            <td>
                                <a href="{{ route('faq.edit', [$faq->id]) }}">Edit</a>
                                ||
                                {!! delete_form(route('faq.destroy',
                                [$faq->id]))
                                !!}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">No data found.</td>
                    </tr>
                @endif
                </tbody>
            </table>


        </div>
    </div>
@stop
