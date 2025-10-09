<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
 
    public function index()
    {
        $categories = JobCategory::latest()->get();
        return view('admin.careers.indexJobCategory', compact('categories'));
    }

    public function create()
    {
        $categories = JobCategory::latest()->get();
        return view('admin.careers.createjobcategory', compact('categories'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:jobcategories,name'
        ]);

        JobCategory::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
        ]);

      
        return redirect()->route('admin.jobcategories.create')->with('success', 'Category Added Successfully!');
    }

    // Delete category
    public function destroy($id)
    {
        JobCategory::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Category Deleted Successfully!');
    }
}
