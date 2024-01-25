<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         $items = Project::with('category', 'projectimage')->get();
        // return $products;
        return view('admin.project.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.project.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'category_id' => 'required',
                'title' => 'required',
                'client_name' => 'required',
                'description' => 'required'
            ]);
            $project = Project::create($validatedData);
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $image) {
                    $extension = $image->getClientOriginalExtension();
                    $createname = $project->id . '_' . uniqid() . '.' . $extension;
                    $imagePath = $image->move(public_path('uploads/projects'), $createname);
                    ProductImage::create([
                        'product_id' => $project->id,
                        'image' => $createname,
                        'type' => 'project'
                    ]);
                }
            }
            return redirect()->back()->with('success', 'Project created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {   $categories = Category::get();
        $product = Project::with('projectimage')->find($id);
        return view('admin.project.edit', compact('product','categories'));
    }

public function update(Request $request, $product)
{
    try {
        $product = Project::findOrFail($product);
        $validatedData = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'client_name' => 'required',
            'description' => 'required'
        ]);

        $product->update($validatedData);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $extension = $image->getClientOriginalExtension();
                $createname = $product->id . '_' . uniqid() . '.' . $extension;
                $imagePath = $image->move(
                    public_path('uploads/projects'), 
                    $createname
                );
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $createname,
                    'type' => 'project'
                ]);
            }
        }

        return redirect()->back()->with('success', 'Project updated successfully');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error updating project');
    }
}

public function destroy($id)
{
    $product = Project::find($id);
    if (!$product) {
        return response()->json(['status' => false, 'message' => 'Product not found!'], 404);
    }
    
    ProductImage::where('product_id', $id)->where('type', 'project')->delete();
    $product->delete();
    
    return response()->json(['status' => true, 'message' => 'Product Deleted']);
}

    public function updateStatus(Request $request){

        $project = Project::find($request->id);
        if (!$project) {
            return response()->json([
                'status' => false,
                'message' => 'Project not found!'
            ], 404);
        }
        if ($request->type == 'status') {
            $project->status = $project->status == '1' ? '0' : '1';
        }

        $project->save();
        return response()->json([
            'status' => true,
            'message' => 'Project Status Changed'
        ]);
    }



public function projectremoveimage($id)
{
    $projectimage = ProductImage::find($id);
    if (empty($projectimage)) {
        return response()->json(['status' => false, 'message' => 'Project Image not found!']);
    }
    $imagepath = public_path('uploads/projects/' . $projectimage->image);
    try {
        if (!unlink($imagepath)) {
            throw new \Exception('Failed to delete project image');
        }
        $projectimage->delete();
        return response()->json(['status' => true, 'message' => 'Project Deleted']);
    } catch (\Exception $e) {
        return response()->json(['status' => false, 'message' => $e->getMessage()]);
    }
}
    
}
