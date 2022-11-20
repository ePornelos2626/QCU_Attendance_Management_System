@extends('layouts.admin.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title text-left">User Accounts</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">User Accounts</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">User Accounts List</a></li>
  
    </ol>
</div>
@endsection
@section('button')
<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="mdi mdi-plus mr-2"></i>Add</a>
        

@endsection

@section('content')
@include('includes.flash')


                      <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        
                                                    <thead>
                                                    <tr>
                                                        <th data-priority="1">User ID</th>
                                                        <th data-priority="2">Name</th>
                                                        <th data-priority="3">Position</th>
                                                        <th data-priority="4">Email</th>
                              
                                                        <th data-priority="6">Member Since</th>
                                                        <th data-priority="7">Actions</th>
                                                     
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach( $employees as $employee)

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
                                                        @endforeach
                                                   
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->    
                                    

@foreach( $employees as $employee)
@include('admin.modals.edit_delete_employee')
@endforeach

@include('admin.modals.add_employee')

@endsection


@section('script')
<!-- Responsive-table-->

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


        var chars = "0123456789abcdefghijklmnopqrstuvwxyz!@$ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var passwordLength = 10;
        var password = "";

        for(var i=0; i<=passwordLength; i++)
        {
            var randomNumber = Math.floor(Math.random() * chars.length);
            password += chars.substring(randomNumber, randomNumber + 1);
        }

        console.log(password);

        document.getElementById("password").value = password;
    }

</script>

@endsection