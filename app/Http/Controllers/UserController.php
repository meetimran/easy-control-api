<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show(){
        return User::all();
    }

    public function create(Request $req){
        // dd($req->name);
        $validated = $this->validate($req, [
            'name' => 'required',
            'email' => 'required',
            // 'email_verified_at' => '',
            // 'password' => '',
            // 'remember_token' => '',

        ]);
        $newUser =new User();
        // dd($newUser->name);
        $newUser->name = $req->name;
        $newUser->email = $req->email;
        $newUser->email_verified_at = $req->email_verified_at;
        $newUser->password = Hash::make($req->password);
        $newUser->remember_token = $req->remember_token;
        $newUser->save();

        return response($newUser->refresh(), 200);
    }

    public function destroy(User $id){
        return response($id->delete(), 200);
    }

    public function update(Request $req, User $id){
        $user = $id;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->email_verified_at = $req->email_verified_at;
        $user->password = $req->password;
        $user->remember_token = $req->remember_token;
        $user->save();

        return response($user->refresh(), 200);
    }
}
