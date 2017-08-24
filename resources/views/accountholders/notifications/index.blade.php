@extends('accountholders.layouts.layouts')

@section ('title', 'Notifications')

@section('content')


<div class="col-md-9">

    <div class="col-md-12">
        <div class="row">
            <div class="panel">
            <div class="panel-body">
                <div class="example-box-wrapper">
                    
            <div class="panel-body">
                <div class="example-box-wrapper">
                    <div class="alert alert-success">
                        <div class="bg-green alert-icon">
                            <i class="glyph-icon icon-check"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Candidate 0021312123 completed their exam</h4>
                            <p><a href="#" title="Link">View activity</a></p>
                        </div>
                    </div>
                    <div class="alert alert-info">
                        <div class="bg-black alert-icon">
                            <i class="glyph-icon icon-comment"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Scheduled Maintainence</h4>
                            <p><a href="#" title="Link">View Detail</a></p>
                        </div>
                    </div>
                    <div class="alert alert-notice">
                        <div class="bg-blue alert-icon">
                            <i class="glyph-icon icon-info"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">AMEB Staff Replied to your ticket</h4>
                            <p><a href="#" title="Link">View ticket</a></p>
                        </div>
                    </div>
                    <div class="alert alert-warning">
                        <div class="bg-orange alert-icon">
                            <i class="glyph-icon icon-warning"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Exam Expiring Soon</h4>
                            <p><a href="#" title="Link">View Exam</a></p>
                        </div>
                    </div>
                </div>
            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </div>
</div>

        </div>
@endsection
@section('page-specific-scripts')
<!-- Calendar -->
@section('page-specific-scripts')
@endsection