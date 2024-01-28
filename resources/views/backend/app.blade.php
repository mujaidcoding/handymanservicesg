<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>HandymanServiceSingapore | Dashboard</title>

      @include('backend.includes.css')
   </head>

   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         <!-- Preloader -->
         <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('/') }}Admin/img/AdminLTELogo.png" alt="HandymanLogo"
               height="60" width="60" />
         </div>
         {{-- Header Section Start --}}
         @include('backend.includes.header')
         {{-- Header Section End --}}
         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a class="brand-link" href="{{ asset('/') }}Admin/Home/AllCompletedProject">
               <img src="/image/logo/handymanservicesingapore -1.png" alt="Handyman Logo"
                  style="opacity: 0.8; margin-left: 10px; padding: 5px; height: 60px; width: 200px" />
            </a>

            @include('backend.includes.sidebar')
         </aside>

         <!-- Content Wrapper. Contains page content -->
         @yield('content')
         <!-- /.content-wrapper -->
         @include('backend.includes.footer')
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
         </aside>
         <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      @include('backend.includes.script')
   </body>

</html>
