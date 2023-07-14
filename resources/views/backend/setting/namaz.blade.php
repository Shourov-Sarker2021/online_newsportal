@extends('app')
    @section('content')
        <div class="content-wrapper" style="min-height: 243px;">

            <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Namaz Setting</h1>
                    </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Namaz Setting </li>
                            </ol>
                        </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
            </div>
                <section class="content">
            
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Namaz Time Setting Table</h3>
                             
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body col-lg-6">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Update Namaz Setting</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('update.namaz',$namaz->id)}}" method="POST">
                                        @csrf 
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Fajor</label>
                                            <input type="text" class="form-control" value="{{$namaz->Fajor}}" id="english" name="facebook" aria-describedby="emailHelp" placholder="facebook " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Johor</label>
                                            <input type="text" class="form-control" value="{{$namaz->Johor}}" id="english" name="twitter" aria-describedby="emailHelp" placholder="twitter " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Asor</label>
                                            <input type="text" class="form-control" value="{{$namaz->Asor}}" id="english" name="youtube" aria-describedby="emailHelp" placholder="youtube " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Magrib</label>
                                            <input type="text" class="form-control" value="{{$namaz->Magrib}}" id="english" name="linkedin" aria-describedby="emailHelp" placholder="linkedin " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Esar</label>
                                            <input type="text" class="form-control" value="{{$namaz->Esar}}" id="english" name="instragram" aria-describedby="emailHelp" placholder="instragram " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Jummah</label>
                                            <input type="text" class="form-control" value="{{$namaz->Jummah}}" id="english" name="instragram" aria-describedby="emailHelp" placholder="instragram " required="" > 
                                            
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

      