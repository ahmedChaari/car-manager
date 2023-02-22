<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser(Request $request)
    {
        $users = User::orderBy('created_at', 'DESC')
                    ->paginate(10);
        return view('user.list' , compact('users'));
    }



    public function loginUser(Request $request) {
        $fields = $request->validate([
            'email'    => 'required|string',
            'password' => 'required|string'
        ]);
        // Check email
        $user = User::where('email', $fields['email']);

        // Check password
        if($user || !Hash::check($fields['password'], $user->password) ) {

            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
                
        }elseif($user || !Hash::check($fields['password'], $user->password) ){
            return redirect()->intended('dashboard2')
                        ->withSuccess('You have Successfully loggedin');
        }
        

       
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }


}
