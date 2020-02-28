<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    public function getExpressCheckout(){

        $checkoutData = [];

        $provider = new ExpressCheckout();

        $response = $provider->setExpressCheckout($checkoutData);
    }

    public function getExpressCheckoutSuccess(){

    }
}
