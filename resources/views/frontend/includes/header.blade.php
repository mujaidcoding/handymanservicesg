<section class="w3l-bootstrap-header">
   <div class="fixed-top">
      <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
         <div class="container">
            <a class="navbar-brand" href="/">
               <img src="/image/logo/handymanservicesingapore -1.png" style="padding: 5px; height: 70px; width: 240px" />
            </a>
            <!-- if logo is image enable this
               <a class="navbar-brand" href="#index.html">
                   <img src="image-path" title="Your logo" alt="Your logo" style="height:35px;"/>
               </a> -->
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" type="button"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('about') }}">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('services') }}">Services</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('blogs') }}">Blogs</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                  </li>
               </ul>
               <p>For Support Call<span class="fa fa-headphones pl-1" style="color: #ff7f2aff"></span><br /><a
                     href="tel:+6598112405" style="color: #ff7f2aff; font-weight: 400">+65-98112405</a></p>
            </div>
         </div>
      </nav>
   </div>
</section>
