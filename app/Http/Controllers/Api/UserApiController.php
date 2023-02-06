<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{

    public function index()
    {
        return UserResource::collection(User::all());
    }

    public function store(Request $request)
    {
        $user = new User();
        $user -> name = $request['name'];
        $user -> email = $request['email'];
        $user -> passwordOrign = $request['password'];
        $user -> password = bcrypt($request['password']);
        $user -> save();

        // $user = User::create($request->all());
        return $user;
    }

    public function show(Request $request)
    {
        // return User::find($request->id);
        return new UserResource(User::findOrFail($request->id));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return $user;
        // $token=$user->createToken('auth_token')->accessToken;

        // return response([
        //     'token'=>$token
        // ]);
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return User::all();
    }
}
