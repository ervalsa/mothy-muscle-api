<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);

            $credentials = request(['email', 'password']);

            if (!Auth::attempt($credentials)) {
                return response()->json([
                    'code' => 500,
                    'status' => 'error',
                    'message' => 'Email atau password salah',
                ]);
            }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'code' => 200,
                'status' => 'success',
                'message' => 'Login berhasil',
                'data' => $user
            ]);
        } catch (Exception $error) {
            return response()->json([
                'code' => 500,
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat login',
            ]);
        }
    }
}
