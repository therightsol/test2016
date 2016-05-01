<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation_form extends CI_Controller{
    public function index(){

        $data['pagename'] = 'donation';
        $data['access'] = 'no';
        $this->load->view('donations' , $data);
    }
    public function donation($id){

        $data['pagename'] = 'donation';

        $this->load->view('donations' , $data);
    }

    public function donate(){
        if(filter_input_array(INPUT_POST)){
            // Debug Statement
            //echo '<tt><pre>' . var_export($_POST, true) . '</tt></pre>';

            /*
             * @TODO: Step 1:          Verify all inputs are selected / populated by user.
             *        Simi please do this asap.
             *
             */



            /*
             * Step 2:          Fetch input data . (Completed).
             */
            $selectamount   =   $this->input->post('sel-amount', TRUE);
            $otheramout     =   $this->input->post('other-amount', TRUE);

            $firstname      =   $this->input->post('fname', TRUE);;
            $lastname       =   $this->input->post('lname', TRUE);;
            $email          =   $this->input->post('emailadress', TRUE);;
            $phone          =   $this->input->post('phone', TRUE);;
            $addressLineOne =   $this->input->post('adressone', TRUE);;
            $addressLineTwo =   $this->input->post('adresstwo', TRUE);;
            $city           =   $this->input->post('city', TRUE);;
            $proviance      =   $this->input->post('prov', TRUE);;
            $zip            =   $this->input->post('zcode', TRUE);;
            $cardNumber     =   $this->input->post('crnumber', TRUE);;
            $cardHolder     =   $this->input->post('chnumber', TRUE);;
            $expiryMonth    =   $this->input->post('edate', TRUE);;
            $expiryYear     =   $this->input->post('eyear', TRUE);;
            $cvv            =   $this->input->post('cvv', TRUE);;



            /*
             * Step 3)  Actual Payment.
             */

            // If user enters value, then there is no need for selected input.
            if(!empty ($otheramout)){
                $selectamount = false;
            }

            if($selectamount){
                $amount = $selectamount;
            }else {
                $amount = $otheramout;
            }

            // adding 00 after point. Now amount is like this. 10.00
            $amount .= '.00';

            //echo '<tt><pre>' . var_export($amount, true) . '</tt></pre>';

            $this->load->model('payment');
            $result = $this->payment->stripe($cardNumber, $expiryMonth, $expiryYear, $cvv, $amount, 'USD');



            if($result[0]){
                // Saving record into database. And after saving, showing success message to front side.

                /*
                 * @todo:       Step 4)     Save this data into Table [PaymentRecord] If this table is not available then please create it.
                 * @todo:       Huzaifa please create a table if not avaialbe , and save these fields into Table.
                 */

                // Create a page to display success message. OR Thank You message.
                echo 'Payment Succeed!!!';

            } else {
                // Display Error that payment not succeed.

                // $result[1] has actual error. so,

                $data['error'] = $result[1];

                echo $result[1];

                /*
                 * @todo    Step5:      Display (Echo) erros on front end.
                 * Simi please do it asap.
                 */

            }
        }else {
            // Form not submitted.
            $this->index();
        }
    }

}