<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function __construct(){

    }

    public function login(Request $request)
    {
        dd($request->all());
            $user = $request->validate([
                'email' =>'required|email',
                'password' =>'required|min:6',
            ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' =>'required|email|unique:users',
            'password' =>'required|min:6',
        ]);

        if ($validator->fails()) {

        }else {
            $user = User::create([
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            return response()->json([
               'status' =>'success',
                'data' => [],
            ]);
        }
    }

  
}
