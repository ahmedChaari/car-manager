<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listUser(Request $request)
    {
        $users = User::orderBy('created_at', 'DESC')
                    ->paginate(10);
        return view('user.list' , compact('users'));
    }

}
