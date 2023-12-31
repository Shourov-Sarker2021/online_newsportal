@extends('app')
    @section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <div class="content-wrapper" style="min-height: 243px;">

            <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Post  Insert Page</h1>
                    </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Post Insert Panel</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Post Insert Panel</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                                <form role="form" action="{{route('store.post')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Title Bangla</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name='title_bn' placeholder="Enter Title Bangla">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputPassword1">Title English</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name='title_en' placeholder="Enter Title English">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Category</label>
                                                <select name='cat_id' class='form-control'>
                                                    <option selected="" disable="">==Select Category Option==</option>
                                                    @foreach($category as $row)
                                                        <option value="{{$row->id}}">{{$row->category_bn}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputPassword1">Sub-Category</label>
                                                <select name='subcat_id' class='form-control' id="subcat_id">
                                                    <option selected="" disable="">==Select Sub-Category Option==</option>
                                                     
                                                </select>   
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">District</label>
                                                <select name='dist_id' class='form-control'>
                                                    <option selected="" disable="">==Select District Option==</option>
                                                    @foreach($district as $row)
                                                        <option value="{{$row->id}}">{{$row->district_bn}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputPassword1">Sub-District</label>
                                                <select name='subdist_id' class='form-control' id="subdist_id">
                                                    <option selected="" disable="">==Select Sub-District Option==</option>
                                                     
                                                </select>   
                                            </div>

                                        </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image" required="">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Tag Bangla</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name='tags_bn' placeholder="Enter Tag Bangla">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputPassword1">Tag English</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name='tags_en' placeholder="Enter Tag English">
                                            </div>
                                        </div>

                                    </div>
                                            <div class="form-group col-md-12">
                                                <label for="exampleInputPassword1">Details In English</label>
                                                <textarea id="summernote1">
                                                    Place <em>some</em> <u>text</u> <strong>here</strong>
                                                </textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="exampleInputPassword1">Details In Bangla</label>
                                                <textarea id="summernote2">
                                                    Place <em>some</em> <u>text</u> <strong>here</strong>
                                                </textarea>
                                            </div>
                                         
                                        
                                    <hr>
                                        <h4 class="text-center">Extra Option</h4>
                                        <div class="row">
                                            <div class="form-check col-md-3">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="headline" value="1">
                                                <label class="form-check-label" for="exampleCheck1">Headline</label>
                                            </div>
                                            <div class="form-check col-md-3">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="bigthumbnail" value="1">
                                                <label class="form-check-label" for="exampleCheck1">General Big Thumbnail</label>
                                            </div>
                                            <div class="form-check col-md-3">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="first_section" value="1">
                                                <label class="form-check-label" for="exampleCheck1">First Section </label>
                                            </div>
                                            <div class="form-check col-md-3">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="first_section_thumbnail" value="1">
                                                <label class="form-check-label" for="exampleCheck1">First Section Bigthumble</label>
                                            </div>
                                        </div>    
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--js & jquery for post panel categoy & subcategory part  -->
            <script type="text/javascript">
                $(document).ready(function(){
                    $('select[name="cat_id"]').on('change',function(){
                        var cat_id=$(this).val();
                        if(cat_id){
                            $.ajax({
                                url:"{{url('/get/subcat/')}}/"+cat_id,
                                type:"GET",
                                dataType:"json",
                                success:function(data){
                                     $("#subcat_id").empty();
                                     $.each(data,function(key,value){
                                        $("#subcat_id").append('<option value="'+value.id+'">'+value.subcategory_bn+'</option>');
                                     });
                                },
                            });
                        }else{
                            alert('danger');
                        }
                    });
                });
            </script>
            <!--js & jquery for post panel district & subdistrict part -->
            <script type="text/javascript">
                $(document).ready(function(){
                    $('select[name="dist_id"]').on('change',function(){
                        var dist_id=$(this).val();
                        if(dist_id){
                            $.ajax({
                                url:"{{url('/get/subdist/')}}/"+dist_id,
                                type:"GET",
                                dataType:"json",
                                success:function(data){
                                     $("#subdist_id").empty();
                                     $.each(data,function(key,value){
                                        $("#subdist_id").append('<option value="'+value.id+'">'+value.subdistrict_bn+'</option>');
                                     });
                                },
                            });
                        }else{
                            alert('danger');
                        }
                    });
                });
            </script>

    @endsection        