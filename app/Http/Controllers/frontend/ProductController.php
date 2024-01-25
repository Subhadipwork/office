<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id){
        $singleproduct = Product::where('status',1)->where('id',$id)->first();
        return view('frontend.singleproduct.index',compact('singleproduct'));
    }
}
