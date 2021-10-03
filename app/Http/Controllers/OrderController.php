<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\OrderProduct;

class OrderController extends Controller
{

    public function store(Request $request)
    {
        $userId = Auth()->user()->id;
        $request->validate([
            'payment_type' => 'required',
            'adress_id' => 'required',
            'observation' => 'required'
        ]);

        $cart = Cart::where('user_id', '=', $userId)->get();

        $order = Order::create([
            'user_id' => $userId,
            'payment_type' => $request->payment_type,
            'adress_id' => $request->adress_id,
            'observation' => $request->observation
        ]);

        foreach ($cart as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'quantity' => $item->quantity,
                'product_id' => $item->product_id,
                'price' => $item->product->price,
            ]);

            $item->delete();
        }

        return $this->returnVO("Pedido Registrado", $order);
    }

    public function index()
    {
        $products = Order::with(['adress', 'Products'])->where('user_id', '=', Auth()->user()->id)->get();

        return response()->json($products);
    }

    public function show(Order $order)
    {
        $order = Order::with('Products')->with('adress')->where('id', '=', $order->id)->get();

        return response()->json($order);
    }

    private function returnVO($message, $content)
    {
        return response()->json(["message" => $message, "resp" => $content]);
    }
}
