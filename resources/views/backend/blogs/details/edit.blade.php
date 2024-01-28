@extends('backend.app')

@section('content')
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-6">
                  <h1>Add Blog</h1>
               </div>
               <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="/Admin/Home/AllBlog">Blogs</a></li>
                     <li class="breadcrumb-item active">Add Blog</li>
                  </ol>
               </div>
            </div>
         </div><!-- /.container-fluid -->
      </section>

      <section class="content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">

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

                  <div class="card card-info">
                     <div class="card-header">
                        <h3 class="card-title">Edit A Blog</h3>
                     </div>
                     <!-- /.card-header -->
                     <!-- form start -->
                     <form class="form-horizontal" enctype="multipart/form-data" method="post"
                        action="{{ route('update.blog', ['id' => $blog->id]) }}">
                        @csrf
                        <div class="text-danger validation-summary-valid" data-valmsg-summary="true">
                           <ul>
                              <li style="display: none"></li>
                           </ul>
                        </div>
                        <div class="card-body">
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label" for="Title">Title</label>
                              <div class="col-sm-10">
                                 <input class="form-control" id="title" name="title" type="text"
                                    value="{{ old('title') ?? $blog->title }}" placeholder="Title" />
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label" for="description">Description</label>
                              <div class="col-sm-10">
                                 <textarea id="addDescription" name="description">{!! old('description', $blog->description ?? '') !!}</textarea>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label" for="CoverPhoto">Cover Photo</label>
                              <div class="col-sm-10">
                                 <input class="form-control" id="coverPhoto" name="image" type="file"
                                    placeholder="Cover Photo" />
                              </div>

                              <div>
                                 <img src="{{ $blog->image }}" alt="" height="50px" width="50px">
                              </div>
                           </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                           <button class="btn btn-info" type="submit">Edit Blog</button>
                           <a class="btn btn-default float-right" href="{{ route('show.blog') }}">Cancel</a>
                        </div>
                        <!-- /.card-footer -->
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Page specific script -->
   </div>
@endsection
