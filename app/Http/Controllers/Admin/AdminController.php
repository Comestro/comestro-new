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
}
