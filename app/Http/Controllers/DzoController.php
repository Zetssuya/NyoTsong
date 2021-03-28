<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DzoController extends Controller
{
    //
    function index()
    {
        $data=DB::table('dzongkhags')->get();
        return view('post-ads', ['data'=>$data]);
        
    }
}
