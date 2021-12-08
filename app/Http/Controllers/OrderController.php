<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\OrderProduct;
use App\Models\User;
use Carbon\Carbon;


class OrderController extends Controller
{

    public function store(Request $request)
    {
        $userId = Auth()->user()->id;
        $request->validate([
            'payment_type' => 'required',
            'adress_id' => 'required'
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
    public function listAll()
    {
        $user = User::where('id', '=', Auth()->user()->id)->get()->firstOrFail();

        if (!$user || ($user && $user['isAdmin'] == false))
            return $this->index();

        $products = Order::with(['adress', 'Products', 'status', 'user'])->orderBy('id', 'DESC')->get();

        return response()->json($products);
    }

    public function index()
    {
        $products = Order::with(['adress', 'Products', 'status', 'user'])->where('user_id', '=', Auth()->user()->id)->orderBy('id', 'DESC')->get();

        return response()->json($products);
    }

    public function show(Order $order)
    {
        $order = Order::with('Products')->with(['adress', 'status', 'status', 'user'])->where('id', '=', $order->id)->get()->firstOrFail();

        return response()->json($order);
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'id' => 'required',
            'status_id' => 'required'
        ]);

        $order = Order::find($request->id);

        if ($request['status_id'] ===  3) {
            $order->update([
                'status_id' => $request->status_id,
                'date_finish' => date("Y-m-d")
            ]);
        } else {
            $order->update([
                'status_id' => $request->status_id
            ]);
        }


        return $this->returnVO("Pedido com status alterado", $order);
    }

    private function returnVO($message, $content)
    {
        return response()->json(["message" => $message, "resp" => $content]);
    }
}
