<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
     public function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }
  public function index() {
      redirect('login/login_member');
}
    public function Login_member() {
        $data['activeMenu'] = 'login';
        $data['pagename'] = 'Login';
        $data['is_admin_approved'] = '';
        $data['record_found'] = '';
        $data['is_email_approved'] = '';

        if(filter_input_array(INPUT_POST)){
            $this->load->helper('security');
            $rules = array(
                array(
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'required|xss_clean|encode_php_tags|trim'
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'required|max_length[18]|min_length[6]|trim'
                )
            );
            $this->load->library('form_validation');
            $this->form_validation->set_rules($rules);
            $this->form_validation->set_error_delimiters('', '');
            if (!$this->form_validation->run() == FALSE) {
                // form is validate and we can now proceed further
                // 1) cheking email address found .
                $input_username = strtolower($this->input->post('username', TRUE));

                $this->load->model('user');
                $rec = array('username' => $input_username, 'is_member' => 1);
                $db_record = $this->user->getSpecificColumnRec(false, $rec);
                //echo '<pre>'.var_export($db_record, true).'</pre>';exit;
                // checking is email found or not and user is active.
                $username_found = '';
                $email_verify = '';
                if($db_record){

                    if($db_record[0]['is_approved_by_admin'] != 1){

                        $data['is_admin_approved'] = 'no';

                    }else{
                        $username_found = 'yes';
                    }
                    if($db_record[0]['is_email_verified'] != 1){

                        $data['is_email_approved'] = 'no';

                    }else{
                        $email_verify = 'yes';
                    }
                }  else {
                    $data['record_found'] = 'email_not_found';
                }

                if ($username_found == '' || $email_verify == '') {


                    $this->load->view('login_member', $data);
                } else {
                    // user found. show error. user already available.

                    $dbPass = $db_record[0]['password'];
                    $db_username = $db_record[0]['username'];
                    $db_user_id = $db_record[0]['uid'];

                    $input_password = $this->input->post('password', True);

                    if ($input_username == $db_username && password_verify($input_password, $dbPass)) {


                        if ($db_record[0]['is_admin'] == 1) {
                            $loggedInUser = 'admin';
                        } elseif ($db_record[0]['is_member'] == 1) {
                            $loggedInUser = 'is_member';
                        } elseif ($db_record[0]['is_organization'] == 1) {
                            $loggedInUser = 'is_organization';
                        }

                        $this->load->library('session');
                        /*
                         *  saving session. because session is secure and will save on server side.
                         * takes 2 parameters. Key and Value
                         */
                        $this->session->set_userdata('username', $input_username);
                        $this->session->set_userdata('loggedInUser', $loggedInUser);


                        redirect('Home');
                    } else {
                        $data['record_found'] = 'password_not_match';
                        $this->load->view('login_member', $data);
                        //echo 'password is wrong';
                    }
                }
            } else {

                //echo "show errors. form not validate";
                //echo validation_errors();
                $this->load->view('login_member', $data);
            }
        } else {
            $this->load->view('login_member', $data);
        }
    }

      
      

public function Login_organization()
{
    $data['activeMenu'] = 'login';
    $data['pagename'] = 'Login';
    $data['is_admin_approved'] = '';
    $data['record_found'] = '';
    $data['is_email_approved'] = '';

    if(filter_input_array(INPUT_POST)){
        $this->load->helper('security');
        $rules = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|xss_clean|encode_php_tags|trim'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|max_length[18]|min_length[6]|trim'
            )
        );
        $this->load->library('form_validation');
        $this->form_validation->set_rules($rules);
        $this->form_validation->set_error_delimiters('', '');
        if (!$this->form_validation->run() == FALSE) {
            // form is validate and we can now proceed further
            // 1) cheking email address found .
            $input_username = strtolower($this->input->post('username', TRUE));

            $this->load->model('user');
            $rec = array('username' => $input_username, 'is_organization' => 1);
            $db_record = $this->user->getSpecificColumnRec(false, $rec);
            //echo '<pre>'.var_export($db_record, true).'</pre>';exit;
            // checking is email found or not and user is active.
            $username_found = '';
            $email_verify = '';
            if($db_record){

                if($db_record[0]['is_approved_by_admin'] != 1){

                    $data['is_admin_approved'] = 'no';

                }else{
                    $username_found = 'yes';
                }
                if($db_record[0]['is_email_verified'] != 1){

                    $data['is_email_approved'] = 'no';

                }else{
                    $email_verify = 'yes';
                }
            }  else {
                $data['record_found'] = 'email_not_found';
            }

            if ($username_found == '' || $email_verify == '') {


                $this->load->view('login_org', $data);
            } else {
                // user found. show error. user already available.

                $dbPass = $db_record[0]['password'];
                $db_username = $db_record[0]['username'];
                $db_user_id = $db_record[0]['uid'];

                $input_password = $this->input->post('password', True);

                if ($input_username == $db_username && password_verify($input_password, $dbPass)) {


                    if ($db_record[0]['is_admin'] == 1) {
                        $loggedInUser = 'admin';
                    } elseif ($db_record[0]['is_member'] == 1) {
                        $loggedInUser = 'is_member';
                    } elseif ($db_record[0]['is_organization'] == 1) {
                        $loggedInUser = 'is_organization';
                    }

                    $this->load->library('session');
                    /*
                     *  saving session. because session is secure and will save on server side.
                     * takes 2 parameters. Key and Value
                     */
                    $this->session->set_userdata('username', $input_username);
                    $this->session->set_userdata('loggedInUser', $loggedInUser);


                    redirect('Home');
                } else {
                    $data['record_found'] = 'password_not_match';
                    $this->load->view('login_org', $data);
                    //echo 'password is wrong';
                }
            }
        } else {

            //echo "show errors. form not validate";
            //echo validation_errors();
            $this->load->view('login_org', $data);
        }
    } else {
        $this->load->view('login_org', $data);
    }
}
}