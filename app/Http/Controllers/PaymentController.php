<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show( Request $request)
    {
        if ( ! $request->price ) {
            return redirect()->route('dashboard');
        }

        return view('payment');
    }

    public function store( Request $request)
    {
        dd($request->all());
    }
}
