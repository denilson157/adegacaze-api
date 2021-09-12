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
        return response()->json($brand);
    }


    public function show(Brand $brand)
    {
        return response()->json($brand);
    }

    public function update(Request $request, Brand $brand)
    {
        $brand->update($request->all());
        return response()->json($brand);
    }


    public function destroy(Brand $brand)
    {
        $brand->delete();
        return response()->json($brand);
    }


    public function restore($id)
    {
        $brand = Brand::onlyTrashed()->where('id', $id)->firstOrFail();
        $brand->restore();
        return response()->json($brand);
    }
}
