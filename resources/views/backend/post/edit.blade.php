@extends('app')
    @section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <?php 
            $sub=DB::table("subcategories")->where('category_id',$post->cat_id)->get();
            $subdist=DB::table("subdistricts")->where('district_id',$post->dist_id)->get(); 
        ?>
        <div class="content-wrapper" style="min-height: 243px;">

            <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Post Update Page</h1>
                    </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Post Update Panel</li>
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
                            <h3 class="card-title">Post Edit Panel</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                                <form role="form" action="{{route('update.post',$post->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Title Bangla</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name='title_bn' value="{{$post->title_bn}}" placeholder="Enter Title Bangla">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputPassword1">Title English</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name='title_en' value="{{$post->title_en}}" placeholder="Enter Title English">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Category</label>
                                                <select name='cat_id' class='form-control'>
                                                    <option selected="" disable="">==Select Category Option==</option>
                                                    @foreach($category as $row)
                                                        <option value="{{$row->id}}" <?php
                                                            if($row->id==$post->cat_id){
                                                                echo"selected";
                                                            }
                                                            ?>>
                                                            {{$row->category_bn}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputPassword1">Sub-Category</label>
                                                <select name='subcat_id' class='form-control' id="subcat_id">
                                                    <option selected="" disable="">==Select Sub-Category Option==</option>
                                                    @foreach($sub as $row)
                                                        <option value="{{$row->id}}" <?php
                                                            if($row->id==$post->subcat_id){
                                                                echo"selected";
                                                            }
                                                            ?>>
                                                            {{$row->subcategory_bn}}
                                                        </option>
                                                    @endforeach
                                                </select>   
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">District</label>
                                                <select name='dist_id' class='form-control'>
                                                    <option selected="" disable="">==Select District Option==</option>
                                                    @foreach($district as $row)
                                                        <option value="{{$row->id}}" 
                                                        <?php
                                                            if($row->id==$post->dist_id){
                                                                echo"selected";
                                                            }
                                                            ?>
                                                            >{{$row->district_bn}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputPassword1">Sub-District</label>
                                                <select name='subdist_id' class='form-control' id="subdist_id">
                                                    <option selected="" disable="">==Select Sub-District Option==</option>
                                                    @foreach($subdist as $row)
                                                        <option value="{{$row->id}}" 
                                                        <?php
                                                            if($row->id==$post->dist_id){
                                                                echo"selected";
                                                            }
                                                            ?>
                                                            >{{$row->subdistrict_bn}}
                                                        </option>
                                                    @endforeach
                                                     
                                                </select>   
                                            </div>

                                        </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="exampleInputFile">File input</label>
                                            <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile" name="image"  >
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="exampleInputFile">Old Image</label><br>
                                                <img src="{{URL::to($post->image)}}" style="height:50px; width:70px ">
                                                <input type="hidden" name="oldimage" value="{{$post->image}}">
                                        </div>    
                                    </div>
                                    <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Tag Bangla</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name='tags_bn' value="{{$post->tags_bn}}" placeholder="Enter Tag Bangla">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputPassword1">Tag English</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name='tags_en' value="{{$post->tags_en}}" placeholder="Enter Tag English">
                                            </div>
                                        </div>

                                    </div>
                                            <div class="form-group col-md-12">
                                                <label for="exampleInputPassword1">Details In English</label>
                                                <textarea class="textarea" placeholder="Please text some here" name="details_en" id="summernote1">
                                                     {{$post->details_en}}
                                                </textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="exampleInputPassword1">Details In Bangla</label>
                                                <textarea id="summernote2">
                                                    Place <em>some</em> <u>text</u> <strong>here</strong> {{$post->details_bn}}
                                                </textarea>
                                            </div>
                                         
                                        
                                    <hr>
                                        <h4 class="text-center">Extra Option</h4>
                                        <div class="row">
                                            <div class="form-check col-md-3">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="headline" value="1" <?php 
                                                if($post->headline==1){
                                                    echo "checked";
                                                }
                                                ?>>
                                                <label class="form-check-label" for="exampleCheck1">Headline</label>
                                            </div>
                                            <div class="form-check col-md-3">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="bigthumbnail" value="1" 
                                                <?php 
                                                    if($post->bigthumbnail==1){
                                                        echo"checked";
                                                    }
                                                ?>>
                                                <label class="form-check-label" for="exampleCheck1">General Big Thumbnail</label>
                                            </div>
                                            <div class="form-check col-md-3">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="first_section" value="1"
                                                <?php 
                                                    if($post->first_section==1){
                                                        echo"checked";
                                                    }
                                                ?>>
                                                <label class="form-check-label" for="exampleCheck1">First Section </label>
                                            </div>
                                            <div class="form-check col-md-3">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="first_section_thumbnail" value="1"
                                                <?php 
                                                    if($post->first_section_thumbnail==1){
                                                        echo"checked";
                                                    }
                                                ?>
                                                >
                                                <label class="form-check-label" for="exampleCheck1">First Section Bigthumble</label>
                                            </div>
                                        </div>    
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
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