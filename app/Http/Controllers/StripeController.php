<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use Mail;
use Carbon\Carbon;

use App\Mail\NotifyMail;

class StripeController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            "amount" => $request->amount,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment task3"
        ]);

        Session::flash('success', 'Payment successful!');
        Mail::to($request->email)->send(new NotifyMail($request->amount, $request->name));

        if (Mail::failures()) {
            Session::flash('success', 'Sorry! Please try again ');
        } else {
            Session::flash('success', ' Email successfully sent. ');
        }

        return view('invoice', ['name' => $request->name, 'amount' => $request->amount, 'date' => Carbon::now()->toDateTimeString()]);
    }
}
