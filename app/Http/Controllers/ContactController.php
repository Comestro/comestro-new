<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name'    => 'required|string|max:100',
        'email'   => 'required|email',
        'phone'   => 'nullable|string|max:20',
        'subject' => 'nullable|string|max:150',
        'message' => 'required|string',
    ]);

    // Save to DB
    contact::create($request->all());

    // (Optional) Send email to admin
    // Mail::to('admin@yourdomain.com')->send(new ContactMail($request->all()));

    return redirect()->back()->with('success', 'Your message has been sent successfully!');
}

public function viewmsg($id){
    $message = contact::findOrFail($id);
    return view('admin.viewmsg', compact('message'));
}

public function deleteContact($id){
    $msg = contact::findOrFail($id);
    $msg->delete();
    return redirect()->back()->with('success', 'contact deleted successfully');
}

}
