<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;

class PaymentController extends Controller
{
    public function index() {
        return view('admin.payment',['payments' => Payment::where('amount','!=','0')->get()]);
    }
}
