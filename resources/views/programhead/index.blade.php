


@extends('layouts.programhead.master')



@section('css')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('plugins/chartist/css/chartist.min.css') }}">
@endsection

@section('breadcrumb')
<div class="col-sm-6 text-left" >
     <h4 class="page-title">Dashboard</h4>

     <ol class="breadcrumb">
         <li class="breadcrumb-item active">Welcome Program Head</li>
     </ol>


</div>
@endsection

@section('content')


                   <div class="row">
                    
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <span class="ti-bell" style="font-size: 20px"></span>
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">BSA <br> Faculty</h5>
                                            <h4 class="font-500"> </h4>
                                            <span class="ti-desktop" style="font-size: 71px"></span>
                                              
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>
                                            <p class="text-white-50 mb-0">More info</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <span class="ti-bell" style="font-size: 20px"></span>
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">BSE <br> Faculty</h5>
                                            <h4 class="font-500"> </h4>
                                            <span class="ti-desktop" style="font-size: 71px"></span>
                                              
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>
                                            <p class="text-white-50 mb-0">More info</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <span class="ti-bell" style="font-size: 20px"></span>
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">BSECE <br> Faculty</h5>
                                            <h4 class="font-500"> </h4>
                                            <span class="ti-desktop" style="font-size: 71px"></span>
                                              
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>
                                            <p class="text-white-50 mb-0">More info</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <span class="ti-bell" style="font-size: 20px"></span>
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">BSIT <br> Faculty</h5>
                                            <h4 class="font-500"> </h4>
                                            <span class="ti-desktop" style="font-size: 71px"></span>
                                              
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>
                                            <p class="text-white-50 mb-0">More info</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <span class="ti-bell" style="font-size: 20px"></span>
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">BSIE <br> Faculty</h5>
                                            <h4 class="font-500"> </h4>
                                            <span class="ti-desktop" style="font-size: 71px"></span>
                                              
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>
                                            <p class="text-white-50 mb-0">More info</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                         

                            
                           
                
                        </div>
                        <!-- end row -->

                        {{-- <div class="row">
                            {{ $qrsample }}
                        </div> --}}
                    
                        
                        
                        <!-- end row -->
@endsection

@section('script')
<!--Chartist Chart-->
<script src="{{ URL::asset('plugins/chartist/js/chartist.min.js') }}"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- peity JS -->
<script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/dashboard.js') }}"></script>
@endsection



