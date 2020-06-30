<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function form(){
        return view('form');
    }
    public function welcome(Request $request){
        
        $name = $request->input('fname')." ".$request->input('lname');
        return view('welcomes',['nama'=>$name]);
    }
}
