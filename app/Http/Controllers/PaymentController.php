<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function deletePayment($id){

        Order::find($id)->delete();

        return back();
    }
}
