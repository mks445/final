<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CategoryFormRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {

        $categories = Category::get();
        return view('backend.category.index', compact('categories'));
        return view('jobs.index', compact('categories'));
    }


    public function create()
    {
        return view('backend.category.create');
    }

    public function store(CategoryFormRequest $request)
    {

        $image = $request->file('image')->store('public/category/');
        Category::create([
            'name' => $name = $request->name,
            'image' => $image,
            'slug' => Str::slug($name),
        ]);
        return redirect()->route('category.index')->with('message', 'Category created successfully');

    }


    public function show()
    {
      //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }




    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if ($request->hasFile('image')) {
            Storage::delete($category->image);
            $image = $request->file('image')->store('public/category/');
            $category->update(['name' => $request->name, 'image' => $image]);
        }
        $category->update(['name' => $request->name]);
        return redirect()->route('category.index')->with('message', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if (Storage::delete($category->image)) {
            $category->delete();
        }

//        return back()->with('message', 'Category deleted successfully');
        return  back();
    }



}
