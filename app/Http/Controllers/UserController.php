<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userTable(){
        $users = User::orderByDesc('created_at')->paginate(10);
        return view('users.users',[
        'users'=>$users
        ]);
    }

    public function userCreate(){
        return view('users.create',[
        ]);
    }

    public function createInfo(Request $request){
        $user = new User();
        $user -> name = $request['name'];
        $user -> email = $request['email'];
        $user -> passwordOrign = $request['password'];
        $user -> password = bcrypt($request['password']);
        $user -> save();
        return redirect() -> route('userTable');
    }

    public function userAuth(LoginRequest $request){
        $credentials =[
            'email'=>$request->email,
            'password'=>$request->password
        ];
            if(Auth::attempt($credentials)){
              $users=User::orderByDesc('created_at')->paginate(10);
              return view('users.users',[
              'users'=>$users
              ]);
            }else{
                return redirect()->back();
            }
    }

    public function userDelete(Request $request){

        if(Auth::User()->id==$request->id){
            $users=User::orderByDesc('created_at')->paginate(10);
            return view('users.users',[
            'users'=>$users
            ]);
          }else{
            //   return redirect()->back();
            $user = User::find($request->id);
            $user->delete();
            return redirect()->route('userTable');
          }
    }
}
