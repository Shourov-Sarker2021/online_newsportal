@extends('app')
    @section('content')
        <div class="content-wrapper" style="min-height: 243px;">

            <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Important Website</h1>
                    </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Website page</li>
                            </ol>
                        </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
            </div>
                <section class="content">
            
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Important Website</h3>
                            <button class="btn btn-danger btn-sm" style="float:right" data-toggle="modal" data-target="#modal-default">Add New</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Website Name Bangla</th>
                                        <th>Website Name English</th>
                                        <th>Website Link</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($website as $row)
                                        <tr>
                                            <td>{{$row->website_name}}</td>
                                            <td>{{$row->website_name_en}}</td>
                                            <td>{{$row->website_link}}</td>
                                            <td>
                                                <a href="{{URL::to('edit/category/'.$row->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('delete.category',$row->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                                            </td>
                                    
                                        </tr>
                                    @endforeach    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Website Name Bangla</th>
                                        <th>Website Link</th>
                                        <th>Website Name English</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Insert Website Category</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('store.website')}}" method="POST">
                                        @csrf 
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Website Name Bangla </label>
                                            <input type="text" class="form-control @error('website_name')is-invalid @enderror" id="english" name="website_name" aria-describedby="emailHelp" placholder="name " > 
                                            @error('website_name') 
                                                <span class="invalid-feedback" role="alert">  <!-- Particuler box wise error showing-->
                                                    <strong>{{$message}}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Website Name English </label>
                                            <input type="text" class="form-control @error('website_name_en')is-invalid @enderror" id="english" name="website_name_en" aria-describedby="emailHelp" placholder="name " > 
                                            @error('website_name_en') 
                                                <span class="invalid-feedback" role="alert">  <!-- Particuler box wise error showing-->
                                                    <strong>{{$message}}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Website Link</label>
                                            <input type="text" class="form-control @error('website_link')is-invalid @enderror" name="website_link" id="bangla">
                                            @error('website_link') 
                                                <span class="invalid-feedback" role="alert">  <!-- Particuler box wise error showing-->
                                                    <strong>{{$message}}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                         
                                    </form>
                                </div>
                                 
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                </section>
        </div>
    @endsection

      