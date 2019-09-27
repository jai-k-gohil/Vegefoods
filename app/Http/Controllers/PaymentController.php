<?php

namespace App\Http\Controllers;

use App\BillingInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function getAcknowledgement() {
        return route('home');
    }

    public function createRequest(Request $request) {
        if (Session::get('cart')) {
            $bill_amount = Session::get('cart')->totalPrice+BillingInfo::DELIVERY+BillingInfo::TAX;
        } else {
            return redirect()->back();
        }

        $user  = \App\User::find($request->input('id'));
        if ($user == null) {
            return redirect()->back();
        }

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:".config('services.instamojo.x-api-key'),
                "X-Auth-Token:".config('services.instamojo.x-auth-token')));
        $payload = Array(
            'purpose' => 'Grocery Shopping',
            'amount' => $bill_amount,
            'phone' => $user->phone,
            'buyer_name' => $user->name,
            'redirect_url' => route('payment.successful'),
            'send_email' => false,
            'webhook' => 'http://www.example.com/webhook/',
            'send_sms' => false,
            'email' => $user->email,
            'allow_repeated_payments' => false
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch);

        //echo $response;
        $data = json_decode($response,true);
        return redirect($data['payment_request']['longurl']);

    }
}
