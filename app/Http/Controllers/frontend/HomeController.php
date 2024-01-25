<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $categorys = Category::where('status',1)->take(4)->get();

        $recommended = Category::with('subcategory')->take(4)->get();
    
        // return $recommended = Category::with('subcategory')->where('status',1)->where('recommended',1)->take(4)->get();
        $newarrival = Category::where('status',1)->where('new_arrival',1)->take(4)->get();
        $bannerdata = Banner::where('type','slider_banner')->get();

        $offerbanner = Banner::where('type','offer_banner')->first();
        return view('frontend.home',compact('bannerdata','categorys','recommended','newarrival','offerbanner'));
    }

    public function category($id){

        $category =Category::with('product')->get();
        return view('frontend.category.index',compact('category'));
    }
}