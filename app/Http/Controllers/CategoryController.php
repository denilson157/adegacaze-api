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

        return $this->returnVO("Criada", $category);
    }


    public function show(Category $category)
    {
        return response()->json($category);
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());

        return $this->returnVO("Atualizada", $category);
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return $this->returnVO("Apagada", $category);
    }


    public function restore($id)
    {
        $category = Category::onlyTrashed()->where('id', $id)->firstOrFail();
        $category->restore();

        return $this->returnVO("Restaurada", $category);
    }

    public function getTrashed()
    {
        return response()->json(Category::onlyTrashed()->get());
    }

    private function returnVO($message, $content)
    {
        return response()->json(["message" => $message, "resp" => $content]);
    }
}
