<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
         $categorys = Category::with('project')->where('status', 1)->get();
        return view('frontend.project.index',compact('categorys'));
    }

    public function details($id){

         $project = Project::with('projectimage')->where('id', $id)->first();
        return view('frontend.project.details',compact('project'));
    }
}
