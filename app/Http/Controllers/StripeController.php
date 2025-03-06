<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;

class StripeController extends Controller
{
    public function showForm()
    {
        return view('payments.form');
    }

    public function handlePayment(Request $request)
    {
        // Set the Stripe secret key from the config
        Stripe::setApiKey(config('services.stripe.secret'));

        // Create a customer
        $customer = Customer::create([
            'email' => $request->email,
            'source' => $request->stripeToken,
        ]);

        // Charge the customer
        $charge = Charge::create([
            'customer' => $customer->id,
            'amount' => $request->amount * 100, // Amount in cents
            'currency' => 'usd',
            'description' => 'Payment for order #1234',
        ]);

        // Handle successful payment (you can redirect, show a message, etc.)
        return back()->with('success', 'Payment successful!');
    }
}
