<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SettingController extends Controller
{
    public function SocialSetting(){
        $social=DB::table('socials')->first();
        return view('backend.setting.social',compact('social'));
    }

    public function update(Request $request,$id){
         
        $data=array();
        $data['facebook']=$request->facebook;
        $data['twitter']=$request->twitter;
        $data['youtube']=$request->youtube;
        $data['linkedin']=$request->linkedin;
        $data['instragram']=$request->instragram;
        

        DB::table('socials')->where('id',$id)->update($data);

        $notification=array(
            'message'=>'Successfully Updated in Database',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function SeoSetting(){
        $seo=DB::table('seos')->first();
        return view('backend.setting.seo',compact('seo'));
    }
    
    public function SEOupdate(Request $request,$id){
        $data=array();
        $data['meta_author']=$request->meta_author;
        $data['meta_title']=$request->meta_title;
        $data['meta_keyword']=$request->meta_keyword;
        $data['meta_description']=$request->meta_description;
        $data['google_analytics']=$request->google_analytics;
        $data['google_verification']=$request->google_verification;
        $data['alexa_analytics']=$request->alexa_analytics;
        

        DB::table('seos')->where('id',$id)->update($data);

        $notification=array(
            'message'=>'Successfully Updated in Database',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function NamazSetting(){
        $namaz=DB::table('namaz')->first();
        return view('backend.setting.namaz',compact('namaz'));
    }
    public function NamazUpdate(Request $request,$id){
        $data=array();
        $data['Fajor']=$request->Fajor;
        $data['Johor']=$request->Johor;
        $data['Asor']=$request->Asor;
        $data['Magrib']=$request->Magrib;
        $data['Esar']=$request->Esar;
        $data['Jummah']=$request->jummah;
         
        

        DB::table('namaz')->where('id',$id)->update($data);

        $notification=array(
            'message'=>'Successfully Updated in Database',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function LivetvSetting(){
        $livetv=DB::table('livetv')->first();
        return view('backend.setting.livetv',compact('livetv'));
    }

    public function Updatelivetv(Request $request,$id){
        $data=array();
        $data['embeded_code']=$request->embeded_code;
        //$data['status']=$request->status;

        DB::table('livetv')->where('id',$id)->update($data);

        $notification=array(
            'messege'=>'Successfully Updated in Database',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    public function ActiveLivetv($id){
        DB::table('livetv')->where('id',$id)->update(['status'=>1]);
        $notification=array(
            'messege'=>'Successfully Updated in Database',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function DeactiveLivetv($id){
        DB::table('livetv')->where('id',$id)->update(['status'=>0]);
        $notification=array(
            'messege'=>'Successfully Updated in Database',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function NoticeSetting(){
        $notice=DB::table('notices')->first();
        return view('backend.setting.notice',compact('notice'));
    }

    public function UpdateNotice(Request $request,$id){
        $data=array();
        $data['notice']=$request->notice;
        DB::table('notices')->where('id',$id)->update($data);

        $notification=array(
            'messege'=>'Successfully Updated in Database',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    public function ActiveNotice($id){
        DB::table('notices')->where('id',$id)->update(['status'=>1]);
        $notification=array(
            'messege'=>'Notice On in your website',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function DeactiveNotice($id){
        DB::table('notices')->where('id',$id)->update(['status'=>0]);
        $notification=array(
            'messege'=>'Notice Off in your website',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function ImportantWebsite(){
        $website=DB::table('websites')->get();
        return view('backend.setting.website',compact('website'));
    }

    public function StoreWebsite(Request $request){
        $data=array();
        $data['website_name']=$request->website_name;
        $data['website_name_en']=$request->website_name_en;
        $data['website_link']=$request->website_link;
        DB::table('websites')->insert($data);

        $notification=array(
            'messege'=>'Successfully Updated in Database',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
