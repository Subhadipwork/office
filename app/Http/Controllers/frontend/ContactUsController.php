<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Models\ProjectQuestion;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $data =$request->except('_token');
        $insercontuct = ProjectQuestion::create($data);
        if (!$insercontuct) {
            return back()->with('error', 'Something went wrong, please try again later.');
        }
        return back()->with('success', 'Thank you for contacting us. We will get back to you shortly.');
    }

    public function enquiry(Request $request){
        $data =$request->except('_token');
        $insercontuct = Enquiry::create($data);
        if (!$insercontuct) {
          return response()->json(['mesage' => 'Something went wrong, please try again later.','status' => false]);
        }
        return response()->json(['mesage' => 'Thank you for contacting us. We will get back to you shortly.','status' => true]);
    }
}
