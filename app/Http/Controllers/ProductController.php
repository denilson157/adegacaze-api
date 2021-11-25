<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $request['old_price'] = $request->price;

        $product = Product::create($request->all());

        return $this->returnVO("Criado", $product);
    }

    public function show(Product $product)
    {
        return response()->json($product);
    }

    public function update(Request $request, Product $product)
    {
        $request['old_price'] = $product->price;

        $product->update($request->all());
        return $this->returnVO("Atualizado", $product);
    }

    public function destroy(Product $product)
    {

        if ($product->Orders()->count() > 0) {
            return $this->returnVO("Não é possível apagar um produto que tenha um pedido.", null);
        }

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


    public function getByCategory(Category $category)
    {
        $products = Product::where('category_id', $category->id)
            ->inRandomOrder()
            ->limit(8)
            ->get();

        return response()->json($products);
    }



    public function searchByCategory(Request $request)
    {
        $categoryId = $request['category_id'];
        $productName = $request['product_name'];

        $products = Product::where('name', $productName)
            ->orWhere('name', 'like', '%' . $productName . '%')
            ->where('category_id', $categoryId)
            ->get();

        return response()->json($products);
    }

    private function returnVO($message, $content)
    {
        return response()->json(["message" => $message, "resp" => $content]);
    }
}
