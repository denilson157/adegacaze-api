<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    public function index()
    {
        return response()->json(Adress::where('user_id', $this->getUserId())->get());
    }

    public function store(Request $request)
    {
        $request['user_id'] = $this->getUserId();


        $addressUser = Adress::where('user_id', $this->getUserId())->get();
        if (count($addressUser) === 0) {
            $request['pattern'] = 1;
        }

        $address = Adress::create($request->all());
        return $this->returnVO("Criado", $address);
    }

    public function show(Adress $address)
    {
        return response()->json($address);
    }

    public function update(Request $request, Adress $address)
    {
        $request['user_id'] = $this->getUserId();

        if ($request['pattern']) {
            $allAddress = Adress::where('pattern', 1)->get();
            foreach ($allAddress as $add) {
                $add['pattern'] = 0;
                $add->update();
            }
        }

        $address->update($request->all());

        return $this->returnVO("Atualizado", $address);
    }

    public function getPatternAddress()
    {
        return Adress::where('user_id', $this->getUserId())
            ->where('pattern', 1)
            ->firstOrFail();
    }

    private function getUserId()
    {
        return Auth()->user()->id;
    }

    private function returnVO($message, $content)
    {
        return response()->json(["message" => $message, "resp" => $content]);
    }
}
