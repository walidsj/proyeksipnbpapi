<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;

class AuthController extends Controller
{
    private $remember = 30;

    public function login(Request $request)
    {
        $this->validate($request, [
            'key' => ['required'],
        ]);

        $user = User::where('nip', $request->key)->first();

        if (empty($user))
            return response()->json(['message' => 'User tidak terdaftar.'], 400);

        return response()->json([
            'message' => 'Login sukses.',
            'data' => $user,
            'token' => $this->generateJWT($user, $request->remember)
        ]);
    }

    private function generateJWT(User $user, $remember)
    {
        // if ($remember)
        //     $this->remember = 30;

        $payload = [
            'iss' => url(),
            'sub' => $user->id,
            'nama' => $user->nama,
            'nip' => $user->nip,
            'role' => $user->role,
            'iat' => time(),
            'exp' => time() + 3600 * 24 * $this->remember
        ];

        return JWT::encode($payload, config('app.key'), 'HS256');
    }

    public function logout(Request $request)
    {
        return response()->json(['message' => 'Logout sukses.']);
    }
}
