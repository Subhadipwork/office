<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\OpenCloseTime;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutus = AboutUs::first();
        $timing = OpenCloseTime::get();
        return view('admin.aboutus.index',compact('aboutus','timing'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $aboutus = AboutUs::findOrFail($id);

    $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'career' => 'required',
    ]);

    if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/aboutus/'), $filename);
        $validatedData['image'] = $filename;
    }

    $aboutus->update($validatedData);

    if ($request->has('timing')) {
        foreach ($request->timing as $key => $value) {
            OpenCloseTime::where('id', $key)->update(['day' => $value['day'],'open' => $value['open'] ]);
        }
    }

    return redirect()->back()->with('success', 'About Us Updated Successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
