<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function home()
    {
        return view('sellers.home');
    }

    public function create()
    {
        return view('sellers.create');
    }

    public function store(Request $request)
    {
        // dd('test');
        return view('sellers.validation');
    }
}