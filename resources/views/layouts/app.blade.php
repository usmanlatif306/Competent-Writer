<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>@yield('title') - {{ get_company_name() }}</title>
   <link rel="icon" type="image/x-icon" href="{{asset('assets/dashboard/images/logo-mini.png')}}">
   <!-- plugins:css -->
   <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
   <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
   <link href="{{ asset('css/home.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/feather/feather.css')}}">
   <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/ti-icons/css/themify-icons.css')}}">
   <link rel="stylesheet" href="{{asset('assets/dashboard/css/vertical-layout-light/style.css')}}">
   <link rel="stylesheet" href="{{asset('assets/dashboard/css/custom.css')}}">
   <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet" />
   @stack('stylesheets')
</head>

<body>
   <div id="app" class="container-scroller">
      <!-- navbar start -->
      @include('layouts.header')
      <!-- navbar end -->
      <div class="container-fluid page-body-wrapper">
         <!-- sidebar start -->
         <nav class="sidebar sidebar-offcanvas" id="sidebar">
            @include('layouts.menu')
         </nav>
         <!-- partial -->
         <div class="main-panel">
            <!-- content-wrapper starts -->
            <div class="content-wrapper">
               @yield('content')
            </div>
            <!-- content-wrapper ends -->
            <!-- footer -->
            <footer class="footer">
               <div class="d-flex justify-content-center">
                  <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                     Premium <a href="https://xorexs.com/" target="_blank">Xorexs Limited</a>
                     All rights reserved.</span>

               </div>
            </footer>
            <!-- footer end-->
         </div>
         <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
   </div>
   <!-- container-scroller -->

   <script type="text/javascript">
      window.currencyConfig = {
         !!currencyConfig() !!
      };
   </script>
   <script src="{{ mix('/js/app.js') }}"></script>
   <script src="{{ asset('js/menu.js') }}"></script>
   <script src="{{asset('assets/dashboard/js/off-canvas.js')}}"></script>
   <script src="{{asset('assets/dashboard/js/hoverable-collapse.js')}}"></script>
   <script src="{{asset('assets/dashboard/js/template.js')}}"></script>
   @stack('scripts')
</body>

</html>