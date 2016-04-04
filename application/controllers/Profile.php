<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    public function index(){
        $data['pagename'] = '';
        $data['activeMenu'] = 'profile';
        $this->load->model('user');
        $data['record_not_inserted'] = '';
        $session_user = $this->session->userdata('username');
        $loggedInUser = $this->session->userdata('loggedInUser');

        if($loggedInUser == 'is_member'){
            $rec = array('username' => $session_user);
            $data['profile_record'] = $this->user->getSpecificColumnRec(false, $rec);

        }elseif($loggedInUser == 'is_organization'){
            $rec = array('username' => $session_user, 'is_organization' => 1);
            $data['profile_record'] = $this->user->getSpecificColumnRec(false, $rec);
            $user_id = $data['profile_record'][0]['uid'];
            $this->load->model('user_meta');
            $data['bank_rec'] = $this->user_meta->getRecord($user_id, 'uid', true);

        }else{
            die('you are not allowed');
        }

        //echo '<pre>'.var_export($data['bank_rec'], true).'</pre>';exit;
        if(filter_input_array(INPUT_POST)){
            $org_id = '';
            $org_id = $this->user->insertRecord();
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
                        'uid' => $user_id,
                        'um_key' => $bnk_num,
                        'um_title' => 'bank_number',
                        'um_value' => $bnk_num
                    ),
                    array(
                        'uid' => $user_id,
                        'um_key' => $bnk_num,
                        'um_title' => 'bank_title',
                        'um_value' => $bnk_title
                    ),
                    array(
                        'uid' => $user_id,
                        'um_key' => $bnk_num,
                        'um_title' => 'bank_name',
                        'um_value' => $bnk_name
                    ),
                    array(
                        'uid' => $user_id,
                        'um_key' => $bnk_num,
                        'um_title' => 'bank_code',
                        'um_value' => $bnk_code
                    ),
                    array(
                        'uid' => $user_id,
                        'um_key' => $bnk_num,
                        'um_title' => 'bank_address',
                        'um_value' => $bnk_address
                    ),
                    array(
                        'uid' => $user_id,
                        'um_key' => $bnk_num,
                        'um_title' => 'bank_swift',
                        'um_value' => $bnk_swift
                    ),
                );

                //4) show success message / load view page
                $this->user_meta->insertBatch($bnk_array);
                $this->load->view('profile', $data);
        }
        }else{
            $this->load->view('profile' , $data);
        }

    }
}