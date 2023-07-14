<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index(){
        $district=DB::table('districts')->get();
        return view('backend.district.index',compact('district'));
        
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'district_en' => 'required|unique:districts|max:55',
            'district_bn' => 'required|unique:districts|max:55',
        ]);
        $data=array();
        $data['district_en']=$request->district_en;
        $data['district_bn']=$request->district_bn;

        DB::table('districts')->insert($data);

        $notification=array(
            'message'=>'Successfully Added in Database',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function destroy($id){
        DB::table('districts')->where('id',$id)->delete();

        $notification=array(
            'message'=>'Successfully Delete From Database',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function edit($id){
        $district=DB::table('districts')->where('id',$id)->first();
        return view('backend.district.edit',compact('district'));
    }

    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'district_en' => 'required|max:55',
            'district_bn' => 'required|max:55',
        ]);
        $data=array();
        $data['district_en']=$request->district_en;
        $data['district_bn']=$request->district_bn;

        DB::table('districts')->where('id',$id)->update($data);

        $notification=array(
            'message'=>'Successfully Updated in Database',
            'alert-type'=>'success'
        );
        return Redirect()->route('district')->with($notification);
    }
}
