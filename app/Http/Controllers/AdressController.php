<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    public function index()
    {
        return response()->json(Adress::where('user_id', Auth()->user()->id)->get());
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth()->user()->id;

        $address = Adress::create($request->all());
        return $this->returnVO("Criado", $address);
    }

    public function show(Adress $address)
    {
        return response()->json($address);
    }

    public function update(Request $request, Adress $address)
    {
        $request['user_id'] = Auth()->user()->id;

        $address->update($request->all());

        return $this->returnVO("Atualizado", $address);
    }

    private function returnVO($message, $content)
    {
        return response()->json(["message" => $message, "resp" => $content]);
    }
}
