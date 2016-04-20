<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Omnipay\Omnipay;
class Payment extends CI_Controller {



    public function index()
    {

       echo '<form action="" method="POST">
          <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="pk_test_oOEHhew7tD7MkCM2E7f6ypEm"
            data-amount="999"
            data-name="Demo Site"
            data-description="Widget"
            data-image="/img/documentation/checkout/marketplace.png"
            data-locale="auto">
          </script>
        </form>';


        $gateway = Omnipay::create('Stripe');
        $gateway->setApiKey('sk_test_ojhWQUoi834fOluXvqYIE74v');

        $formData = array('number' => '4242424242424242', 'expiryMonth' => '6', 'expiryYear' => '2016', 'cvv' => '123');
        $response = $gateway->purchase(array('amount' => '10.00', 'currency' => 'USD', 'card' => $formData))->send();

        if ($response->isSuccessful()) {
            // payment was successful: update database
           //print_r($response);
            echo "Payment Success";
        } elseif ($response->isRedirect()) {
            // redirect to offsite payment gateway
            $response->redirect();
        } else {
            // payment failed: display message to customer
            //echo $response->getMessage();
            echo 'payment fail';
        }
    }
}
