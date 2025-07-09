<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;

class StripeController extends Controller
{
    public function stripe()
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $order = Order::where('id', session('order_id'))->firstOrFail();

        $amountInCents = intval(round($order->grand_total * 100));

        $checkoutSession = StripeSession::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => strtolower(session('currency', 'GBP')),
                    'product_data' => [
                        'name' => 'Order #' . $order->order_number,
                    ],
                    'unit_amount' => $amountInCents,
                ],
                'quantity' => 1,
            ]],
            'metadata' => [
                'order_id' => $order->id,
            ],
            'mode' => 'payment',
            'success_url' => route('stripe.success'),
            'cancel_url' => route('stripe.cancel'),
        ]);

        return redirect($checkoutSession->url);
    }

    public function success(Request $request)
    {
        if (!session('order_id')) { // if there's no 'order_id' in the Session    // 'user_id' was stored in the Session inside checkout() method in Front/ProductsController.php
            return view('cart');
        }

        return view('front.stripe.success');
    }

    public function cancel()
    {
        if (!session('order_id')) { // if there's no 'order_id' in the Session    // 'user_id' was stored in the Session inside checkout() method in Front/ProductsController.php
            return view('cart');
        }

        return view('front.stripe.fail');
    }

}
