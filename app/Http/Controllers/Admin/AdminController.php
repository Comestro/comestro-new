<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\Expert;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class AdminController extends Controller
{
    public function contactMessages()
    {
        $messages = contact::latest()->get();
        return view('admin.allMessages', compact('messages'));
    }
    public function addExpertDev()
    {
        return view('admin.expertDev');
    }
    public function storeExpertDev(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:experts,email',
            'skill' => 'required',
            'image' => 'nullable|image|max:2048',
            'bio' => 'required|min:10|max:50',


        ]);
        if ($request->hasfile('image')) {
            $path = $request->file('image')->store('experts', 'public');
            $validated['image'] = $path;
        }
        Expert::create($validated);
        return redirect()->back()->with('success', 'expert created successfull');
    }

    public function expertIndex()
    {
        $experts = Expert::latest()->get();
        return view('admin.expertIndex', compact('experts'));
    }
    public function updateExpert(Request $request, $id)
    {
        $expert = Expert::findOrFail($id);

        $expert->name = $request->name;
        $expert->email = $request->email;
        $expert->skill = $request->skill;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('experts', 'public');
            $expert->image = basename($path);
        }

        $expert->save();

        return redirect()->route('admin.expertIndex')->with('success', 'Expert updated successfully!');
    }

    public function deleteExpert($id){
        $expert = Expert::findOrFail($id);
          if ($expert->image && file_exists(storage_path('app/public/experts/' . $expert->image))) {
        unlink(storage_path('app/public/experts/' . $expert->image));
    }

        $expert->delete();
         return redirect()->route('admin.expertIndex')->with('success', 'Expert deleted successfully!');

    }

    public function viewexpert($id){
        $expert = Expert::findOrFail($id);
        return view('admin.viewexpert', compact('expert'));
    }
    public function adminSetting(){
        return view('admin.adminSetting');
    }

    public function users(){
        $users = User::paginate(1);
        return view('admin.users', compact('users'));
    }

    public function deleteUser($id){
        $deleteUser = User:: findOrFail($id);
        $deleteUser->delete();
        
    return redirect()->back()->with('success', 'User deleted successfully!');

    }

    public function updateUser(Request $request, $id){
        $user = User::findOrFail($id);
        $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'role' => $request->role,
        ]);
        return redirect()->back()->with('suceess', 'user update successfully');
    }
}
