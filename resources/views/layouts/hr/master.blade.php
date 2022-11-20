<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>QCU</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        @include('layouts.hr.head')
    </head>
<body>
    <div id="wrapper">
         @include('layouts.hr.header')
         @include('layouts.hr.sidebar')
         <div class="content-page">  
            <div class="content">
                <div class="container-fluid">
                   @include('layouts.hr.settings')
                   @yield('content')
                </div> 
            </div> 
        </div> 
        @include('layouts.hr.footer')  
        @include('layouts.hr.footer-script')  
    </div> 
    @include('includes.flash')
    </body>
</html>