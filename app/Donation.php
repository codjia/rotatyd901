<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'payment';

    //donation constants
    public static $VODAFONE_ID = 1;
    public static $MTN_ID = 2;

    public static $VODAFONE_NAME = "Vodafone";
    public static $MTN_NAME = "MTN";
     //status constant
     public static $PROCESSING_STATUS = "Processing";

    /**
     * this messages correspond to the api response for payment. do not change
     * */
    public static $PAYMENT_INITIATION_FAILED = "failed";
    public static $PAYMENT_INITIATION_SUCCESS = "success";


    protected $fillable=[
        'id',
        'amount',
        'user_id',
        'mm_number',
        'p_status',
        'trans_id',
        'res_mes',
        'pcode',
        'comment',

    ];

    /**
     * Generates unique transaction id for order
     *  Code retrieved On: Tuesday, 23rd July, 2019. 14:14
     * Generating Random Alphanumeric Strings in PHP : Generate Shuffled Strings
     * url: https://code.tutsplus.com/tutorials/generate-random-alphanumeric-strings-in-php--cms-32132
     * @return string
     */
    public static function generateTransactionId() {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $id = substr(str_shuffle($permitted_chars), 0, 9) ;
        return strtoupper($id);
    }


     /**
     * Get vendor name
     * @return string
     */
    public function getVendorName() {
        return static::vendorName($this->vendor);

    }

    /**
     * Compares vendor id and returns appropriate vendor name
     * @param $vendor_id
     * @return string
     */
    public static function vendorName($vendor_id) {
        switch ($vendor_id) {
            case static::$MTN_ID:
                return static::$MTN_NAME;
                break;
            case static::$VODAFONE_ID:
                return static::$VODAFONE_NAME;
        }
    }

     /**
     * Compares status from api payment response and return appropriate boolean
     * @param string $status
     * @return bool
     */
    public static function paymentInitiationIsSuccessful($status) {
        switch ($status) {
            case self::$PAYMENT_INITIATION_FAILED:
                return false;
            case self::$PAYMENT_INITIATION_SUCCESS:
                return true;
        }
    }

    /**
     * Returns payment status message
     * @return string
     */
    public static function generatePaymentPendingMessage() {
        return "Dear Donater, Donation has been initiated. " .
            "MTN users should kindly use *170#, select your wallet, select your approvals and " .
            "approve the transaction. Please do so within the next 10-15 minutes. Thank you!";
    }


    public static function notify($message) {
        session()->flash('success', $message);
    }

    /**
     * Flash message for error
     * @param $message
     */
    public static function notifyError($message) {
        session()->flash('error', $message);
    }

    /**
     * Flash message for info
     * @param $message
     */
    public static function notifyInfo($message) {
        session()->flash('info', $message);
    }


}
