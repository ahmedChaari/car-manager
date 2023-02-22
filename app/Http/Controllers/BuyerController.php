<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function home()
    {
        return view('buyers.home');
    }

    public function create()
    {
        return view('buyers.create');
    }

    public function store(Request $request)
    {
        // dd('test');
    }
}
