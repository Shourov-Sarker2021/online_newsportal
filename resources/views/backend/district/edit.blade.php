@extends('app')
    @section('content')
        <div class="content-wrapper" style="min-height: 243px;">

            <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">District</h1>
                    </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">District Edit Page</li>
                            </ol>
                        </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
            </div>
                <section class="content">
            
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">District Edit Table</h3>
                             
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body col-lg-6">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">District Edit Page</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('update.district',$district->id)}}" method="POST">
                                        @csrf 
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">District Name English</label>
                                            <input type="text" class="form-control" value="{{$district->district_en}}" id="english" name="district_en" aria-describedby="emailHelp" placholder="name " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">District Name Bangla</label>
                                            <input type="text" class="form-control" value="{{$district->district_bn}}" name="district_bn" id="bangla" required="">
                                           
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

      