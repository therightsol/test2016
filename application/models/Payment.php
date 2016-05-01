<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Omnipay\Omnipay;
class Payment extends CI_Model {



    /*
     * Stripe Payment Gateway
     */
    public function stripe(
                            $number = false, $expiryMonth = false, $expiryYear = false, $cvv = false,
                            $amount = false, $currency = false,
                            $apikey = 'sk_test_ojhWQUoi834fOluXvqYIE74v'
                        )
    {

        if($number && $expiryMonth && $expiryYear && $cvv && $amount && $currency ){
            $currency = strtoupper($currency);

            $gateway = Omnipay::create('Stripe');
            $gateway->setApiKey($apikey);



            $formData = array('number' => $number, 'expiryMonth' => $expiryMonth, 'expiryYear' => $expiryYear, 'cvv' => $cvv);

            try{
                $response = $gateway->purchase(array('amount' => $amount, 'currency' => $currency, 'card' => $formData))->send();

                if ($response->isSuccessful()) {
                    // payment was successful: update database
                    //print_r($response);
                    return 'success';

                } elseif ($response->isRedirect()) {
                    // redirect to offsite payment gateway
                    $response->redirect();
                } else {
                    // payment failed: display message to customer
                    //echo $response->getMessage();
                    $error [0] = false;
                    $error [1] = $response->getMessage();

                    return $error;
                }
            }catch (Exception $e){
                $error [0] = false;
                $error [1] = $e->getMessage();
                return $error;
            }




        }else {
            return 'parametersMissMatch';
        }
    }
}
