<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    public function index(){
        $data['pagename'] = '';
        $data['emptyAPI'] = '';
        $data['activeMenu'] = 'profile';
        $this->load->model('user');
        $data['record_not_inserted'] = '';
        $session_user = $this->session->userdata('username');
        $loggedInUser = $this->session->userdata('loggedInUser');
        $data['API'] = '';


        if($loggedInUser == 'is_member'){
            $rec = array('username' => $session_user);
            $data['profile_record'] = $this->user->getSpecificColumnRec(false, $rec);

        }elseif($loggedInUser == 'is_organization'){
            $rec = array('username' => $session_user, 'is_organization' => 1);
            $data['profile_record'] = $this->user->getSpecificColumnRec(false, $rec);
            $user_id = $data['profile_record'][0]['uid'];
            $this->load->model('user_meta');
            $data['bank_rec'] = $this->user_meta->getRecord($user_id, 'fk_uid', true);

            $metaRec = $this->user_meta->get_conditon_record(array('fk_uid' => $user_id, 'um_key' => 'stripe_secret_live_api_key'));

            //var_export($metaRec);exit;
            if(is_array($metaRec) && !empty($metaRec)){
                $data['API'] =  $metaRec[0]['um_value'];
            }

        }else{
            die('you are not allowed');
        }

        //echo '<pre>'.var_export($data['bank_rec'], true).'</pre>';exit;
        if(filter_input_array(INPUT_POST)){
            $bnk_num = $this->input->post('bnk_num', TRUE);
            $bnk_title = $this->input->post('bnk_title', TRUE);
            $bnk_name = $this->input->post('bnk_name', TRUE);
            $bnk_code = $this->input->post('bnk_code', TRUE);
            $bnk_address = $this->input->post('bnk_address', TRUE);
            $bnk_swift = $this->input->post('bnk_swift', TRUE);

            if($bnk_num != ''){
                $this->load->model('user_meta');

                $bnk_array = array(
                    array(
                        'fk_uid' => $user_id,
                        'um_key' => $bnk_num,
                        'um_title' => 'bank_number',
                        'um_value' => $bnk_num
                    ),
                    array(
                        'fk_uid' => $user_id,
                        'um_key' => $bnk_num,
                        'um_title' => 'bank_title',
                        'um_value' => $bnk_title
                    ),
                    array(
                        'fk_uid' => $user_id,
                        'um_key' => $bnk_num,
                        'um_title' => 'bank_name',
                        'um_value' => $bnk_name
                    ),
                    array(
                        'fk_uid' => $user_id,
                        'um_key' => $bnk_num,
                        'um_title' => 'bank_code',
                        'um_value' => $bnk_code
                    ),
                    array(
                        'fk_uid' => $user_id,
                        'um_key' => $bnk_num,
                        'um_title' => 'bank_address',
                        'um_value' => $bnk_address
                    ),
                    array(
                        'fk_uid' => $user_id,
                        'um_key' => $bnk_num,
                        'um_title' => 'bank_swift',
                        'um_value' => $bnk_swift
                    ),
                );

                //4) show success message / load view page
                $this->user_meta->insertBatch($bnk_array);
                redirect('profile');
        }
        }else{
            $this->load->view('profile' , $data);
        }
//        foreach($result as $res){
//            $asso['name'] = $res['username'];
//            $asso['bank_detail'][$res['um_key']] = $res['um_title'];
//        }
    }



    public function add_stripe_account (){
        $data['bank_rec'] = array();
        $data['pagename'] = '';
        $data['activeMenu'] = 'profile';
        $this->load->model('user');
        $this->load->model('user_meta');
        $data['record_not_inserted'] = '';
        $session_user = $this->session->userdata('username');
        $loggedInUser = $this->session->userdata('loggedInUser');
        $rec = array('username' => $session_user, 'is_organization' => 1);
        $data['profile_record'] = $this->user->getSpecificColumnRec(false, $rec);
        $user_id = $data['profile_record'][0]['uid'];

        $data['emptyAPI'] = '';
        $data['API'] = '';

        $metaRec = $this->user_meta->get_conditon_record(array('fk_uid' => $user_id, 'um_key' => 'stripe_secret_live_api_key'));

        if(is_array($metaRec)  && !empty($metaRec)){
            $data['API'] =  $metaRec[0]['um_value'];
        }


        if(!empty($session_user)){
            if(filter_input_array(INPUT_POST)){

                //var_export($_POST);exit;

                $apikey = $this->input->post('stripe_api', true);

                if(!empty($apikey)){






                    $rec = $this->user_meta->get_conditon_record(array('fk_uid' => $user_id, 'um_key' => 'stripe_secret_live_api_key'));

                    //var_export($rec); exit;

                    $this->user_meta->fk_uid = $user_id;
                    $this->user_meta->um_key = 'stripe_secret_live_api_key';
                    $this->user_meta->um_title =  'stripe';
                    $this->user_meta->um_value = $apikey;

                    if(empty($rec)){
                        // it means ; the same user has not already Stripe Key.So, we need to insert.
                        // Inserting Record.

                        $this->user_meta->insertRecord();
                    }else {
                        // Updating Record
                        $updateRec = array(
                            'um_value'        =>      $apikey
                        );
                        $this->user_meta->updateRecord('fk_uid', $updateRec, $user_id);
                    }

                    $data['API'] = $apikey;
                    //$this->load->view('profile', $data);
                    redirect('./profile');

                }else {
                    // Error. API key is not available.
                    $data['emptyAPI'] = 'true';
                    $this->load->view('profile' , $data);
                }
            }else{
                // Not POSTED
                $this->load->view('profile' , $data);
            }
        }else {
            // user is not logged in
            die('Please login. You are not allowed to access this page.');
        }
    }
}