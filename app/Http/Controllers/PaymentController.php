<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function show(Request $request)
    {
        if ( ! $request->price || ! $request->id) {
            return redirect()->route('dashboard');
        }

        return view('payment');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Stripe\Exception\ApiErrorException
     */
    public function store(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $charge = Charge::create([
            'amount'      => $request->price * 100,
            'currency'    => 'usd',
            'description' => 'Test charge',
            'source'      => $request->stripeToken,
        ]);

        return response()->json([
            'status' => 'payment done',
            'charge' => $charge,
        ], 200);
    }

}
