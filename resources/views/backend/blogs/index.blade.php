@extends('backend.app')

@section('content')
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-6">
                  <h1>Available Services</h1>
               </div>
               <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active">Services</li>
                  </ol>
               </div>
            </div>
         </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">

                  <!-- Validation Errors -->
                  @if ($errors->any())
                     <div class="alert alert-danger">
                        <ul>
                           @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                     </div>
                  @endif

                  <!--Error Message-->
                  @if (session('error'))
                     <div class="alert alert-danger">
                        {{ session('error') }}
                     </div>
                  @endif

                  <!-- Success Message -->
                  @if (session('success'))
                     <div class="alert alert-success">
                        {{ session('success') }}
                     </div>
                  @endif

                  <div class="card">
                     <div class="card-header">
                        <h3 class="card-title">All Blogs</h3>
                     </div>

                     <div class="card-body">
                        <table class="table-bordered table-striped table" id="example1">
                           <thead>
                              <tr>
                                 <th>ID</th>
                                 <th>Published</th>
                                 <th>Image</th>
                                 <th>Title</th>
                                 <th>Description</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($blogs as $blog)
                                 <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blog->created_at->format('d/m/Y') }}</td>
                                    <td><img src="{{ $blog->image }}" alt="{{ $blog->title }}" height="50px"
                                          width="50px"></td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{!! Str::limit($blog->description, 50) !!}</td>
                                    <td>
                                       <a class="btn btn-app" href="{{ route('edit.blog', ['id' => $blog->id]) }}">
                                          <i class="fas fa-edit"></i> Edit
                                       </a>
                                       <!-- Delete button triggering the modal -->
                                       <a class="btn btn-app delete-btn" data-toggle="modal" data-target="#modal-default"
                                          data-id="{{ $blog->id }}">
                                          <i class="fas fa-trash"></i> Delete
                                       </a>

                                       <!-- Modal for confirmation -->
                                       <div class="modal fade" id="modal-default">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h4 class="modal-title">Delete</h4>
                                                   <button class="close" data-dismiss="modal" type="button"
                                                      aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                   </button>
                                                </div>
                                                <div class="modal-body">
                                                   <p>Are you sure you want to delete?</p>
                                                   <form id="deleteForm"
                                                      action="{{ route('delete.blog', ['id' => $blog->id]) }}"
                                                      method="post">
                                                      @csrf
                                                      @method('DELETE')
                                                      <input id="deleteId" name="id" type="hidden"
                                                         value="{{ $blog->id }}" />
                                                   </form>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                   <button class="btn btn-default" data-dismiss="modal"
                                                      type="button">Cancel</button>
                                                   <button class="btn btn-danger" id="deleteButton" type="button">Yes,
                                                      Delete!</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                    </td>
                                 </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>

            </div>

         </div>

      </section>
      <!-- /.content -->
   </div>

@endsection
