<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ExtraController extends Controller
{
    public function LangBangla(){
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang','bangla');
        return redirect()->back();
    }

    public function LangEnglish(){
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang','english');
        return redirect()->back();
    }
}
