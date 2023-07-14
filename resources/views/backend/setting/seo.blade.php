@extends('app')
    @section('content')
        <div class="content-wrapper" style="min-height: 243px;">

            <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">SEO Setting</h1>
                    </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">SEO Setting </li>
                            </ol>
                        </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
            </div>
                <section class="content">
            
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">SEO Setting Table</h3>
                             
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body col-lg-6">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Update SEO Setting</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('update.seo',$seo->id)}}" method="POST">
                                        @csrf 
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Meta Author</label>
                                            <input type="text" class="form-control" value="{{$seo->meta_author}}" id="english" name="meta_author" aria-describedby="emailHelp" placholder="facebook " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Meta Title</label>
                                            <input type="text" class="form-control" value="{{$seo->meta_title}}" id="english" name="meta_title" aria-describedby="emailHelp" placholder="twitter " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Meta Keyword</label>
                                            <input type="text" class="form-control" value="{{$seo->meta_keyword}}" id="english" name="meta_keyword" aria-describedby="emailHelp" placholder="youtube " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Meta Description</label>
                                            <input type="text" class="form-control" value="{{$seo->meta_description}}" id="english" name="meta_description" aria-describedby="emailHelp" placholder="linkedin " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Google Analytics</label>
                                            <input type="text" class="form-control" value="{{$seo->google_analytics}}" id="english" name="google_analytics" aria-describedby="emailHelp" placholder="instragram " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Google Verification</label>
                                            <input type="text" class="form-control" value="{{$seo->google_analytics}}" id="english" name="google_analytics" aria-describedby="emailHelp" placholder="instragram " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Alexa Analytics</label>
                                            <input type="text" class="form-control" value="{{$seo->alexa_analytics}}" id="english" name="alexa_analytics" aria-describedby="emailHelp" placholder="instragram " required="" > 
                                            
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

      