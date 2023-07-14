@extends('app')
    @section('content')
        <div class="content-wrapper" style="min-height: 243px;">

            <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Live TV Setting</h1>
                    </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Live TV Setting </li>
                            </ol>
                        </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
            </div>
                <section class="content">
            
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Live TV Setting Table</h3>
                            
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body col-lg-6">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Update Live TV Setting</h4>
                                    @if($livetv->status==1)
                                        <a href="{{route('deactive.livetv',$livetv->id)}}" style="float:right" class="btn btn-danger">Deactive</a>
                                     @else
                                        <a href="{{route('active.livetv',$livetv->id)}}" style="float:right" class="btn btn-success">Active</a>
                                    
                                    
                                    @endif
                                     
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('update.livetv',$livetv->id)}}" method="POST">
                                        @csrf 
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Embeded Code</label>
                                            <textarea type="text" class="form-control"  name="embeded-code" aria-describedby="emailHelp" placholder="facebook " required="" > 
                                                {{$livetv->embeded_code}}
                                            </textarea>
                                            @if($livetv->status==1)
                                            <small class="text-success">Now Live TV is Active</small>
                                         @else
                                            <small class="text-danger">Now Live TV is Deactive</small>
                                        
                                        
                                        @endif
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

      