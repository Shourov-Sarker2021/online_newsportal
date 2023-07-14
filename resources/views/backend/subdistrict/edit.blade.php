@extends('app')
    @section('content')
        <div class="content-wrapper" style="min-height: 243px;">

            <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Sub-District</h1>
                    </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Sub-District Page</li>
                            </ol>
                        </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
            </div>
                <section class="content">
            
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Sub-District Edit Table</h3>
                             
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body col-lg-6">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Sub-District Edit Page</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('update.subdistrict',$subdistrict->id)}}" method="POST">
                                        @csrf 
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Sub-District Name English</label>
                                            <input type="text" class="form-control" value="{{$subdistrict->subdistrict_en}}" id="english" name="subdistrict_en" aria-describedby="emailHelp" placholder="name " required="" > 
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Sub-District Name Bangla</label>
                                            <input type="text" class="form-control" value="{{$subdistrict->subdistrict_bn}}" name="subdistrict_bn" id="bangla" required="">
                                           
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1">Select District Name</label>
                                            <select class="form-control @error('district_id')is-invalid @enderror" name="district_id" required>
                                            <option disable="" selected="">==Select Any One==></option>
                                                @foreach($district as $row)
                                                    <option value="{{$row->id}}">{{$row->district_en}}|{{$row->district_bn}}</option>
                                                @endforeach
                                            </select> 
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

      