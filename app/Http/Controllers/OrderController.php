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
                   // ->where('role_id', 3)
                    ->paginate(10);
        return view('payment.list' , compact('orders'))->with('users', $users);
    }


    function rand_string($length) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        return substr(str_shuffle($chars),0,$length);
    }

    public function storeOrder(Request $request,Order $order){

       
       $order = Order::create([
            'user_id'     => $request->user_id,
            'somme'       => $request->somme,
            'status'      => 0,
            'code'        => $this->rand_string(10),
            'payement_method_id'=> 'ec9b8f08-9318-4563-a9c9-2e4acbedf67a',
        ]);
        // dd( $order);

        return view('payment.charge');

    }
}
