<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class Categories extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function ShowAll()
    {
        $categories = Category::all();
        return view('Categories.index', ['categories' => $categories]);
    }

    public function Add(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('category');
        $category->save();
        return redirect()->back();
    }

    public function Update(Request $request, $id)
    {
        $category = Category::find($id);
        if ($category === null)
        {
            abort(404);
        }
        $category->name = $request->input('category');
        $category->save();
        return redirect()->back();
    }
    public function Delete($id)
    {
        $category = Category::find($id);
        if ($category === null)
        {
            abort(404);
        }
        $category->delete();
        return redirect()->back();
    }
}
