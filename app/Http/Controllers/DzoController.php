<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DzoController extends Controller
{
    //
    function index()
    {
        // $data=Category::all();
        $data=DB::table('dzongkhags')->get();
        // return view('test', ['data'=>$data]);
        return view('post-ads', ['data'=>$data]);
        
    }
}
