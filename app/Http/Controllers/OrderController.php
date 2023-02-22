<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   
    public function listPayment(Request $request)
    {
        $payments = Order::orderBy('created_at', 'DESC')
                    ->paginate(10);
        return view('order.list' , compact('payments'));
    }

    public function deletePayment($id){

        Order::find($id)->delete();

       

        return redirect()->back();
    }
}
