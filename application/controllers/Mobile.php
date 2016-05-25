<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/*
 * Please do not change this file.
 * This file is responsible for sendig / getting data from Android Application.
 */
class Mobile extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('donation');
    }

    public function index (){
        redirect(base_url());
    }


    public function get_all_donationAds_jsonArr(){
        $record = $this->donation->getRecord('1', 'is_approved', true);
        $record = (array) $record; // changing to array

        $record = json_encode($record);

        //print_r($record);
        echo $record;

    }

    public function get_single_donationAd($id = null){
        $apiKey = $this->getApikey($id);
        //echo $id; exit;

        if(! $id)
            return false;



        $record = $this->donation->getRecord($id, 'donation_id');

        $record = (array) $record; // changing to array

        if($apiKey)
            $record['apikey'] = $apiKey;
        else
            $record['apikey'] = '';

        $record = json_encode($record);

        //print_r($record);
        echo $record;

    }


    public function donation_form_data($data = false){


        $json = json_decode($_GET['json'], true);
        //echo $json;

        //echo '<pre>' . var_export($_GET, true) . '</pre>'; exit;

        if(isset($_GET['id']))
            $id            = $_GET['id'];
        else
            $id = "";

        $apiKey = $this->getApikey($id);

        $data['amount'] = $json['amount'];
        $data['cardNumber'] = $json['cardNumber'];
        $data['expiryYear'] = $json['expiryYear'];
        $data['expiryMonth'] = $json['expiryMonth'];
        $data['cvv'] = $json['cvv'];


        $result = $this->do_donate($apiKey, $data);

        echo $result;



    }


    public function getBankDetails($donationID = false){

        //echo $donationID;
        if($donationID){

            $this->load->model('Donation');
            $where_join = array(
                'donations_meta' => 'donations_meta.donation_id = donation_ads.donation_id'
            );
            $where_value = array(
                'donation_ads.donation_id' => $donationID
            );
            //$select = 'causes.cause_id, causes_meta.cm_value, causes_meta.cm_key';
            $rec = $this->Donation->join('*',$where_value, $where_join);

            //echo '<pre>'.var_export($rec, true).'</pre>';exit;
            if(isset($rec[0])) {
                // $rec has record
                $username = $rec[0]['dm_value'];

                $this->load->model('user');
                $rec = $this->user->getRecord($username, 'username');

                if (!$rec) {
                    // It means user changed his / her username.
                    // This is Design Flaw.
                    // Best apporach was that we save userid instead of username at time of saving Cause and Cause Meta
                    die('Internal Server Error Occured. Err 10001');
                }

                $uid = $rec->uid;

                // fetch all Bank Accounts of this organization and display.

                $this->load->model('user_meta');
                $data['bank_rec'] = $this->user_meta->getRecord($uid, 'fk_uid', true);

                $bnkrec = json_encode($data['bank_rec']);

                echo $bnkrec;

                //var_export($data['bank_rec']);exit;
                //$this->load->view('bankdetails', $data);
                //return;





            }
        }
    }


    /*
     * Private Functions
     */
    private function do_donate($apiKey = false, $data){

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
        $selectamount   =   $data['amount'] ;

        $cardNumber     =   $data['cardNumber'] ;
        $expiryMonth    =   $data['expiryMonth'] ;
        $expiryYear     =   $data['expiryYear']  ;
        $cvv            =   $data['cvv'] ;





        // adding 00 after point. Now amount is like this. 10.00
        $selectamount .= '.00';

        //echo '<tt><pre>' . var_export($amount, true) . '</tt></pre>';

        $this->load->model('payment');
        $result = $this->payment->stripe($cardNumber, $expiryMonth, $expiryYear, $cvv, $selectamount, 'USD', $apiKey);


        //var_export($result);

        if($result[0] && is_array($result)){
            // Saving record into database. And after saving, showing success message to front side.

            /*
             * @todo:       Step 4)     Save this data into Table [PaymentRecord] If this table is not available then please create it.
             * @todo:       Huzaifa please create a table if not avaialbe , and save these fields into Table.
             */

            // Create a page to display success message. OR Thank You message.

            return 'success';

            //echo $result[0];
        } else {
            // Display Error that payment not succeed.

            // $result[1] has actual error. so,

            if(! is_array($result))
                return $result;


            $data['error'] = $result[1];

            return $data['error'];

            /*
             * @todo    Step5:      Display (Echo) erros on front end.
             * Simi please do it asap.
             */

        }
    }


    private function getApikey($id){
        // Checking that either that organization adds stripe Key or not.
        // If yes, then OK. else show only bank account details.

        $apiKey = false;

        if($id) {

            $this->load->model('donations_meta');
            $rec = $this->donations_meta->ci_join('donation_ads.donation_id, donations_meta.dm_value, donations_meta.dm_key', 'donation_ads', 'donations_meta',
                'donation_ads.donation_id = donations_meta.donation_id', 'donation_ads.donation_id', $id);

            if (isset($rec[0])) {
                // $rec has record
                $username = $rec[0]['dm_value'];

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
                    'users', 'users_meta', 'users.uid = users_meta.fk_uid', 'users.uid', $uid);

                //echo '<tt><pre>' . var_export($rec, true) . '</pre></tt>'; exit;

                if(is_array($rec) && !empty($rec)){
                    foreach($rec as $key => $value){
                        if(is_array($value) && isset($value['um_key'])){

                            if($value['um_key'] === 'stripe_secret_live_api_key'){
                                $apiKey = $value['um_value'];
                            }

                        }
                    }
                }
            }else {
                // DB Record not found
                //print_r(json_encode($rec));

                $apiKey = false;
            }
        }



        return $apiKey;
    }
}
