@extends('app')
    @section('content')
        <div class="content-wrapper" style="min-height: 243px;">

            <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Social Setting</h1>
                    </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Social Setting </li>
                            </ol>
                        </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
            </div>
                <section class="content">
            
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Social Setting Table</h3>
                             
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body col-lg-6">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Update Social Setting</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('update.social',$social->id)}}" method="POST">
                                        @csrf 
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Facebook</label>
                                            <input type="text" class="form-control" value="{{$social->facebook}}" id="english" name="facebook" aria-describedby="emailHelp" placholder="facebook " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Twitter</label>
                                            <input type="text" class="form-control" value="{{$social->twitter}}" id="english" name="twitter" aria-describedby="emailHelp" placholder="twitter " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Youtube</label>
                                            <input type="text" class="form-control" value="{{$social->youtube}}" id="english" name="youtube" aria-describedby="emailHelp" placholder="youtube " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Linkedin</label>
                                            <input type="text" class="form-control" value="{{$social->linkedin}}" id="english" name="linkedin" aria-describedby="emailHelp" placholder="linkedin " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Instragram</label>
                                            <input type="text" class="form-control" value="{{$social->instragram}}" id="english" name="instragram" aria-describedby="emailHelp" placholder="instragram " required="" > 
                                            
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

      