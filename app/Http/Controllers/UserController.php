<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        $newUser->password = $req->password;
        $newUser->remember_token = $req->remember_token;
        $newUser->save();

        return response($newUser->refresh(), 200);
    }

    public function destroy(User $id){
        $id->delete();
    }

    public function update(Request $req, User $id){
        $id->name = $req->name;
        $id->email = $req->email;
        $id->email_verified_at = $req->email_verified_at;
        $id->password = $req->password;
        $id->remember_token = $req->remember_token;
        $id->save();
    }
}
