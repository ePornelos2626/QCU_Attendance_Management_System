@extends('layouts.programhead.master')

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

    </ol>

</div>
@endsection

@section('content')



@section('button')
<a href="#addannouncementph" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="mdi mdi-plus mr-2"></i>Create Announcement</a>
@endsection





<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                
                            <thead>

                            <tr>

                                <th data-priority="1">Announcement ID</th>
                                <th data-priority="2">Subject</th>
                                <th data-priority="3">Department</th>
                                <th data-priority="4">Date</th>
                                <th data-priority="7">Actions</th>
                             
                             
                            </tr>

                            </thead>
                            <tbody>
                                @foreach( $announcement as $announcements)

                                <tr>
                                    <td>{{$announcements->announcementID}}</td>
                                    <td>{{$announcements->subject}}</td>
                                    <td>{{$announcements->department->name}}</td>
                                    <td>{{$announcements->created_at->format('d/m/Y')}}</td>
                       
                    
                                    <td>
                                        <a href=""  class="btn btn-primary btn-sm edit btn-flat"><i class='fa fa-eye'></i> View</a>
                                        <a href="#edit{{$announcements->id}}" data-toggle="modal" class="btn btn-success btn-sm edit btn-flat"><i class='fa fa-edit'></i> Edit</a>
                                        <a href="#delete{{$announcements->id}}" data-toggle="modal" class="btn btn-danger btn-sm delete btn-flat"><i class='fa fa-trash'></i> Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
      </div>

 

@include('programhead.modals.add-announcement-ph-modal')


@endsection


@section('script')
<!--Chartist Chart-->
<script src="{{ URL::asset('plugins/chartist/js/chartist.min.js') }}"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- peity JS -->
<script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/dashboard.js') }}"></script>
@endsection