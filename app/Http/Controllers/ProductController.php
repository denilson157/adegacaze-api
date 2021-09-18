<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all());
    }


    public function store(Request $request)
    {

        if ($request->img) {
            $image = $request->file('img')->store('product');
            $image = "storage/" . $image;
        } else
            $image = 'storage/product/imagem.jpg';

        $product = Product::create($request->all());

        return $this->returnVO("Criado", $product);
    }

    public function show(Product $product)
    {
        return response()->json($product);
    }

    public function update(Request $request, Product $product)
    {
        if ($request->img) {

            $image = $request->file('img')->store('product');
            $image = "storage/" . $image;

            if ($product->img != "storage/product/imagem.jpg") {
                Storage::delete(str_replace('storage/', '', $product->img)); // ver essa parte aqui depois com o prof, nao entedi muito bem
            }
        }

        $product->update($request->all());

        return $this->returnVO("Atualizado", $product);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return $this->returnVO("Apagado", $product);
    }

    public function restore($id)
    {
        $brand = Product::onlyTrashed()->where('id', $id)->firstOrFail();
        $brand->restore();

        return $this->returnVO("Restaurada", $brand);
    }

    public function getTrashed()
    {
        return response()->json(Product::onlyTrashed()->get());
    }

    private function returnVO($message, $content)
    {
        return response()->json(["message" => $message, "resp" => $content]);
    }
}
