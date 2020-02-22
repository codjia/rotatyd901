<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Blog;
use App\Donation;
use App\Http\Controllers\Controller;

class CashDonationController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function donateCash(Request $request, Donation $donate) {
        request()->validate(
            [
                'number' => 'required|digits:10',
                'vendor' => 'required',
                'amount' => 'required'
            ]
        );

        //get payment credentials
        // $name = config('services.npontu_pay.username');
        // $pass = config('services.npontu_pay.password');
        $name ='rotaryd9102';
        $pass = 'rotarypss';

        //generate transaction id
        $trans_id = Donation::generateTransactionId();


        //deywuro payment api requirement data
        $data = [
          'vendor' => Donation::vendorName($request['vendor']),
          'number' => $request['number'],
          'uid' => $name,
          'pass' => $pass,
          'tp' => $trans_id,
          'amt' => $request['amount'],
          'vou' => $request['voucher'],
          'msg' => "Donate to Rotary Club",
          'trans_type' => 'Debit',
          'cbk' => url(env('APP_URL') ."/rotary/payment/callback")
        ];
       // dd($data);
        //initiate request using curl -nb: Guzzle throws error
        $paymentRequest = curl_init('https://pay.npontu.com/api/pay');
        curl_setopt($paymentRequest, CURLOPT_POSTFIELDS, $data);
        curl_setopt($paymentRequest, CURLOPT_RETURNTRANSFER, 1);
  // dd($paymentRequest);
        $response = json_decode(curl_exec($paymentRequest));
           // dd($response);
        //process response
        if(Donation::paymentInitiationIsSuccessful($response)) {

            // $donate = Donation;


                   $donate->user_id = 'Rotary';
                   $donate->trans_id = $trans_id;
                   $donate->mm_number = $request['number'];
                   $donate->p_code =$request['voucher'];
                   $donate->vendor = $request['vendor'];
                   $donate->amount =  $request['amount'];
                   $donate->p_status = Donation::$PROCESSING_STATUS;
                   $donate->comments = Donation::generatePaymentPendingMessage();
                   $donate->save();

            dd('saved');

            // Donation::notify(Donation::generatePaymentPendingMessage());
            // return redirect()->route('website.give');
        } else {
            Donation::notifyError("Sorry, an error occurred during the payment initiation. Kindly check that your details are accurate and try again.");
            return back()->withInput();
        }

    }


     /**
     * Callback function for payment api
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function paymentCallback(Request $request) {
        //request comes with the following message
        //transaction_id
        //status
        //responseMessage

        //get the donation using the transaction id
        $donate = Donate::where('trans_id', $request['transaction_id'])->first();

        if($donate) {
            $donate->update(
                [
                    'p_status' => $request['status'],
                    'comments' => $request['responseMessage']
                ]
            );
        }
    }

}
