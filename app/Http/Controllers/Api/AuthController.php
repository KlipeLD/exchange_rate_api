<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User\LoginRequest;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        $user = User::where('email', $data['email'])
            ->firstOrFail();
        $check = Hash::check($data['password'], $user->password);
        if($check)
        {
            $user->tokens()->delete();
            $token = $user->createToken($user->name);
            return response()->json([
                'token' => $token->plainTextToken,
                'message' => 'Successfully authorized',
            ]);
        }
        else
        {
            return response()->json([
                'message' => 'Error while authorized',
            ]);
        }
    }

}
