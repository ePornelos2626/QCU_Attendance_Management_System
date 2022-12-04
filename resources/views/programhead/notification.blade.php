@extends('layouts.programhead.master')

@section('css')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('plugins/chartist/css/chartist.min.css') }}">
@endsection

@section('breadcrumb')
<div class="col-sm-6 text-left" >
     <h4 class="page-title">Notification</h4>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Notification</a></li>
     </ol>
</div>
@endsection

@section('content')



<div class="row">
   <div class="col-12">
       <div class="card">
           <div class="card-body">
                       <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
               
                           <thead>
                           <tr>
                               <th data-priority="1">Notification</th>
                        
                            
                           </tr>
                           </thead>
                           <tbody>

                             
                              @foreach ($user->Notifications  as $notifications)
                              <tr>
                             
                                 <td>
                                    <a href="{{ url($notifications->data['link']  ) }}">
                                    <div class="d-flex">
                                          <i class="mdi mdi-message-text-outline"></i></span>  <p class="card-text"> {{ $notifications->data['subject'] }}  by:  {{ $notifications->data['name'] }}.  {{ $notifications->created_at->diffForHumans() }}</p>
                                    </div>
                                    </a>
                                 </td>

                              </tr>

                              @endforeach

                               {{-- @foreach( $employees as $employee)

                               <tr>
                                   <td>{{$employee->id}}</td>
                                   <td>{{$employee->name}}</td>
                                   <td>{{$employee->roles->first()->name ?? '' }}</td>
                                   <td>{{$employee->email}}</td>
                      
                                   <td>{{$employee->created_at}}</td>
                                   <td>

                                       <a href="#edit{{$employee->name}}" data-toggle="modal" class="btn btn-success btn-sm edit btn-flat"><i class='fa fa-edit'></i> Edit</a>
                                       <a href="#delete{{$employee->name}}" data-toggle="modal" class="btn btn-danger btn-sm delete btn-flat"><i class='fa fa-trash'></i> Delete</a>
                                   </td>
                               </tr>
                               @endforeach --}}
                          
                           </tbody>
                       </table>
                   </div>
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