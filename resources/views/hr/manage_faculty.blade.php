@extends('layouts.hr.master')


@section('css')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('plugins/chartist/css/chartist.min.css') }}">
@endsection

@section('breadcrumb')
<div class="col-sm-6 text-left" >

    @if ($courses == 'BSA')
    <h4 class="page-title">BSA</h4>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Course</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">BSA</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Manage Faculty</a></li>
     </ol>
    @endif
    @if ($courses == 'BSE')
    <h4 class="page-title">BSE</h4>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Course</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">BSE</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Manage Faculty</a></li>
     </ol>
    @endif
    @if ($courses == 'BSECE')
    <h4 class="page-title">BSECE</h4>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Course</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">BSECE</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Manage Faculty</a></li>
     </ol>
    @endif
    @if ($courses == 'BSIT')
    <h4 class="page-title">BSIT</h4>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Course</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">BSIT</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Manage Faculty</a></li>
     </ol>
    @endif
    @if ($courses == 'BSIE')
    <h4 class="page-title">BSIE</h4>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Course</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">BSIE</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Manage Faculty</a></li>
     </ol>
    @endif

     



</div>
@endsection

@section('content')





    @if ($courses == 'BSA')

            @section('button')
                <a href="#addnewfaculty" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="mdi mdi-plus mr-2"></i>Add</a>
            @endsection
        

            @include('includes.flash')


            <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                                      <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              
                                          <thead>
                                          <tr>
                                              <th data-priority="1">Faculty ID</th>
                                
                                              <th data-priority="4">Email</th>
                    
                                 
                                              <th data-priority="7">Actions</th>
                                           
                                          </tr>
                                          </thead>
                                          <tbody>
                                              @foreach( $faculty as $faculties)

                                              <tr>
                                                  <td>{{$faculties->facultyID }}</td>
                                         
                                                  <td>{{$faculties->faculty_email }}</td>
                                        
                                     

                                                  <td>
              
                                                      <a href="#edit{{$faculties->facultyID}}" data-toggle="modal" class="btn btn-success btn-sm edit btn-flat"><i class='fa fa-edit'></i> Edit</a>
                                                      <a href="#delete{{$faculties->facultyID}}" data-toggle="modal" class="btn btn-danger btn-sm delete btn-flat"><i class='fa fa-trash'></i> Delete</a>
                                                  </td>
                                              </tr>
                                              @endforeach
                                         
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                  </div> <!-- end col -->
              </div> <!-- end row -->    
                          


    @include('hr.modals.add-faculty-modal')


    @endif


    @if ($courses == 'BSE')
  @section('button')
                <a href="#addnewfaculty" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="mdi mdi-plus mr-2"></i>Add</a>
            @endsection
        

            @include('includes.flash')


            <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                                      <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              
                                          <thead>
                                          <tr>
                                              <th data-priority="1">Faculty ID</th>
                                              <th data-priority="2">Name</th>
                                              <th data-priority="3">Position</th>
                                              <th data-priority="4">Email</th>
                    
                                              <th data-priority="6">Member Since</th>
                                              <th data-priority="7">Actions</th>
                                           
                                          </tr>
                                          </thead>
                                          <tbody>
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
                  </div> <!-- end col -->
              </div> <!-- end row -->    
                          


    @include('hr.modals.add-faculty-modal')

    @endif

    @if ($courses == 'BSECE')

    @section('button')
    <a href="#addnewfaculty" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="mdi mdi-plus mr-2"></i>Add</a>
@endsection


@include('includes.flash')


<div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                          <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  
                              <thead>
                              <tr>
                                  <th data-priority="1">Faculty ID</th>
                                  <th data-priority="2">Name</th>
                                  <th data-priority="3">Position</th>
                                  <th data-priority="4">Email</th>
        
                                  <th data-priority="6">Member Since</th>
                                  <th data-priority="7">Actions</th>
                               
                              </tr>
                              </thead>
                              <tbody>
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
      </div> <!-- end col -->
  </div> <!-- end row -->    
              


@include('hr.modals.add-faculty-modal')

    @endif

    @if ($courses == 'BSIT')

    @section('button')
    <a href="#addnewfaculty" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="mdi mdi-plus mr-2"></i>Add</a>
@endsection


@include('includes.flash')


<div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                          <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  
                              <thead>
                              <tr>
                                  <th data-priority="1">Faculty ID</th>
                                  <th data-priority="2">Name</th>
                                  <th data-priority="3">Position</th>
                                  <th data-priority="4">Email</th>
        
                                  <th data-priority="6">Member Since</th>
                                  <th data-priority="7">Actions</th>
                               
                              </tr>
                              </thead>
                              <tbody>
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
      </div> <!-- end col -->
  </div> <!-- end row -->    
              


@include('hr.modals.add-faculty-modal')

    @endif

    @if ($courses == 'BSIE')

    @section('button')
         <a href="#addnewfaculty" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="mdi mdi-plus mr-2"></i>Add</a>
    @endsection


@include('includes.flash')




<div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                          <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  
                              <thead>
                              <tr>
                                  <th data-priority="1">Faculty ID</th>
                                  <th data-priority="2">Name</th>
                                  <th data-priority="3">Position</th>
                                  <th data-priority="4">Email</th>
        
                                  <th data-priority="6">Member Since</th>
                                  <th data-priority="7">Actions</th>
                               
                              </tr>
                              </thead>
                              <tbody>
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
      </div> <!-- end col -->
  </div> <!-- end row -->    
              


@include('hr.modals.add-faculty-modal')

    @endif





@endsection


@section('script')
<!--Chartist Chart-->
<script src="{{ URL::asset('plugins/chartist/js/chartist.min.js') }}"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- peity JS -->
<script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/dashboard.js') }}"></script>

<script>

    var password = document.getElementById("password");

    function showPass()
    {

        console.log("hey");

        if(password.type == "password")
        {
            password.type = "text";
        }
        else
        {
            password.type = "password";
        }
    }

    function genPassword()
    {


        var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var passwordLength = 10;
        var password = "";

        for(var i=0; i<=passwordLength; i++)
        {
            var randomNumber = Math.floor(Math.random() * chars.length);
            password += chars.substring(randomNumber, randomNumber + 1);
        }

        console.log(password);

        document.getElementById("password").value = password;

        document.getElementById("passwordshow").value = password;
        
    }

</script>

@endsection