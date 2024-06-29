<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScanController extends Controller
{
    public function index(){
        return view('Scan.upload');
    }
    public function store(Request $request){

        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('imgtoscan',$image,'public');
        return $path ;

    }

}
