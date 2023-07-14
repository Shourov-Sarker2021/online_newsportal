@extends('app')
    @section('content')
        <div class="content-wrapper" style="min-height: 243px;">

            <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Categories</h1>
                    </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Categories page</li>
                            </ol>
                        </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
            </div>
                <section class="content">
            
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Categories Edit Table</h3>
                             
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body col-lg-6">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Update New Category</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('update.category',$category->id)}}" method="POST">
                                        @csrf 
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Category Name English</label>
                                            <input type="text" class="form-control" value="{{$category->category_en}}" id="english" name="category_en" aria-describedby="emailHelp" placholder="name " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Category Name Bangla</label>
                                            <input type="text" class="form-control" value="{{$category->category_bn}}" name="category_bn" id="bangla" required="">
                                           
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Update</button>
                                         
                                    </form>
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                    
                    <!-- /.modal -->
                </section>
        </div>
    @endsection

      