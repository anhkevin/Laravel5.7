<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Ánh Kevin">
      <meta name="keyword" content="">
      <title>@yield('title')</title>

      <!-- CSS -->
      <link href="https://coreui.io/demo/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
      <link href="https://coreui.io/demo/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
      <link href="https://coreui.io/demo/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="https://coreui.io/demo/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
      <link href="https://coreui.io/demo/css/style.css" rel="stylesheet">
      <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">

   </head>
   <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
      
      @extends('layouts.header')

      <div class="app-body">
            @extends('layouts.sidebar')
            <main class="main">
                  @yield('breadcrumb')
                  <div class="container-fluid">
                        <div class="animated fadeIn">
                              <div class="card">
                              @yield('content')
                              </div>
                        </div>
                  </div>
            </main>
      </div>

      @extends('layouts.footer')

      <script src="https://coreui.io/demo/vendors/jquery/js/jquery.min.js"></script>
      <!-- <script src="https://coreui.io/demo/vendors/popper.js/js/popper.min.js"></script> -->
      <script src="https://coreui.io/demo/vendors/bootstrap/js/bootstrap.min.js"></script>
      <!-- <script src="https://coreui.io/demo/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script> -->
      <script src="https://coreui.io/demo/vendors/@coreui/coreui-pro/js/coreui.min.js"></script>
      <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

      @yield('javascript')
   </body>
</html>