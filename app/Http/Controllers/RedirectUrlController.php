<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectUrlController extends Controller
{

    public function redirect() {
        if (Auth::check()) {
            $role_id = Auth::user()->role->id;
            switch ($role_id) {
                case 1:
                    return redirect('/espace-admin');
                case 2:
                    return redirect('/espace-vendeur');
                case 3:
                    return redirect('/espace-acheteur');
            }
            dd($role_id);
        } else {
            return redirect('/');
        }
    }
}
