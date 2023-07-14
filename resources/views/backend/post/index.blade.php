@extends('app')
    @section('content')
        <div class="content-wrapper" style="min-height: 243px;">

            <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">All Posts</h1>
                    </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Posts</li>
                            </ol>
                        </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
            </div>
                <section class="content">
            
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Post Table</h3>
                            <button class="btn btn-danger btn-sm" style="float:right" data-toggle="modal" data-target="#modal-default">Add New</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Subcategory</th>
                                        <th>Title</th> 
                                        <th>Thumbnail</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($post as $row)
                                        <tr>
                                            <td>{{$row->category_bn}}</td>
                                            <td>{{$row->subcategory_bn}}</td>
                                            <td>{{$row->title_bn}}</td>
                                            <td><img src="{{URL::to($row->image)}}" style="height: 80px; width: 80px;"></td>
                                            <td>{{$row->post_date}}</td>
                                            <td>
                                                <a href="{{URL::to('edit/post/'.$row->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('delete.post',$row->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                                            </td>
                                    
                                        </tr>
                                    @endforeach    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Category</th>
                                        <th>Subcategory</th>
                                        <th>Title</th>
                                        <th>Thumbnail</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.modal -->
                </section>
        </div>
    @endsection

      