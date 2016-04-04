<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_organization extends CI_Controller {
    public function index() {
        $data['activemenu'] = 'regmember';
        $data['user_found'] = '';
        $data['email_found'] = '';
        $data['data_saved'] = '';

        $this->load->library('form_validation');
        if($_POST){
            //echo '<pre>'.var_export($_POST, true).'</pre>';exit;
            $rules = array(
                array(
                    'field' =>  'username',
                    'label' =>  'User Name',
                    'rules' =>  'required|max_length[15]|min_length[3]|trim'
                ),

                array(
                    'field' =>  'emailadress',
                    'label' =>  'Enter Email',
                    'rules' =>  'required|max_length[45]|valid_email|trim'
                ),

                array(
                    'field' =>  'password',
                    'label' =>  'Password',
                    'rules' =>  'required|max_length[45]|min_length[8]|trim'
                ),

                array(
                    'field' =>  'contact',
                    'label' =>  'Enter Your Contact Number',
                    'rules' =>  'required|min_length[8]|trim'
                )
            );



            $this->form_validation->set_rules($rules);
            $this->form_validation->set_error_delimiters('', '');
            if(!$this->form_validation->run() == FALSE){
                // form is validate and we can now proceed further

                // 1) cheking username .
                $un = strtolower($this->input->post('username', TRUE));

                $this->load->model('user');
                $db_usernames = $this->user->getRecord(FALSE, 'username');

                // checking is username found or not.
                $un_found = 'no';
                foreach($db_usernames as $key => $columns){
                    if($columns['username'] == $un)
                        $un_found = 'yes';
                }

                if($un_found == 'no'){
                    // user not found, so continue.

                    // Step 1: Send Email

                    $uemail = $this->input->post('emailadress', TRUE);
                    $db_email = $this->user->getRecord(FALSE, 'email');


                    $uemail_found = 'no';
                    foreach($db_email as $key => $columns){
                        if($columns['email'] == $uemail)
                            $uemail_found = 'yes';
                    }

                    if($uemail_found == 'no'){

                        $is_success = $this->send_email($un, $uemail);

                        // saving into db.
                        if($is_success){
                            // saving into DB

                            // 1) getting user input

                            // post ('fieldName' , Trim (True or False)
                            $fullName = $this->input->post('username', TRUE);
                            // Trim --> ali //ali

                            $plain_pass = $this->input->post('password', TRUE);


                            $phone = $this->input->post('contact', TRUE);




                            //2) Hashing user password

                            // HASHING for passwords.
                            $options = [
                                'cost' => 10
                            ];
                            $hashedPassword = password_hash($plain_pass, PASSWORD_BCRYPT, $options);
                            //echo $plain_pass . '<br />';
                            //exit($hashedPassword);


                            //3) saving into DB
                            $this->user->is_organization= 1;
                            // a) populating values
                            $this->user->username = $un;

                            $this->user->email = $uemail;
                            $this->user->password = $hashedPassword;
                            $this->user->is_email_verified = 1;
                            $this->user->phone_number = $phone;

                            // b) saving into DB

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
                                        'uid' => $org_id,
                                        'um_key' => $bnk_num,
                                        'um_title' => 'bank_number',
                                        'um_value' => $bnk_num
                                    ),
                                    array(
                                        'uid' => $org_id,
                                        'um_key' => $bnk_num,
                                        'um_title' => 'bank_title',
                                        'um_value' => $bnk_title
                                    ),
                                    array(
                                        'uid' => $org_id,
                                        'um_key' => $bnk_num,
                                        'um_title' => 'bank_name',
                                        'um_value' => $bnk_name
                                    ),
                                    array(
                                        'uid' => $org_id,
                                        'um_key' => $bnk_num,
                                        'um_title' => 'bank_code',
                                        'um_value' => $bnk_code
                                    ),
                                    array(
                                        'uid' => $org_id,
                                        'um_key' => $bnk_num,
                                        'um_title' => 'bank_address',
                                        'um_value' => $bnk_address
                                    ),
                                    array(
                                        'uid' => $org_id,
                                        'um_key' => $bnk_num,
                                        'um_title' => 'bank_swift',
                                        'um_value' => $bnk_swift
                                    ),
                                );

                                //4) show success message / load view page
                                $this->user_meta->insertBatch($bnk_array);
                            }

                            $data['data_saved'] = 'yes';

                            $this->load->view('reg_formorg', $data);
                        }else{
                            exit('email not sent');
                        }
                    }else {
                        // email found. show error that email should unique.
                        $data['email_found'] = 'yes';
                        $this->load->view('reg_formorg', $data);

                    }
                }else{
                    // user found. show error. user already available.
                    $data['user_found'] = 'yes';
                    $this->load->view('reg_formorg', $data);
                }
            }else{

                $this->load->view('reg_formorg', $data);
            }




        }else{
            $this->load->view('reg_formorg', $data);
        }

    }
//function close

    private function send_email($username, $userEmail){
        /*
         * Send Email is Pending
         *  i)  Confirmation of email account.
         *  ii) if email is confirmed by user by clicking on confirmation link then,
         *          -->     send email to Admin that a new user has been created. And set privilages for this user.
         */

        // Loading encryption library to encrypt username
        $this->load->library('encrypt');

        $this->load->model('basic_functions');
        $encryptionKey = $this->basic_functions->getEncryptionKey();
        //exit($encryptionKey);

        $encrypteUserName = $this->encrypt->encode($username, $encryptionKey);
        //echo($encrypteUserName) . '<br /><br />';


        $base64userName = base64_encode($encrypteUserName);   // changing username to base64 algo.
        //echo $base64userName; exit();

        $message = '<strong> Welcome! ' . $username . ' </strong><br /><br />'
            . 'You are successfully registered. Kindly wait for adman approval. <br />'
            . '<br /><br /><br /><br /><br /><br /><br /><hr />'
            . '<strong> Admin Save a Soul</strong><br /><br />';

        $this->load->library('email');
        $this->load->model('Send_email');
        return $this->Send_email->send($userEmail, $message, 'Verify_email');
    }
}
?>
