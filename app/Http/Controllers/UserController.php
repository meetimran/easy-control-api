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
        $validated = $this->validate($req, [
            'isActive' => 'nullable',
            'property_id' => 'nullable',
            'CreatedBy' =>'nullable',
            'LastUpdatedBy' =>'nullable',
            'CreatedByName' =>'nullable',
            'LastUpdatedByName' =>'nullable',
            'SortKey' =>'nullable',
            'UserID' =>'nullable',
            'FirstName' =>'nullable',
            'LastName' =>'nullable',
            'UserName' => 'required',
            'Email' => 'required',
            'Password' => 'required',
            'Hash' => 'nullable',
            'Salt' => 'nullable',
            'LastLogin' => 'nullable',
            'ChangePasswordOnFirstLogon' => 'nullable',
            'OptimisticLockField' => 'nullable',
            'GCRecord' => 'nullable'
        ]);

        // dd($validated);
        $newUser =new User();
        $newUser->isActive = $validated['isActive'];
        $newUser->property_id = $validated['property_id'];
        $newUser->CreatedBy = $validated['CreatedBy'];
        $newUser->LastUpdatedBy = $validated['LastUpdatedBy'];
        $newUser->CreatedByName = $validated['CreatedByName'];
        $newUser->LastUpdatedByName = $validated['LastUpdatedByName'];
        $newUser->SortKey = $validated['SortKey'];
        $newUser->UserID = $validated['UserID'];
        $newUser->FirstName = $validated['FirstName'];
        $newUser->LastName = $validated['LastName'];
        $newUser->UserName = $validated['UserName'];
        $newUser->Email = $validated['Email'];
        $newUser->Password = Hash::make($validated['Password']);
        $newUser->Hash = $validated['Hash'];
        $newUser->Salt = $validated['Salt'];
        $newUser->LastLogin = $validated['LastLogin'];
        $newUser->ChangePasswordOnFirstLogon = $validated['ChangePasswordOnFirstLogon'];
        $newUser->OptimisticLockField = $validated['OptimisticLockField'];
        $newUser->GCRecord = $validated['GCRecord'];
        $newUser->save();

        return response($newUser->refresh(), 200);
    }

    public function destroy(User $id){
        return response($id->delete(), 200);
    }

    public function update(Request $req, User $id){
        $user = $id;

        $validated = $this->validate($req, [
            'isActive' => 'nullable',
            'property_id' => 'nullable',
            'CreatedBy' =>'nullable',
            'LastUpdatedBy' =>'nullable',
            'CreatedByName' =>'nullable',
            'LastUpdatedByName' =>'nullable',
            'SortKey' =>'nullable',
            'UserID' =>'nullable',
            'FirstName' =>'nullable',
            'LastName' =>'nullable',
            'UserName' => 'required',
            'Email' => 'required',
            'Password' => 'required',
            'Hash' => 'nullable',
            'Salt' => 'nullable',
            'LastLogin' => 'nullable',
            'ChangePasswordOnFirstLogon' => 'nullable',
            'OptimisticLockField' => 'nullable',
            'GCRecord' => 'nullable'
        ]);

        // dd($validated);
        $user->isActive = $validated['isActive'];
        $user->property_id = $validated['property_id'];
        $user->CreatedBy = $validated['CreatedBy'];
        $user->LastUpdatedBy = $validated['LastUpdatedBy'];
        $user->CreatedByName = $validated['CreatedByName'];
        $user->LastUpdatedByName = $validated['LastUpdatedByName'];
        $user->SortKey = $validated['SortKey'];
        $user->UserID = $validated['UserID'];
        $user->FirstName = $validated['FirstName'];
        $user->LastName = $validated['LastName'];
        $user->UserName = $validated['UserName'];
        $user->Email = $validated['Email'];
        $user->Password = Hash::make($validated['Password']);
        $user->Hash = $validated['Hash'];
        $user->Salt = $validated['Salt'];
        $user->LastLogin = $validated['LastLogin'];
        $user->ChangePasswordOnFirstLogon = $validated['ChangePasswordOnFirstLogon'];
        $user->OptimisticLockField = $validated['OptimisticLockField'];
        $user->GCRecord = $validated['GCRecord'];
        $user->save();

        return response($user->refresh(), 200);
    }
}
