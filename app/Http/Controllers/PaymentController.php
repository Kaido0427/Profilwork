<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use FedaPay;

class PaymentController extends Controller
{
    public function pay()
    {
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $accessToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('Payement.success'),
                "cancel_url" => route('Payement.cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => "50"
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] !== null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }

            return redirect()->route('Payement.cancel')->with('error', 'Quelque chose s\'est mal p');
        } else {
            return redirect()->route('Payement.index')->with('error', $response['message'] ?? 'Quelque chose s\'est mal p');
        }
    }


    public function paymentCancel()
    {
        return redirect()
            ->route('Payement.index')
            ->with('error', 'La transaction a été annulée.');
    }

    public function paymentSuccess(Request $request)
    {
        transaction::create([
            'user_id' => auth()->user()->id,
            'receiver_mail' => 'emailreceiver@gmail.com',
            'status' => 'ok',
            'amount' => '5'
        ]);

        //---------------------------------------------------
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {

            if (auth()->user()->role_id == 1) {
                return redirect()->route('historique')->with('success', 'Transaction effectué avec succes');
            } elseif (auth()->user()->role_id == 3) {
                return redirect()->route('artisan.create')->with('success', 'Transaction effectué avec succes,vous pouvez créer votre profil');
            }
        } else {
            return redirect()
                ->route('Payement.index')
                ->with('error', $response['message'] ?? 'Quelque chose s\'est mal passé');
        }
    }

}
