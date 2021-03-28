<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    function index()
    {
        $data=DB::table('category')->get();
        return view('post-ads', ['data'=>$data]);
        
    }
}
