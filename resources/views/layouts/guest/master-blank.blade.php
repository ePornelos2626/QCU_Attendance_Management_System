<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>QCU</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/">
        @include('layouts.guest.head')
  </head>
    <body class="pb-0" >
        @yield('content')
        @include('layouts.guest.footer-script')    
        @include('includes.flash')
    </body>
</html>