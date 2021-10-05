<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password))
            return $this->returnVO("Credenciais inválidas", null);


        $userCredentials = ([
            'user' => $user,
            'token' => $user->createToken($request->device_name)->plainTextToken
        ]);


        return $this->returnVO("Login realizado", $userCredentials);
    }

    public function logout(Request $request)
    {
        // Auth::logout();
        // auth()->user()->tokens()->delete();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return $this->returnVO("Logout realizado", null);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email|unique:users',
                'name' => 'required|max:255',
                'password' => 'required|min:8',
                'birthday' => 'nullable|date',
                'cellphone' => 'required|integer',
                'device_name' => 'required'
            ]
        );

        $request['isAdmin'] = false;


        $user = User::create($request->all());

        $userCredentials = ([
            'user' => $user,
            'token' => $user->createToken($request->device_name)->plainTextToken
        ]);

        return $this->returnVO("Usuário Criado", $userCredentials);
    }

    private function returnVO($message, $content)
    {
        return response()->json(["message" => $message, "resp" => $content]);
    }
}
