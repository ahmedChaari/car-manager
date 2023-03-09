<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrederUpdateRequest;
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

    public function updateOrder(OrederUpdateRequest $request,Order $order){

        $order->update([
            'somme'         => $request->somme,
            'status'        => $request->status,
        ]);
        return  redirect()->back();
    }


    public function listSupply(Request $request)
    {
        $users = User::orderBy('created_at', 'DESC')
                    ->where('role_id', 3)
                    ->get();

                    $orders = Order::orderBy('created_at', 'DESC')
                    ->paginate(10);
        return view('payment.list' , compact('orders'))->with('users', $users);
    }

    public function storeOrder(Request $request,Order $order){

        Order::create([
            'user_id'     => $request->user_id,
            'somme'       => $request->somme,
            'status'      => 0,
        ]);

        return view('payment.charge');

    }
}
