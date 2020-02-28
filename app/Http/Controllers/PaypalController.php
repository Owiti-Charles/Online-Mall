<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    public function getExpressCheckout(){
        $cart = \Cart::session(auth()->id());
        // $cartItems =[
        //     [
        //         'name' => 'product 1',
        //         'price' => 9.99,
        //         'qty' => 1,
        //     ],
        //     [
        //         'name' => 'product 2',
        //         'price' => 4.99,
        //         'qty' => 2,
        //     ],
        // ];
        $cartItems = array_map(function($item){
            return [
                'name' => $item['name'],
                'price' => $item['price'],
                'qty' => $item['quantity']
            ];
        },$cart->getContent()->toarray());

        dd($cartItems);

        $checkoutData = [
            'items' => $cartItems,
            'return_url' => route('paypal.success'),
            'cancel_url' => route('paypal.cancel'),
            'invoice_id' => uniqid(),
            'invoice_description' => 'Order description',
            'total' => $cart->getTotal(),

        ];

        $provider = new ExpressCheckout();

        $response = $provider->setExpressCheckout($checkoutData);
    }

    public function cancelPage(){
        dd('failed');
    }

    public function getExpressCheckoutSuccess(){

    }
}
