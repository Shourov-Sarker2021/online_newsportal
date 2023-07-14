<?php

namespace App\Http\Controllers;
use DB;
use Image;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function allindex(){
        /*$post=DB::table('posts')
         ->join('categories','posts.cat_id','categories.id')
         ->join('subcategories','posts.subcat_id','subcategories.id')
         ->join('districts','post.dist_id','district.id')
         ->join('subdistricts','post.subdist_id','subdistrict.id')
         ->get();
         return response()->json($post); */

         $post=DB::table('posts')
         ->join('categories','posts.cat_id','categories.id')
         ->join('subcategories','posts.subcat_id','subcategories.id')
         ->select('posts.*','categories.category_bn','subcategories.subcategory_bn')
         ->get();
         return view('backend.post.index',compact('post'));
    }

    public function create(){
        $category=DB::table('categories')->get();
        $district=DB::table('districts')->get();
        return view('backend.post.create',compact('category','district'));
         
    }

    public function GetSubcat($cat_id){
        $sub=DB::table('subcategories')->where('category_id',$cat_id)->get();
        return response()->json($sub);
    }

    public function GetSubdist($dist_id){
        $tab=DB::table('subdistricts')->where('district_id',$dist_id)->get();
        return response()->json($tab);
    }

    public function index(){
        $post=DB::table('posts')
            ->join('categories','posts.cat_id','categories.id')
            ->join('subcategories','posts.subcat_id','subcategories.id')
            ->select('posts.*','categories.category_bn','subcategories.subcategory_bn')
            ->get();
            return view('backend.post.index',compact('post'));
    }
    public function store(Request $request){
        $validatedData=$request->validate([
            'cat_id'=>'required',
            'dist_id'=>'required'
        ]);
        $data=array();
        $data['title_bn']=$request->title_bn;
        $data['title_en']=$request->title_en;
        $data['cat_id']=$request->cat_id;
        //$data['user_id']=Auth::id();
        $data['subcat_id']=$request->subcat_id;
        $data['dist_id']=$request->dist_id;
        $data['subdist_id']=$request->subdist_id;
        $data['details_en']=$request->details_en;
        $data['details_bn']=$request->details_bn;
        $data['tags_en']=$request->tags_en;
        $data['tags_bn']=$request->tags_bn;
        $data['headline']=$request->headline;
        $data['first_section']=$request->first_section;
        $data['first_section_thumbnail']=$request->first_section_thumbnail;
        $data['bigthumbnail']=$request->bigthumbnail;
        $data['post_date']=date('d-m-Y');
        $data['post_month']=date("F");
        
        $image=$request->image;
        if($image){
            $image_one=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,310)->save('postimages/'.$image_one);
            $data['image']='public/postimages/'.$image_one;
            DB::table('posts')->insert($data);
                $notification=array(
                    'message'=>'Successfully Post all data',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
        }else{
            return Redirect()->back();
        } 
        /*$input=$request->all();
         $image = $request->file('image');
        if($image=$request->file('image')){

            $destinationPath = public_path('images');
            $profileImage    = date('YmDHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image']=$profileImage;

        }else{
            return Redirect()->back();
        }*/
         
    }

    public function destroy($id){
        $post=DB::table('posts')->where('id',$id)->first();
        unlink($post->image);
        DB::table('posts')->where('id',$id)->delete();
        $notification=array(
            'message'=>'Successfully Post Delete',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function edit($id){
        $post=DB::table('posts')->where('id',$id)->first();
        $category=DB::table('categories')->get();
        $district=DB::table('districts')->get();
        return view('backend.post.edit',compact('post','category','district'));
    }

    public function update(Request $request, $id){
        $validatedData=$request->validate([
            'cat_id'=>'required',
            'dist_id'=>'required'
        ]);
        $data=array();
        $data['title_bn']=$request->title_bn;
        $data['title_en']=$request->title_en;
        $data['cat_id']=$request->cat_id;
        //$data['user_id']=Auth::id();
        $data['subcat_id']=$request->subcat_id;
        $data['dist_id']=$request->dist_id;
        $data['subdist_id']=$request->subdist_id;
        $data['details_en']=$request->details_en;
        $data['details_bn']=$request->details_bn;
        $data['tags_en']=$request->tags_en;
        $data['tags_bn']=$request->tags_bn;
        $data['headline']=$request->headline;
        $data['first_section']=$request->first_section;
        $data['first_section_thumbnail']=$request->first_section_thumbnail;
        $data['bigthumbnail']=$request->bigthumbnail;
        
        $oldimage=$request->oldimage;
        $image=$request->image;
        if($image){
            $image_one=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,310)->save('postimages/'.$image_one);
            $data['image']='postimages/'.$image_one;
            DB::table('posts')->where('id',$id)->update($data);
            unlink($oldimage);
                $notification=array(
                    'message'=>'Successfully Post Updated',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
        } 
        // Jodi image na thake notun vabe
        $data['image']=$oldimage;
        DB::table('posts')->where('id',$id)->update($data);
             
                $notification=array(
                    'message'=>'Successfully Post Updated',
                    'alert-type'=>'success'
                );
                return Redirect()->route('all.post')->with($notification);
    }

     
}
