<?php

namespace App\Http\Controllers\Api\V1\Auth;

use Illuminate\Http\Request;
use App\http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request['email'])->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }

        return response()->json([
            'success' => true,
            'message' => 'Authenticated successfully.',
            'user' => $user,
            'token' => $user->createToken($user->email)->plainTextToken
        ]);
    }

    public function logout()
    {
        $user = auth()->user();
        $user->tokens()->delete();
        // auth()->user()->currentAccessToken()->delete();
        // $user->where('id', $user->currentAccessToken()->id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logged out successfully.',
            'data' => null
        ]);
    }

    public function checkAuth()
    {
        if (!auth()->user()) return false;

        return true;
    }

    public function getUsers()
    {
        $users = User::all();

        return response()->json([
            'users' => $users
        ]);
    }

    public function getUser($id)
    {
        $user = User::find($id);

        return response()->json([
            'user' => $user
        ]);
    }
}
