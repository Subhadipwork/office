<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(){
        $items = Banner::all();
        return view('admin.banner.index',compact('items'));
    }

    public function create(){
        return view('admin.banner.create');
    }


    public function store(Request $request){
        // return dd($request->all());
        try {
            $validation = $request->validate([
                'image' => 'required',
                'type' => 'required',
            ]);
            
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = 'banner' . '_' .time() . '.' . $ext;
                $file->move(public_path('uploads/banner'), $filename);
                $validation['image'] = $filename;
            }
            Banner::create($validation);
            return redirect()->back()->with('success', 'Banner created successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

public function destroy($id){
    try {
        $banner = Banner::findOrFail($id);
        $banner->delete();
        return response()->json(['status' => true, 'message' => 'Banner deleted successfully.']);
    } catch (\Exception $e) {
        return response()->json(['status' => false, 'message' => $e->getMessage()]);
    }
}


public function status($id)
{
    try {
        $faq = Banner::findOrFail($id);
        $faq->status = $faq->status == 1 ? 0 : 1;
        $faq->save();
        return response()->json(['status' => true, 'message' => 'Status updated successfully.']);
    } catch (\Exception $e) {
        return response()->json(['status' => false, 'message' => $e->getMessage()]);
    }
}
}
