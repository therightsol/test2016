<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation_form extends CI_Controller{
    public function index(){

        $data['pagename'] = 'donation';
        $data['access'] = 'no';
        $this->load->view('donations' , $data);
    }


    public function donation($id = false){
        $data['pagename'] = 'donation';
        $data['id'] = $id;


        if(filter_input_array(INPUT_POST)){
            if($id){
                //echo $id; exit;
                $this->donate($id);
            }
        }


        // Checking that either that organization adds stripe Key or not.
        // If yes, then OK. else show only bank account details.
        if($id){

            $this->load->model('causes_meta');
            $rec = $this->causes_meta->ci_join('causes.cause_id, causes_meta.cm_value, causes_meta.cm_key', 'causes', 'causes_meta',
                'causes.cause_id = causes_meta.cause_id', 'causes.cause_id', $id);

            if(isset($rec[0])) {
                // $rec has record
                $username = $rec[0]['cm_value'];

                $this->load->model('user');
                $rec = $this->user->getRecord($username, 'username');

                if (!$rec) {
                    // It means user changed his / her username.
                    // This is Design Flaw.
                    // Best apporach was that we save userid instead of username at time of saving Cause and Cause Meta
                    die('Internal Server Error Occured. Err 10001');
                }

                $uid = $rec->uid;


                $rec = $this->user->ci_join('users_meta.um_key, users_meta.um_title, users_meta.um_value',
                    'users', 'users_meta','users.uid = users_meta.fk_uid', 'users.uid', $uid);

                if(isset($rec[0]['um_value'])){
                    $apiKey = $rec[0]['um_value'];
                }else {
                    $apiKey = false;
                }



                if($apiKey === false || empty($apiKey)){
                    // fetch all Bank Accounts of this organization and display.

                    $this->load->model('user_meta');
                    $data['bank_rec'] = $this->user_meta->getRecord($uid, 'fk_uid', true);

                    //var_export($data['bank_rec']);exit;
                    $this->load->view('bankdetails', $data);
                   return;

                }



            }
        }



        $this->load->view('donations' , $data);
    }

    public function donate($id = false){

        $apiKey = false;



        if($id){
            //$this->output->enable_profiler(TRUE);


            $this->load->model('causes_meta');
            $rec = $this->causes_meta->ci_join('causes.cause_id, causes_meta.cm_value, causes_meta.cm_key', 'causes', 'causes_meta',
                'causes.cause_id = causes_meta.cause_id', 'causes.cause_id', $id);

            if(isset($rec[0])){
                // $rec has record
                $username = $rec[0]['cm_value'] ;

                $this->load->model('user');
                $rec = $this->user->getRecord($username, 'username');

                if(! $rec){
                    // It means user changed his / her username.
                    // This is Design Flaw.
                    // Best apporach was that we save userid instead of username at time of saving Cause and Cause Meta
                    die('Internal Server Error Occured. Err 10001');
                }

                $uid = $rec->uid;

                $rec = $this->user->ci_join('users_meta.um_key, users_meta.um_title, users_meta.um_value',
                    'users', 'users_meta','users.uid = users_meta.fk_uid', 'users.uid', $uid);


                $apiKey = $rec[0]['um_value'];



                // Cross Verification , same thing.
                // If that organization has stripe account then ok else, show only bank accounts.

                if($apiKey === false || empty($apiKey)){
                    // fetch all Bank Accounts of this organization and display.

                    $this->load->model('user_meta');
                    $data['bank_rec'] = $this->user_meta->getRecord($uid, 'fk_uid', true);

                    $this->load->view('bankdetails', $data);
                    return;

                }


            }


        }



        if(filter_input_array(INPUT_POST)){
            // Debug Statement
            //echo '<tt><pre>' . var_export($_POST, true) . '</tt></pre>';

            /*
             * @TODO: Step 1:          Verify all inputs are selected / populated by user.
             *        Simi please do this asap.
             *
             */


            // API Fallback
            if(empty($apiKey) || ! $apiKey){

                // if API key is not available then , use Ali Shan API Key
                // Please note that this is just for testing purpose.
                // In live we have to remove it.
                $apiKey = 'sk_test_ojhWQUoi834fOluXvqYIE74v';
            }


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
            $result = $this->payment->stripe($cardNumber, $expiryMonth, $expiryYear, $cvv, $amount, 'USD', $apiKey);



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