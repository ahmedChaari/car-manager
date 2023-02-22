<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function updateOrder(Request $request,Order $order){

        $userCreate  = Auth::user()->role_id === 1;

        $order->update([

            'somme'        => $request->somme,
            'status'        => $request->status,
        ]);
        return redirect()->back();
    }
}
