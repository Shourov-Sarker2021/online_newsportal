<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category=DB::table('categories')->get();
        return view('backend.index',compact('category'));
        //return view('backend.index');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'category_en' => 'required|unique:categories|max:55',
            'category_bn' => 'required|unique:categories|max:55',
        ]);
        $data=array();
        $data['category_en']=$request->category_en;
        $data['category_bn']=$request->category_bn;

        DB::table('categories')->insert($data);

        $notification=array(
            'message'=>'Successfully Added in Database',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function destroy($id){
        DB::table('categories')->where('id',$id)->delete();

        $notification=array(
            'message'=>'Successfully Delete From Database',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function edit($id){
        $category=DB::table('categories')->where('id',$id)->first();
        return view('backend.edit',compact('category'));
    }

    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'category_en' => 'required|max:55',
            'category_bn' => 'required|max:55',
        ]);
        $data=array();
        $data['category_en']=$request->category_en;
        $data['category_bn']=$request->category_bn;

        DB::table('categories')->where('id',$id)->update($data);

        $notification=array(
            'message'=>'Successfully Updated in Database',
            'alert-type'=>'success'
        );
        return Redirect()->route('categories')->with($notification);
    }
}
