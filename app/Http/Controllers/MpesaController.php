<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class MpesaController extends Controller
{
    public function generateAccessToken()
    {
        $url = env('MPESA_ENV') == 0
            ? 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials'
            : 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $curl = curl_init($url);
        curl_setopt_array(
            $curl,
            array(
            CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=utf8'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_USERPWD => env('MPESA_CONSUMER_KEY') . ':' . env('MPESA_CONSUMER_SECRET')
            )
        );
        $response = json_decode(curl_exec($curl));
        curl_close($curl);

        return $response->access_token;

    }

    private function makeHTTP($url, $content)
    {
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => array('Content-Type:application/json', 'Authorization:Bearer ' . $this->generateAccessToken()),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($content)

            )
        );
        $curl_response = curl_exec($curl);
        curl_close($curl);
        return $curl_response;
    }

    public function stkPush(Request $request)
    {
        //echo $amount;
        // $user = User::where('id', Auth::id())->first();
        // $user_mpesa = "254" . $user->mpesa_no;
        // $user_mpesa_no = (int) $user_mpesa;
        $timestamp = date('YmdHis');
        $password = base64_encode(env('MPESA_STK_SHORTCODE') . env('MPESA_PASSKEY') . $timestamp);
        $curl_post_data = array(
            'BusinessShortCode' => env('MPESA_STK_SHORTCODE'),
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => 1,
            'PartyA' => env('MPESA_TEST_MSISDN'),
            'PartyB' => env('MPESA_STK_SHORTCODE'),
            'PhoneNumber' => env('MPESA_TEST_MSISDN'),
            'CallBackURL' => env('MPESA_CALLBACK_URL') . '/api/stkpush',
            'AccountReference' => 'New Order',
            'TransactionDesc' => 'Goods Payment'
        );
        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

        $response = $this->makeHTTP($url, $curl_post_data);
        return $response;
    }
}