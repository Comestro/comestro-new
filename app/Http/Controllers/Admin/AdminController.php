<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
      public function contactMessages()
    {
        $messages = contact::latest()->get(); 
        return view('admin.allMessages', compact('messages'));
    }
    public function addExpertDev(){
        return view('admin.expertDev');
    }
    public function storeExpertDev(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique|',
            'skill' => 'required',
            'image' => 'nullable|image|max:2048',
            'bio'=> 'required|min:10| max:50,'


        ]);
    }
}
