<!DOCTYPE html>
<html lang="en">

   <head>
      @include('frontend.includes.css')

      {{-- SEO Start Part --}}
      @yield('seo')
      {{-- Seo End Part --}}
   </head>

   <body>
      <!-- Google Tag Manager (noscript) -->
      <noscript>
         <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZBL4DQ" style="display: none; visibility: hidden"
            height="0" width="0"></iframe>
      </noscript>
      <!-- End Google Tag Manager (noscript) -->
      {{-- Header Section --}}
      @include('frontend.includes.header')
      {{-- Header Section End --}}
      <div>
         @yield('content')
      </div>
      <!-- grids block 5 -->
      @include('frontend.includes.footer')

      @include('frontend.includes.script')
   </body>

</html>
