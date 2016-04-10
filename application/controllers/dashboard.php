<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		redirect('dashboard/general');
	}

    /**
     *
     */
    public function General()
    {
        if(empty($this->session->userdata('admin_dashboard'))){
            redirect('dashboard/login');exit;
        }

        $data['activeMenu'] = 'general';

        $this->load->model('notification');
        $data['notifications'] = $this->notification->getRecord();
        $this->load->model('general');
        $data['generals'] = $this->general->getRecord();
//echo '</pre>' . var_export($data['notifications'], true) . '<pre>';exit;
        $this->load->library('form_validation');
        if(filter_input_array(INPUT_POST)){

        }else {
            $this->load->view('dashboard/general', $data);
        }


    }
    public function member()
    {
        if(empty($this->session->userdata('admin_dashboard'))){
            redirect('dashboard/login');exit;
        }
            $data['activeMenu'] = '';

            $this->load->model('user');
        $rec = array('is_member' => 1);
        $data['members'] = $this->user->getSpecificColumnRec(false, $rec);
        //echo '<pre>' . var_export($data['member'], true) . '</pre>';exit;
            $this->load->library('form_validation');
            if(filter_input_array(INPUT_POST)){

            }else {
                $this->load->view('dashboard/member', $data);
            }


    }
    public function organization()
    {
        if(empty($this->session->userdata('admin_dashboard'))){
            redirect('dashboard/login');exit;

        }
        $data['activeMenu'] = '';

        $this->load->model('user');
        $rec = array('is_organization' => 1);
        $data['organizations'] = $this->user->getSpecificColumnRec(false, $rec);
        //echo '<pre>' . var_export($data['member'], true) . '</pre>';exit;
        $this->load->library('form_validation');
        if(filter_input_array(INPUT_POST)){
            $uid = $this->input->post('id', true);
            $this->load->model('user_meta');
            $rec = $this->user_meta->getRecord($uid, 'fk_uid', true);
           echo json_encode($rec);
        }else {
            $this->load->view('dashboard/organization', $data);
        }


    }
    public function logout()
    {
        $this->session->unset_userdata('admin_dashboard');
        redirect('dashboard/login');
    }
    public function add_member(){
        $data['activemenu'] = 'user';
        $data['user_found'] = '';
        $data['email_found'] = '';
        $data['data_saved'] = '';

        $this->load->library('form_validation');
        if($_POST){
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


                        $message = '<strong> Welcome! ' . $un . ' </strong><br /><br />'
                            . 'Now you are member of save a soul. <br />'
                            . '<br /><br /><br /><br /><br /><br /><br /><hr />'
                            . '<strong> Admin Save a Soul </strong><br /><br />';

                        $is_success = $this->send_email($uemail, $message);

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
                            $this->user->is_member= 1;
                            // a) populating values
                            $this->user->username = $un;

                            $this->user->email = $uemail;
                            $this->user->password = $hashedPassword;

                            $this->user->phone_number = $phone;
                            $this->user->joining_date = time();
                            $this->user->is_email_verified = 1;
                            $this->user->is_approved_by_admin = 1;
                            // b) saving into DB

                            $this->user->insertRecord();

                            //4) show success message / load view page

                            $data['data_saved'] = 'yes';

                            $this->load->view('dashboard/add_member', $data);
                        }else{
                            exit('email not sent');
                        }
                    }else {
                        // email found. show error that email should unique.
                        $data['email_found'] = 'yes';
                        $this->load->view('dashboard/add_member', $data);

                    }
                }else{
                    // user found. show error. user already available.
                    $data['user_found'] = 'yes';
                    $this->load->view('dashboard/add_member', $data);
                }
            }else{

                $this->load->view('dashboard/add_member', $data);
            }




        }else{
            $this->load->view('dashboard/add_member', $data);
        }
    }
    public function add_organization(){
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

                        $message = '<strong> Welcome! ' . $un . ' </strong><br /><br />'
                            . 'Now you are registered organization of save a soul. <br />'
                            . '<br /><br /><br /><br /><br /><br /><br /><hr />'
                            . '<strong> Admin Save a Soul </strong><br /><br />';

                        $is_success = $this->send_email($uemail, $message);

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
                            $this->user->joining_date = time();
                            $this->user->is_email_verified = 1;
                            $this->user->is_approved_by_admin = 1;
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
                                        'fk_uid' => $org_id,
                                        'um_key' => $bnk_num,
                                        'um_title' => 'bank_number',
                                        'um_value' => $bnk_num
                                    ),
                                    array(
                                        'fk_uid' => $org_id,
                                        'um_key' => $bnk_num,
                                        'um_title' => 'bank_title',
                                        'um_value' => $bnk_title
                                    ),
                                    array(
                                        'fk_uid' => $org_id,
                                        'um_key' => $bnk_num,
                                        'um_title' => 'bank_name',
                                        'um_value' => $bnk_name
                                    ),
                                    array(
                                        'fk_uid' => $org_id,
                                        'um_key' => $bnk_num,
                                        'um_title' => 'bank_code',
                                        'um_value' => $bnk_code
                                    ),
                                    array(
                                        'fk_uid' => $org_id,
                                        'um_key' => $bnk_num,
                                        'um_title' => 'bank_address',
                                        'um_value' => $bnk_address
                                    ),
                                    array(
                                        'fk_uid' => $org_id,
                                        'um_key' => $bnk_num,
                                        'um_title' => 'bank_swift',
                                        'um_value' => $bnk_swift
                                    ),
                                );

                                //4) show success message / load view page
                                $this->user_meta->insertBatch($bnk_array);
                            }

                            $data['data_saved'] = 'yes';

                            $this->load->view('dashboard/add_organization', $data);
                        }else{
                            exit('email not sent');
                        }
                    }else {
                        // email found. show error that email should unique.
                        $data['email_found'] = 'yes';
                        $this->load->view('dashboard/add_organization', $data);

                    }
                }else{
                    // user found. show error. user already available.
                    $data['user_found'] = 'yes';
                    $this->load->view('dashboard/add_organization', $data);
                }
            }else{

                $this->load->view('dashboard/add_organization', $data);
            }




        }else{
            $this->load->view('dashboard/add_organization', $data);
        }
    }
    /*public function city()
    {

        $data['activeMenu'] = '';

        $this->load->model('city');
        $data['city'] = $this->city->getRecord();
        $this->load->library('form_validation');
        if(filter_input_array(INPUT_POST)){
            $this->load->helper('security');
            $rules = array(
                array(
                    'field' => 'city',
                    'label' => 'city',
                    'rules' => 'required|max_length[255]|min_length[3]|xss_clean|encode_php_tags|trim'
                )
            );
            $this->load->library('form_validation');
            $this->form_validation->set_rules($rules);
            $this->form_validation->set_error_delimiters('', '');
            if (!$this->form_validation->run() == FALSE) {
                $this->city->city_name = $this->input->post('city', true);
                $this->city->city_slug = $this->input->post('city_slug', true);
                $success = $this->city->insertRecord();
                if($success){
                    $data['city'] = $this->city->getRecord();
                    $this->load->view('dashboard/city', $data);
                }
            }else{
                $this->load->view('dashboard/city', $data);
            }
        }else {
            $this->load->view('dashboard/city', $data);
        }


    }*/
	public function login() {
		$data['wrong'] = '';
		if ($_POST) {

			$this->load->helper('security');
			$rules = array(
					array(
							'field' => 'username',
							'label' => 'Username',
							'rules' => 'required|max_length[32]|min_length[3]|xss_clean|encode_php_tags|trim'
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
                $plain_pass = $this->input->post('password', true);
                $username = $this->input->post('username', true);
				$this->load->model('user');
                $column = array('password', 'username');
                $where = array('is_admin' => '1');

				$admin_data = $this->user->getSpecificColumnRec($column, $where);
                //echo '<pre>'.var_export($admin_data, true).'</pre>';exit;

				if($admin_data){
                    if ($admin_data[0]['username'] == $username and password_verify($plain_pass, $admin_data[0]['password'])) {
                        $this->session->set_userdata('admin_dashboard', 'approve');
                        redirect('dashboard/general');
                    } else {
                        $data['wrong'] = 'yes';
                        $this->load->view('dashboard/login', $data);
                    }
                } else {
                    $data['wrong'] = 'yes';
                    $this->load->view('dashboard/login', $data);
                }
			} else {
				$this->load->view('dashboard/login', $data);
			}
		} else {
			$this->load->view('dashboard/login', $data);
		}
	}

    public function editable($model, $id){

        if (filter_input_array(INPUT_POST)) {

            //echo '<pre>'.var_export($_POST, true).'</pre>';exit;
            $input_name = $this->input->post('name', true);
            $pk = $this->input->post('pk', true);
            $this->load->model($model);
            $this->load->helper('security');
            $rules = array(
                array('field' => 'value',
                    'label' => 'Value',
                    'rules' => 'required|max_length[255]|xss_clean|encode_php_tags|trim'
                )

            );
            //validation run
            $this->load->library('form_validation');
            $this->form_validation->set_rules($rules);
            $this->form_validation->set_error_delimiters('', '');

            if (!$this->form_validation->run($rules) == FALSE) {
                $value = $this->input->post('value', true);
                $updating_data = array($input_name => $value);
                $success = $this->$model->updateRecord($id, $updating_data, $pk);
                if($success){
                    header("HTTP/1.1 200 OK");
                    //echo 'updated';
                }else{
                    header('HTTP/1.0 400 Bad Request', true, 400);
                    echo 'Error! try again';
                }
            }else{
                echo validation_errors();
                header('HTTP/1.0 400 Bad Request', true, 400);

            }

        }
    }

    public function delete($model)
    {

        if(filter_input_array(INPUT_POST)){
            $value = $this->input->post('id', true);
            $colmn = $this->input->post('column', true);
            $this->load->model($model);
            $success = $this->$model->deleteRecord($colmn, $value);
            if($success){
                echo 'yes';
            }else{
                $data['status'] = 'error';
                json_encode($data);
            }
        }
    }

    public function do_upload() {


        $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)

        );
        $config['overwrite'] = FALSE;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload()) {

            return $this->upload->data('file_name');

        }else{
            return false;
        }

    }

    private function send_email($userEmail, $message){
        $this->load->library('email');
        $this->load->model('Send_email');
        return $this->Send_email->send($userEmail, $message, 'Verify_email');
    }

}