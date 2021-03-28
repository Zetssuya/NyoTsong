<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

use Redirect, Response;

class productController extends Controller
{
    public function index(){
        return view('post-ads');
    }

    public function store(Request $request){
        $proddata = request()->validate([
            'name' => 'required', 'string', 'max:255',
            'category' => 'required',
            'price' => 'required',
            'detail' => 'required',
            'prodimg' => 'required',
            'location' => 'required'
        ]);

        products::create($proddata);
        return Redirect::to('post-ads')->withSuccess('Great! Your product has been successfully posted for sale!');
    }
}
