<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Stripe\Webhook;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Cart;
use App\Models\ProductsAttribute;

class StripeWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $endpoint_secret = config('services.stripe.webhook_secret');

        try {
            $event = Webhook::constructEvent(
                $payload, $sig_header, $endpoint_secret
            );
        } catch (\UnexpectedValueException $e) {
            return response('Invalid payload', 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            return response('Invalid signature', 400);
        }

        if ($event->type === 'checkout.session.completed') {
            $session = $event->data->object;

            // Recover order from metadata or session
            $orderId = $session->metadata->order_id;
            $order = Order::with('orders_products')->find($orderId);

            if (!$order) return response('Order not found', 404);

            // Save payment
            $payment = new Payment();
            $payment->order_id = $orderId;
            $payment->user_id = $order->user_id;
            $payment->payment_id = $session->payment_intent;
            $payment->payer_email = $session->customer_details->email;
            $payment->amount = $session->amount_total / 100; // convert from cents
            $payment->currency = $session->currency;
            $payment->payment_status = 'paid';
            $payment->save();

            // Update order
            $order->update(['order_status' => 'Paid']);

            // Send order email
            $email = $order->email ?? $session->customer_details->email;
            $messageData = [
                'email' => $email,
                'name' => $order->name,
                'order_id' => $orderId,
                'orderDetails' => $order->toArray(),
            ];

            Mail::send('emails.order', $messageData, function ($message) use ($email) {
                $message->to($email)->subject('Order Paid via Stripe');
            });

            // Reduce inventory
            foreach ($order->orders_products as $product) {
                $stock = ProductsAttribute::getProductStock($product['product_id'], $product['product_size']);
                $newStock = $stock - $product['product_qty'];

                ProductsAttribute::where([
                    'product_id' => $product['product_id'],
                    'size' => $product['product_size'],
                ])->update(['stock' => $newStock]);
            }

            // Clear cart
            Cart::where('user_id', $order->user_id)->delete();
        }

        return response('Webhook handled', 200);
    }
}
