<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return response()->json(Brand::all());
    }

    public function store(Request $request)
    {
        $brand = Brand::create($request->all());
        return $this->returnVO("Criada", $brand);
    }


    public function show(Brand $brand)
    {
        return response()->json($brand);
    }

    public function update(Request $request, Brand $brand)
    {
        $brand->update($request->all());
        return $this->returnVO("Atualizada", $brand);
    }


    public function destroy(Brand $brand)
    {
        $brand->delete();
        return $this->returnVO("Apagada", $brand);
    }


    public function restore($id)
    {
        $brand = Brand::onlyTrashed()->where('id', $id)->firstOrFail();
        $brand->restore();

        return $this->returnVO("Restaurada", $brand);
    }

    public function getTrashed()
    {
        return response()->json(Brand::onlyTrashed()->get());
    }

    private function returnVO($message, $content)
    {
        return response()->json(["message" => $message, "resp" => $content]);
    }
}
