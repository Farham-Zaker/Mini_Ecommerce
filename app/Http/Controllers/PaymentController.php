<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $product_id = $request->input("product_id");
        $amount = $request->input("amount");

        $response = zarinpal()
            ->amount($amount)
            ->request()
            ->description('توضیحات تراکنش')
            ->callbackUrl(url("/payment/confirm"))
            ->send();

        if (! $response->success()) {
            return view('error', [
                "status_code" => 500,
                'message' => ' پرداخت شما با خطا مواجه شد.',
            ]);
        }

        Transaction::create([
            'product_id' => $product_id,
            'ref_id' => $response->authority(),
            'amount' => $amount,
            'status' => 'pending',
        ]);

        return $response->redirect();
    }
    public function paymentConfirm(Request $request)
    {
        $authority = $request->input('Authority');
        $status = $request->input('Status');

        $transaction = Transaction::where(["ref_id" => $authority])->first();

        if ($status != 'OK') {
            $transaction->status = 'failed';
            $transaction->save();

            return view('error', [
                "status_code" => 500,
                'message' => ' پرداخت شما با خطا مواجه شد.',
            ]);
        }

        $response = zarinpal()
            ->amount($transaction->amount)
            ->verification()
            ->authority($authority)
            ->send();

        if (!$transaction) {
            $transaction->status = 'failed';
            $transaction->save();

            return view('error', [
                "status_code" => 500,
                'message' => 'تراکنش یافت نشد.',
            ]);
        }

        if (!$response->success()) {
            return view('error', [
                "status_code" => 500,
                'message' => ' پرداخت شما با خطا مواجه شد.',
            ]);
        }

        // Update transaction status
        $transaction->status = 'success';
        $transaction->ref_id = $authority;
        $transaction->save();

        return view('payment', [
            "status_code" => 500,
            'message' => '✅ پرداخت شما با موفقیت انجام شد',
        ]);
    }
}
