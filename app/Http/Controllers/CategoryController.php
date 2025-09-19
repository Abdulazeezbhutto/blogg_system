<?php

namespace App\Http\Controllers;
use App\Models\categories;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function list()
    {
        $categories = categories::all();
        return view("admin.category.listcategory", compact('categories'));
    }
    function create()
    {
        return view("admin.category.createcategory");
    }

    function edit(Request $request, $id)
    {
        $category = categories::find($id);
        return view("admin.category.editcategory", compact('category'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',

        ]);

        // Create a new category
        $category = new categories();
        $category->name = $request->input('name');
        $category->save();
        if (!$category->save()) {
            return back()->with('fail', 'Error saving category. Please try again.');
        } else {
            return redirect("listcategory")->with('success', 'Category saved successfully.');
        }


    }

    function update(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|string|max:255',

        ]);

        $category = categories::findOrFail($request->input('id'));

        $result = $category->update([
            "name" => $request->name,
        ]);

        if ($result) {
            return redirect("listcategory")->with("success", "Record Update Success Fully");
        } else {
            return redirect()->back()->with("error", "Record not Updated successfully..!");
        }
    }


    function deletecategory(Request $request)
    {
        // return $request->all();
        //find record
        $category = categories::findOrFail($request->id);

        //delete record
        if ($category->delete()) {
            return redirect("listcategory")->with("success", "Record Deleted Successfully");
        } else {
            return redirect()->back()->with("error", "Record not Deleted successfully..!");
        }
    }
}
