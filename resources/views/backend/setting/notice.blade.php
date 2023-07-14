@extends('app')
    @section('content')
        <div class="content-wrapper" style="min-height: 243px;">

            <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Notice Setting</h1>
                    </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Notice Board Setting </li>
                            </ol>
                        </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
            </div>
                <section class="content">
            
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Notice Board Setting Table</h3>
                            
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body col-lg-6">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Update Notice Board Setting</h4>
                                    @if($notice->status==1)
                                        <a href="{{route('deactive.notice',$notice->id)}}" style="float:right" class="btn btn-danger">Deactive</a>
                                     @else
                                        <a href="{{route('active.notice',$notice->id)}}" style="float:right" class="btn btn-success">Active</a>
                                    
                                    
                                    @endif
                                     
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('update.notice',$notice->id)}}" method="POST">
                                        @csrf 
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Notice</label>
                                            <textarea type="text" class="form-control"  name="notice" aria-describedby="emailHelp" placholder="facebook " required="" > 
                                                {{$notice->notice}}
                                            </textarea>
                                            @if($notice->status==1)
                                            <small class="text-success">Notice Board is Active</small>
                                         @else
                                            <small class="text-danger">Notice Board is Deactive</small>
                                        
                                        
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

      