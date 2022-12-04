@extends('layouts.hr.master')

@section('css')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('plugins/chartist/css/chartist.min.css') }}">
@endsection


@section('breadcrumb')
<div class="col-sm-6 text-left" >
     <h4 class="page-title">Announcement</h4>

     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Announcement</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">View</a></li>
    </ol>

</div>
@endsection

@section('content')





<div class="col-md-12 col-xl-4">

    <div class="card">
        <div class="card-header bg-primary ">
            <h3 class="card-title text-white">Basic color card-header</h3>
            <div class="card-options ">
                <a href="#" class="card-options-collapse mr-2" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white"></i></a>
            </div>
        </div>
        <div class="card-body">
            The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin.</div>
        <div class="card-footer">
            This is Basic card footer
        </div>
    </div>

</div>

@endsection


@section('script')
<!--Chartist Chart-->
<script src="{{ URL::asset('plugins/chartist/js/chartist.min.js') }}"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- peity JS -->
<script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/dashboard.js') }}"></script>
@endsection

















