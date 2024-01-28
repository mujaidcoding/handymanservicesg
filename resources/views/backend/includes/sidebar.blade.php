<!-- Sidebar -->
<div class="sidebar">
   <!-- Sidebar Menu -->
   <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" data-accordion="false" role="menu">
         <!-- Add icons to the links using the .nav-icon class
  with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">
            <a class="nav-link active" href="#">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
               </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item menu-open">
                  <a class="nav-link active" href="{{ asset('/') }}Admin/Service">
                     <i class="fas fa-book nav-icon"></i>
                     <p>All Service</p>
                  </a>
                  <a class="nav-link active" href="{{ asset('/') }}Admin/Service/AddNewService">
                     <i class="far fa-plus-square nav-icon"></i>
                     <p>Add New Service</p>
                  </a>

                  <a class="nav-link active" href="{{ asset('/') }}Admin/Home/AllCompletedProject">
                     <i class="fas fa-book nav-icon"></i>
                     <p>All Completed Project</p>
                  </a>
                  <a class="nav-link active" href="{{ asset('/') }}Admin/Home/AddCompletedProject">
                     <i class="far fa-plus-square nav-icon"></i>
                     <p>Add Completed Project</p>
                  </a>
                  <a class="nav-link active" href="{{ asset('/') }}Admin/Home/AllGoogleReview">
                     <i class="fas fa-book nav-icon"></i>
                     <p>All Reviews</p>
                  </a>
                  <a class="nav-link active" href="{{ asset('/') }}Admin/Home/AddGoogleReview">
                     <i class="far fa-plus-square nav-icon"></i>
                     <p>Add Review</p>
                  </a>
                  <a class="nav-link active" href="{{ route('show.blog') }}">
                     <i class="fas fa-book nav-icon"></i>
                     <p>All Blog</p>
                  </a>
                  <a class="nav-link active" href="{{ route('add.blog') }}">
                     <i class="far fa-plus-square nav-icon"></i>
                     <p>Create new blog</p>
                  </a>
                  <a class="nav-link active" href="{{ asset('/') }}Admin/Home/ConfirmUser">
                     <i class="fas fa-check nav-icon"></i>
                     <p>Verify User</p>
                  </a>
               </li>
            </ul>
         </li>
      </ul>
   </nav>

   <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
