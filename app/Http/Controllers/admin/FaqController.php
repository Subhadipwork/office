<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $items = Faq::all();
        return view('admin.faq.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        try {
            $validation = $request->validate([
                'question' => 'required',
                'answer' => 'required',
            ]);
            Faq::create($validation);
            return redirect()->back()->with('success', 'FAQ created successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
     
      
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
        $item = Faq::findOrFail($id);
        return view('admin.faq.create',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validation = $request->validate([
                'question' => 'required',
                'answer' => 'required',
            ]);
            $faq = Faq::findOrFail($id);
            $faq->update($validation);
            return redirect()->back()->with('success', 'FAQ updated successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }




public function status($id){
    try {
        $faq = Faq::findOrFail($id);
        $faq->status = $faq->status == 1 ? 0 : 1;
        $faq->save();
        return response()->json(['status' => true, 'message' => 'Status updated successfully.']);
    } catch (\Exception $e) {
        return response()->json(['status' => false, 'message' => $e->getMessage()]);
    }
}
}
