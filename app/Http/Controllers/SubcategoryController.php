<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    Public function index(){
        $sub=DB::table('subcategories')->join('categories','subcategories.category_id','categories.id')->select
        ('categories.category_en','subcategories.*')->get();
        $category=DB::table('categories')->get();
        return view('backend.subcategory.index',compact('sub','category'));
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'subcategory_en' => 'required|unique:subcategories|max:55',
            'subcategory_bn' => 'required|unique:subcategories|max:55',
            'category_id' => 'required',
        ]);
        $data=array();
        $data['subcategory_en']=$request->subcategory_en;
        $data['subcategory_bn']=$request->subcategory_bn;
        $data['category_id']=$request->category_id;

        DB::table('subcategories')->insert($data);

        $notification=array(
            'message'=>'Successfully Added in Database',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function edit($id){
        $subcategory=DB::table('subcategories')->where('id',$id)->first();
        $category=DB::table('categories')->get();
        return view('backend.subcategory.edit',compact('subcategory','category'));
    }

    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'subcategory_en' => 'required|max:55',
            'subcategory_bn' => 'required|max:55',
        ]);
        $data=array();
        $data['subcategory_en']=$request->subcategory_en;
        $data['subcategory_bn']=$request->subcategory_bn;

        DB::table('subcategories')->where('id',$id)->update($data);

        $notification=array(
            'message'=>'Successfully Updated in Database',
            'alert-type'=>'success'
        );
        return Redirect()->route('subcategories')->with($notification);
    }

    public function destroy($id){
        DB::table('subcategories')->where('id',$id)->delete();

        $notification=array(
            'message'=>'Successfully Delete From Database',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
     
