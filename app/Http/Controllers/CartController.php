<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $cart = Cart::with('product')->where('user_id', '=', Auth()->user()->id)->get();

        return response()->json($cart);
    }


    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'quantity_add' => 'required'
        ]);

        $item = Cart::where([['product_id', '=', $request->product_id], ['user_id', '=', Auth()->user()->id]])->first();

        if ($item) {

            $item->update([
                'quantity' => $item->quantity + $request->quantity_add
            ]);


            return $this->returnVO("Adicionado ao carrinho", null);
        }

        Cart::create([
            'user_id' => Auth()->user()->id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity_add
        ]);


        return $this->returnVO("Adicionado ao carrinho", null);
    }

    public function remove(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'quantity_remove' => 'required'
        ]);

        $item = Cart::where([['product_id', '=', $request->product_id], ['user_id', '=', Auth()->user()->id]])->first();

        if ($item->quantity > $request->quantity_remove) {
            $newQuantity = $item->quantity - $request->quantity_remove;

            $item->update([
                'quantity' => $newQuantity
            ]);

            return $this->returnVO("Removido do carrinho", null);
        }

        $item->delete();
        return $this->returnVO("Removido do carrinho", null);
    }

    private function returnVO($message, $content)
    {
        return response()->json(["message" => $message, "resp" => $content]);
    }
}
