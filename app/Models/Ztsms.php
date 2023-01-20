<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ztsms extends Model
{
    //use HasFactory;
    function __construct() {

    }

    private $API_KEY = '293e03960e3f08c51a5407ea01222128ddb7162e';
    private $SENDER_ID = "ZTSMS";
    private $ROUTE_NO = 4;
    private $RESPONSE_TYPE = 'json';
    private $userid = 'bleaminc';
    private $pass = 'P15_Mai_2016';


    public function sendSMS($OTP, $mobileNumber){
        $isError = 0;
        $errorMessage = true;

        //Your message to send, Adding URL encoding.
        $message = urlencode("Welcome to www.codershood.info , Your OPT is : $OTP");
     

        //Preparing post parameters
        $postData = array(
            'authkey' => $this->API_KEY,
            'mobiles' => $mobileNumber,
            'message' => $message,
            'sender' => $this->SENDER_ID,
            'userid='=> $this->$userid,
            'password'=> $this->$pass,
            'route' => $this->ROUTE_NO,
            'response' => $this->RESPONSE_TYPE
        );
     
        $url = "https://portal.zettatel.com/SMSApi/send";
     
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
        ));
     
     
        //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     
     
        //get response
        $output = curl_exec($ch);
     
        //Print error if any
        if (curl_errno($ch)) {
            $isError = true;
            $errorMessage = curl_error($ch);
        }
        curl_close($ch);
        if($isError){
            return array('error' => 1 , 'message' => $errorMessage);
        }else{
            return array('error' => 0 );
        }
    }
}
