@extends('accountholders.layouts.layouts')

@section('title', 'User Dashboard')

@section('content')
        <div class="col-md-9">
            

<div class="panel">

            <div class="panel-body">
                    <h3 class="title-hero">
        </h3>        
            <div class="row">
            <div class="col-md-2 col-sm-12">
                    <select class="form-control">
                            <option>Select Type</option>
                            <option>Exam Only</option>
                            <option>Course Only</option>
                            <option>Practise Exam Only</option>
                            <option>Exam & Practise</option>
                            <option>Exam, Practise & Course</option>
                            <option>All</option>
                    </select>
            </div>
            <div class="col-md-3 col-sm-6">
                    <select class="form-control">
                            <option>Select Category</option>
                            <option>Online Exam Theory</option>
                            <option>Practical Exam</option>
                            <option>Written Exam</option>
                            <option>Rockschool Exam</option>
                    </select>
            </div>
            <div class="col-md-3 col-sm-6">
                    <select class="form-control">
                            <option>Select Sub-Category</option>
                            <option>Music Craft</option>
                            <option>Musician</option>
                            <option>Grade 3</option>
                    </select>
            </div>
            <div class="col-md-2 col-sm-6">
                    <select class="form-control">
                            <option>Select Grade</option>
                            <option>Grade 1</option>
                            <option>Grade 2</option>
                            <option>Grade 3</option>
                            <option>Grade 4</option>
                            <option>Grade 5</option>
                            <option>Grade 6</option>
                            <option>Grade 7</option>
                            <option>Grade 8</option>
                            <option>Debut</option>
                            <option>Performance</option>
                    </select>
            </div>
            <div class="col-md-2 col-sm-6">
                    <select class="form-control">
                            <option>Select Instrument</option>
                            <option>Keyboard </option>
                            <option>Piano</option>
                            <option>Guitar</option>
                            <option>Drum</option>
                    </select>
            </div>
            </div>
        </div>
        <br/>
    <div class="panel-body">

        <div class="example-box-wrapper">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="{{ url ('accountholders/exams/view') }}" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="{{ asset('resources/assets/image-resources/stock-images/img-17.jpg')}}" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$200</small>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="{{ asset('resources/assets/image-resources/stock-images/img-18.jpg') }}" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="{{url ('accountholders/exams/view')}}" title="">
                                    Working in the morning
                                </a>
                                <small>$150</small>
                            </h3>
                        </div>
                    </div>
                </div>
                             <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="{{ asset('resources/assets/image-resources/stock-images/img-18.jpg') }}" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$150</small>
                            </h3>
                        </div>
                    </div>
                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="{{ asset('resources/assets/image-resources/stock-images/img-18.jpg') }}" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$150</small>
                            </h3>
                        </div>
                    </div>
                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="{{ asset('resources/assets/image-resources/stock-images/img-18.jpg') }}" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$150</small>
                            </h3>
                        </div>
                    </div>
                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="{{ asset('resources/assets/image-resources/stock-images/img-18.jpg') }}" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$150</small>
                            </h3>
                        </div>
                    </div>
                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="{{ asset('resources/assets/image-resources/stock-images/img-18.jpg') }}" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$150</small>
                            </h3>
                        </div>
                    </div>
                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="{{ asset('resources/assets/image-resources/stock-images/img-18.jpg') }}" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$150</small>
                            </h3>
                        </div>
                    </div>
                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="{{ asset('resources/assets/image-resources/stock-images/img-18.jpg') }}" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$150</small>
                            </h3>
                        </div>
                    </div>
                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="{{ asset('resources/assets/image-resources/stock-images/img-18.jpg') }}" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$150</small>
                            </h3>
                        </div>
                    </div>
                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="{{ asset('resources/assets/image-resources/stock-images/img-18.jpg') }}" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$150</small>
                            </h3>
                        </div>
                    </div>
                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="{{ asset('resources/assets/image-resources/stock-images/img-18.jpg') }}" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$150</small>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
        </div>
 <!-- WIDGETS -->
@endsection
@section('page-specific-scripts')
<!-- Calendar -->
@section('page-specific-scripts')
    <!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/tabs-ui/tabs.css">-->
@endsection