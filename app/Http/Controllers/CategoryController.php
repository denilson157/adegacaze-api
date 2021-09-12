<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::all());
    }

    public function store(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json($category);
    }


    public function show(Category $category)
    {
        return response()->json($category);
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return response()->json($category);
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json($category);
    }


    public function restore($id)
    {
        $category = Category::onlyTrashed()->where('id', $id)->firstOrFail();
        $category->restore();
        return response()->json($category);
    }
}
