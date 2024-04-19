<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
   public function login(Request $request){
      $request->validate([
         'email' => 'required|email',
         'password' => 'required'
     ]);

     if (Auth::attempt($request->only('email', 'password'))) {
         $user = Auth::user();
         $token = $user->createToken('authToken')->plainTextToken;

         return response()->json([
             'access_token' => $token,
             'token_type' => 'Bearer',
         ]);
     }

     throw ValidationException::withMessages([
         'email' => ['The provided credentials are incorrect.'],
     ]);
   }
} 