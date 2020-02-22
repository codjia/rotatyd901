<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;

use App\Donation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;

class DonationController extends Controller
{

  //payment controller
  public function donateCash(Request $request, Donation $payment)
  {

      $request->validate([
          'amount' =>'required',
          'number' => 'required|digits:10',
      ]);

      $length = 5;
      $ss = substr(str_shuffle(str_repeat($x = 'ABCDEFGHabcdefghijklmnopIJKLMNOPQRSTUVWXYZ123456789', ceil($length / strlen($x)))), 1, $length);
      $trans_id = $request->hashed_id . '' . $ss;  //the unique code
      $user_id='Rotary';
      $vendor = $request->vendor;     //vendor
      $number = $request->number;   //mobile number
      $amount = $request->amount;        //amount debiting
      $voucher = $request->voucher;



      if($vendor =='Vodafone' ){

          try{
            $request->validate([
                'voucher' => 'required',
            ]);



      $paymentEndpoint =
      'https://pay.npontu.com/api/pay';
  $callbackResponseUrl = url(env('APP_URL') ."/rotary/payment/api/callback");
  $request = array(
      'number' => $number,
      'vendor' => $vendor,
      'uid' => 'rotaryd9102',
      'pass' => 'rotarypss',
      'tp' => $trans_id,
      'cbk' => $callbackResponseUrl,
      'amt' => $amount,
      'msg' => 'Donate to Rotary Club',
      'vou' => $voucher,
      'trans_type' => 'Debit'

  );
//dd($request);
  $ch = curl_init($paymentEndpoint);//dd($ch);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  $decode = json_decode($output);

  Log::error(print_r($decode,true));



  //insert into  the payments table before processing the transaction

  $payment->mm_number         =  $number;
  $payment->amount            =  $amount;
  $payment->trans_id          =  $trans_id;
  $payment->user_id           =  $user_id;
  $payment->pcode     =  'Donation';
  $payment->comments          =  ' Donation has been initiated.';
 $payment->save();

// dd('Saved');
return view('front.thanks_voda');

          }catch (Exception $e){
              echo($e);
          }

      }
      else{
        try{

            $paymentEndpoint = 'https://pay.npontu.com/api/pay';
        $callbackResponseUrl = url(env('APP_URL') ."/rotary/payment/api/callback");
        $request = array(
            'number' => $number,
            'vendor' => $vendor,
            'uid' => 'rotaryd9102',
            'pass' => 'rotarypss',
            'tp' => $trans_id,
            'cbk' => $callbackResponseUrl,
            'amt' => $amount,
            'msg' => 'Donate to Rotary Club',
            'vou' => $voucher,
            'trans_type' => 'Debit'

        );
      //dd($request);
        $ch = curl_init($paymentEndpoint);//dd($ch);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        $decode = json_decode($output);

        Log::error(print_r($decode,true));



        //insert into  the payments table before processing the transaction

        $payment->mm_number         =  $number;
        $payment->amount            =  $amount;
        $payment->trans_id          =  $trans_id;
        $payment->user_id           =  $user_id;
        $payment->pcode     =  'Donation';
        $payment->comments          =  ' Donation has been initiated.';
       $payment->save();

      // dd('Saved');
      return view('front.thanks');

                }catch (Exception $e){
                    echo($e);
                }

         // return redirect()->route('front.thanks');
      }
  }


  public function api_response(Request $request, Donation $payment)
  {
      //update the payment table with any response fetched from the call back api, this determines whether or not the
      //transaction was successfull or failed

      $api_update = Donation::where('trans_id', $request->transaction_id)->first();
      $api_update->p_status = $request->status;
      $api_update->res_mes =  $request->responseMessage;
      $api_update->save();

      Log::error($request->status);
      Log::error($request->transaction_id);

      $mm_number = $api_update->mm_number;
      $amount    = $api_update->amount;
      $pcode   = $api_update->pcode;


      if ($request->status != 'failed') {

          $message = "The number " .$mm_number . " has made a payment of " . $amount. " to Rotary Club as " .$pcode;

      } else if ($request->status == 'failed') {

          $message = "The donation transaction was not successful";
      }

      Log::info("Hit my call back");

      $num  = urlencode('0544576279'); // must be replaced with the admins phone number



  }





}
