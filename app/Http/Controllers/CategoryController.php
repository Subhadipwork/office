<?php

namespace App\Http\Controllers;


use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Category;

// use Image;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Termwind\Components\Dd;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(30);
        // $categories = Category::all();

        return view('admin.category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.category');
    }




public function store(Request $request)
{
    try {
        
   
    // return $request->all();

    $validatedData = $request->validate([
        'category_name' => 'required|unique:categories',
        'image' => 'required',
    ]);



        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'sub_cate'.time() . '.' . $file->getClientOriginalExtension();
            // $filePath = $request->file('image')->storeAs('public/uploaded/subcategory', $filename);
            $file->move(public_path('uploads/category'), $filename);
            $validatedData['image'] = $filename;
        }

        $category = Category::create([
            'category_name' => $validatedData['category_name'],
            'image'=>$filename
        ]);
        return redirect()->back()->with('success', 'Category created successfully!');
    } catch (\Throwable $th) {
        return redirect()->back()->with('error', 'Category error!');
    }
   
}



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.category.list');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);

        // dd($category);

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
            'slug' => 'required|unique:categories,slug,' . $category->id,
            'image' => 'required',
        ]);

        $category->name = $validatedData['name'];
        $category->slug = $validatedData['slug'];
        $category->save();
        return response()->json(['message' => 'Category Updated successfully!', 'category' => $category]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.category.list')->with('message', 'Category deleted successfully!');
    }
    public function updateStatus(Request $request)
    {

        $request->validate([
            'id' => 'required|integer',
            'status' => 'required|boolean',
        ]);

        $category = Category::find($request->id);
        if (!$category) {
            return response()->json([
                'status' => false,
                'message' => 'Category not found!'
            ], 404);
        }
        if ($request->type == 'status') {
            $category->status = !$category->status;
        } elseif ($request->type == 'top_category') {
            $category->top_category = $category->top_category === '1' ? '0' : '1';
        }

        $category->save();


        return response()->json(
            [
                'status' => true,
                'message' => 'Status updated successfully!',
            ]
        );
    }
}
