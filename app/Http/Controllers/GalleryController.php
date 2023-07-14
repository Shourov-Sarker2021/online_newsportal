<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;

class GalleryController extends Controller
{
    public function PhotoGallery(){
        $photo=DB::table('photos')->first();
        return view('backend.gallery.photo',compact('photo'));
    }

    public function StoreGallery(Request $request){
        $data=array();
        $data['title']=$request->title;
        $data['type']=$request->type;
        
        
        $image=$request->photo;
        if($image){
            $image_one=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,310)->save('gallery/'.$image_one);
            $data['photo']='gallery/'.$image_one;
            DB::table('photos')->insert($data);
                $notification=array(
                    'message'=>'Successfully Insert Photo',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
        }else{
            return Redirect()->back();
        
        }
    }

    public function VideoGallery(){
        $video=DB::table('videos')->first();
        return view('backend.gallery.video',compact('video'));
    }

    public function StoreVideo(Request $request){
        $data=array();
        $data['title']=$request->title;
        $data['embeded_code']=$request->embeded_code;
        $data['type']=$request->type;
        DB::table('videos')->insert($data);
                $notification=array(
                    'message'=>'Successfully Insert Video',
                    'alert-type'=>'success'
                );
    }
}
