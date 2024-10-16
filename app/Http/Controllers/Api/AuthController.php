<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /*
     * Регистрация
     */
    public function signup(RegisterRequest $request)
    {
        $roleId = Role::firstOrCreate(['code' => 'user'])->id;

        $user = User::create([
            ...$request->validated(),
            'role_id' => $roleId
        ]);
      //$token = $user->remember_token = Str::random(100);
        $token = $user->createToken('remember_token')->plainTextToken;
        $user->save();
        return response([
            'token' => $token,
            'data' => UserResource::make($user),
        ], 201);
    }


    /*
     * Авторизация
     */


    /*
     * Выход
     */
}
