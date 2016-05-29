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
            $content = '';
            $i = 1;
            if($rec){
                foreach($rec as $key => $value){
                    if($value['um_title'] == 'bank_title'){
                        $content .= "<tr><td>".$i."</td><td>".$value['um_value']."</td><td>".$value['um_key']."</td><td><a href=".base_url().'dashboard/bank/'.$value['um_id']."><i class='fa fa-eye'></i></a></td><td><a href=".base_url().'dashboard/bank/'.$value['um_id'].'/new'."><i class='fa fa-plus'></i></a></td></tr>";

                    }
                $i++;
                }
            }

           echo $content;
        }else {
            $this->load->view('dashboard/organization', $data);
        }


    }
     public function update()
    {
        if(empty($this->session->userdata('admin_dashboard'))){
            redirect('dashboard/login');exit;

        }

        $this->load->model('user');
        $username = $this->session->userdata('username');
         $data['activeMenu'] = '';
         if($_POST){
             $input_name = $this->input->post('name', true);
             $value = $this->input->post('value', true);
             $pk = $this->input->post('pk', true);


             if($input_name == 'username'){
                 $updating_data = array($input_name => $value);
                 $success = $this->user->updateRecord('uid', $updating_data, $pk);
                 $this->session->set_userdata('username', $value);
             }elseif($input_name == 'password'){
                 $options = [
                     'cost' => 10
                 ];
                 $hashedPassword = password_hash($value, PASSWORD_BCRYPT, $options);
                 $updating_data = array($input_name => $hashedPassword);
                 $success = $this->user->updateRecord('uid', $updating_data, $pk);
                 header("HTTP/1.1 200 OK");

             }
         }else{

             $where = array('is_admin' => '1', 'username' => $username);
             $data['admin_data'] = $this->user->getSpecificColumnRec(false, $where);
             $this->load->view('dashboard/updateprofile' , $data);
         }
        //echo '<pre>'.var_export($data['admin_data'], true).'</pre>';exit;

         
    }
    public function bank($id, $status = ''){
        $data['id'] = $id;
        $data['status'] = $status;
        $data['data_saved'] = '';
        $this->load->view('dashboard/bank', $data);
    }
    public function all_users()
    {
        if(empty($this->session->userdata('admin_dashboard'))){
            redirect('dashboard/login');exit;

        }
        $data['activeMenu'] = '';

        $this->load->model('user');
        $rec = array('is_organization' => 1);
        $data['all'] = $this->user->getRecord();
        //echo '<pre>' . var_export($data['member'], true) . '</pre>';exit;
        $this->load->library('form_validation');
        if(filter_input_array(INPUT_POST)){
            $uid = $this->input->post('pk', true);
            $value = $this->input->post('value', true);
            if($value == 'is_member'){
                $updating_data = array(
                    'is_organization' => 0,
                    'is_member' => 1,
                    'is_admin' => 0,
                    'is_approved_by_admin' => 1,
                );
                $success = $this->user->updateRecord('uid', $updating_data, $uid);
            }elseif($value == 'is_organization'){
                $updating_data = array(
                    'is_organization' => 1,
                    'is_member' => 0,
                    'is_admin' => 0,
                    'is_approved_by_admin' => 1,
                );
                $success = $this->user->updateRecord('uid', $updating_data, $uid);
            }elseif($value == 'is_admin'){
                $updating_data = array(
                    'is_organization' => 0,
                    'is_member' => 0,
                    'is_admin' => 1,
                    'is_approved_by_admin' => 1,
                );
                $success = $this->user->updateRecord('uid', $updating_data, $uid);
            }elseif($value == 'banned'){
                $updating_data = array(
                    'is_organization' => 0,
                    'is_member' => 0,
                    'is_admin' => 0,
                    'is_approved_by_admin' => 2,
                );
                $success = $this->user->updateRecord('uid', $updating_data, $uid);
            }


            if($success){
                header("HTTP/1.1 200 OK");
                //echo 'updated';
            }else{
                header('HTTP/1.0 400 Bad Request', true, 400);
                echo 'Error! try again';
            }
        }else {
            $this->load->view('dashboard/all_users', $data);
        }


    }
    public function notification(){
        $this->load->model('user');
        $count = $this->user->record_count(false, array('is_approved_by_admin' => 0));
        echo $count;
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
                        $this->session->set_userdata('username', $username);
                        $this->session->set_userdata('loggedInUser', 'admin');
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
    public function editable_notification($model, $id){

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
                    echo $pk.'|'.$value;
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

    public function approve_donation (){
        $data['pagename'] = '';
        $data['success'] = '';
        $data['error'] = '';

        $this->load->model('donations_meta');
        $this->load->model('donation');
        $join_wher = array(
            'donation_ads' => 'donation_ads.donation_id = donations_meta.donation_id'
        );

        $where = array(
            'dm_key' => 'username',
        );
        $data['donation'] = $this->donations_meta->sql_join_multi($where, $join_wher);

        //echo '<pre>'.var_export($data['donation'], true).' </pre>';exit;
        if (isset($_POST['donation_id'])) {

            $id = $this->input->post('donation_id', true);
            $updating_data = array();
            $i = 0;
            foreach ($id as $k => $v){

                $updating_data[$i]['donation_id'] = $id[$i];
                $updating_data[$i]['is_approved'] = 1;
                $i++;
            }
            //echo '<tt><pre>'.var_export($updating_data,TRUE). '</tt></pre>'; exit;
            $insert_batch = $this->donation->updateBatch($updating_data, 'donation_id');
            if ($insert_batch) {
                $data['donation'] = $this->donations_meta->sql_join_multi($where, $join_wher);
                $data['success'] = 'yes';
                $this->load->view('dashboard/approve_donation' , $data);
            }else{
                $data['error'] = 'yes';
                $this->load->view('dashboard/approve_donation' , $data);;
            }
        } else {
            $this->load->view('dashboard/approve_donation' , $data);
        }


    }
    public function add_donation(){


        $data['pagename']   = '';


        $data['data_saved'] = '';
        if(filter_input_array(INPUT_POST)){

            $this->load->helper('security');
            $rules = array(
                array(
                    'field' => 'title',
                    'label' => 'Donation Title',
                    'rules' => 'required|trim'
                ),
                array(
                    'field' => 'shdescription',
                    'label' => 'Short Description',
                    'rules' => 'required|max_length[100]'
                ),
                array(
                    'field' => 'lgdescription',
                    'label' => 'Full description',
                    'rules' => 'required'
                ),

                array(
                    'field' => 'amount',
                    'label' => 'Amount',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'date',
                    'label' => 'Cause End Date',
                    'rules' => 'required'
                )
            );
            $this->load->library('form_validation');
            $this->form_validation->set_rules($rules);
            $this->image_upload();
            // echo '<pre>'.var_export($this->upload->data(), true).'</pre>';exit;
            if (!$this->form_validation->run($rules) == FALSE and $this->image_upload() == TRUE) {

                $title = $this->input->post('title', TRUE);
                $shdescription =  $this->input->post('shdescription', TRUE);
                $lgdescription =  $this->input->post('lgdescription', TRUE);
                $amount =  $this->input->post('amount', TRUE);
                $fdate = $this->input->post('date', TRUE);
                $cdate = date('d M Y', time());


                $this->load->model('Donation');
                $this->Donation->donation_image_path = 'uploads/causes/'.$this->upload->data('file_name');
                $this->Donation->donation_title = $title;
                $this->Donation->donation_short_description = $shdescription;
                $this->Donation->donation_long_description = $lgdescription;
                $this->Donation->total_required_amount = $amount;
                $this->Donation->donation_last_date = $fdate;
                $this->Donation->donation_insert_date = $cdate;
                $this->Donation->is_approved = 1;
                $success = $this->Donation->insertRecord();

                $username = $this->session->userdata('username');
                $this->load->model('donations_meta');
                $this->donations_meta->donation_id = $success;
                $this->donations_meta->dm_key = 'username';
                $this->donations_meta->dm_value = $username;
                $this->donations_meta->insertRecord();
                if ($success) {
                    // echo var_dump($success);
                    $data['data_saved'] = 'yes';
                    $this->load->view('dashboard/add_donation' , $data);
                }else{
                    echo 'some internal error 404 please try again';
                }

            }else{
                //echo 'form not validate';
                $this->load->view('dashboard/add_donation' , $data);

            }



        }  else {


            $this->load->view('dashboard/add_donation' , $data);
        }
    }
    public function slider_images(){
        $this->load->model('slide');
        $data['slider'] = $this->slide->getRecord();
        $this->load->view('dashboard/slider_images', $data);
    }

    public function upload_slider()
    {

        $this->load->model('slide');
        $name_array = array();
            $count = count($_FILES['file']['name']);
            //echo '<tt><pre>'.var_export($_FILES, true).'</tt></pre>';exit;
            foreach ($_FILES as $key => $value) {
                for ($s = 0; $s < $count; $s++) {
                    $_FILES['file']['name'] = $value['name'][$s];
                    $_FILES['file']['type'] = $value['type'][$s];
                    $_FILES['file']['tmp_name'] = $value['tmp_name'][$s];
                    $_FILES['file']['error'] = $value['error'][$s];
                    $_FILES['file']['size'] = $value['size'][$s];
                    $config['upload_path'] = './uploads/slider/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '2048000';
                    $config['overwrite'] = FALSE;
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('file')) {
                        $data = $this->upload->data();
                        $name_array = $data['file_name'];
                        $this->slide->image_dimension = $name_array;
                        $this->slide->insertRecord();
                        echo $name_array;
                    } else {
                        echo $this->upload->display_errors();
                    }
                }
            }




    }
    public function causes (){
        $data['pagename'] = '';
        $data['success'] = '';
        $data['error'] = '';

        $this->load->model('causes_meta');
        $this->load->model('cause');
        $join_wher = array(
            'causes' => 'causes.cause_id = causes_meta.cause_id'
        );
        $where = array(
            'cm_key' => 'username'
        );

        $data['causes'] = $this->causes_meta->sql_join_multi($where, $join_wher);

        //echo '<pre>'.var_export($data['causes'], true).' </pre>';exit;

            $this->load->view('dashboard/causes' , $data);


    }
    public function add_causes (){
        $data['pagename'] = '';
        $data['data_saved'] = '';
        if(filter_input_array(INPUT_POST)){

            $this->load->helper('security');
            $rules = array(
                array(
                    'field' => 'title',
                    'label' => 'Cause Title',
                    'rules' => 'required|trim'
                ),
                array(
                    'field' => 'shdescription',
                    'label' => 'Short Description',
                    'rules' => 'required|max_length[100]'
                ),
                array(
                    'field' => 'lgdescription',
                    'label' => 'Full description',
                    'rules' => 'required'
                ),

                array(
                    'field' => 'amount',
                    'label' => 'Amount',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'date',
                    'label' => 'Cause End Date',
                    'rules' => 'required'
                )
            );
            $this->load->library('form_validation');
            $this->form_validation->set_rules($rules);
            $this->image_upload();
            // echo '<pre>'.var_export($this->upload->data(), true).'</pre>';exit;
            if (!$this->form_validation->run($rules) == FALSE and $this->image_upload() == TRUE) {

                $title = $this->input->post('title', TRUE);
                $shdescription =  $this->input->post('shdescription', TRUE);
                $lgdescription =  $this->input->post('lgdescription', TRUE);
                $amount =  $this->input->post('amount', TRUE);
                $fdate = $this->input->post('date', TRUE);
                $cdate = date('d M Y', time());


                $this->load->model('cause');
                $this->cause->cause_image_path = 'uploads/causes/'.$this->upload->data('file_name');
                $this->cause->cause_title = $title;
                $this->cause->cause_short_description = $shdescription;
                $this->cause->cause_long_description = $lgdescription;
                $this->cause->total_required_amount = $amount;
                $this->cause->cause_last_date = $fdate;
                $this->cause->cause_insert_date = $cdate;
                $success = $this->cause->insertRecord();
                $username = $this->session->userdata('username');
                $this->load->model('causes_meta');
                $this->causes_meta->cause_id = $success;
                $this->causes_meta->cm_key = 'username';
                $this->causes_meta->cm_value = $username;
                $this->causes_meta->insertRecord();
                if ($success) {
                    // echo var_dump($success);
                    $data['data_saved'] = 'yes';
                    $this->load->view('dashboard/add_causes', $data);
                }else{
                    echo 'some internal error 404 please try again';
                }

            }else{
                //echo 'form not validate';
                $this->load->view('dashboard/add_causes' , $data);

            }



        }  else {
            $this->load->view('dashboard/add_causes' , $data);
        }


    }
    public function campaigns (){
        $data['pagename'] = '';
        $data['success'] = '';
        $data['error'] = '';

        $this->load->model('campaign_meta');
        $this->load->model('campaign');
        $join_wher = array(
            'campaign_ads' => 'campaign_ads.campaign_id = campaign_meta.campaign_id'
        );
        $where = array(
            'cmp_key' => 'username'
        );

        $data['campaign'] = $this->campaign_meta->sql_join_multi($where, $join_wher);

        //echo '<pre>'.var_export($data['campaign'], true).' </pre>';exit;

        $this->load->view('dashboard/campaigns' , $data);


    }
    public function add_campaigns (){
        $data['pagename'] = '';
        $data['data_saved'] = '';
        if(filter_input_array(INPUT_POST)){


            $this->load->helper('security');
            $rules = array(
                array(
                    'field' => 'title',
                    'label' => 'Cause Title',
                    'rules' => 'required|trim'
                ),
                array(
                    'field' => 'shdescription',
                    'label' => 'Short Description',
                    'rules' => 'required|max_length[100]'
                ),
                array(
                    'field' => 'lgdescription',
                    'label' => 'Full description',
                    'rules' => 'required'
                ),


                array(
                    'field' => 'date',
                    'label' => 'Cause End Date',
                    'rules' => 'required'
                )
            );
            $this->load->library('form_validation');
            $this->form_validation->set_rules($rules);
            $this->image_upload();
            // echo '<pre>'.var_export($this->upload->data(), true).'</pre>';exit;
            if (!$this->form_validation->run($rules) == FALSE and $this->image_upload() == TRUE) {

                $title = $this->input->post('title', TRUE);
                $shdescription =  $this->input->post('shdescription', TRUE);
                $lgdescription =  $this->input->post('lgdescription', TRUE);
                $amount =  $this->input->post('amount', TRUE);
                $fdate = $this->input->post('date', TRUE);
                $cdate = date('d M Y', time());


                $this->load->model('campaign');
                $this->campaign->campaign_image_path = 'uploads/causes/'.$this->upload->data('file_name');
                $this->campaign->campaign_title = $title;
                $this->campaign->campaign_short_description = $shdescription;
                $this->campaign->campaign_long_description = $lgdescription;

                $this->campaign->campaign_last_date = $fdate;
                $this->campaign->campaign_insert_date = $cdate;
                $success = $this->campaign->insertRecord();

                $this->load->model('campaign_meta');
                $username = $this->session->userdata('username');

                $this->campaign_meta->campaign_id = $success;
                $this->campaign_meta->cmp_key = 'username';
                $this->campaign_meta->cmp_value = $username;
                $this->campaign_meta->insertRecord();
                if ($success) {
                    // echo var_dump($success);
                    $data['data_saved'] = 'yes';
                    $this->load->view('dashboard/add_campaigns', $data);
                }else{
                    echo 'some internal error 404 please try again';
                }

            }else{
                //echo 'form not validate';
                $this->load->view('dashboard/add_campaigns' , $data);

            }


        }  else {
            $this->load->view('dashboard/add_campaigns' , $data);
        }


    }
    public function delete_images()
    {
        $ds = DIRECTORY_SEPARATOR;  // Store directory separator (DIRECTORY_SEPARATOR) to a simple variable. This is just a personal preference as we hate to type long variable name.
        $storeFolder = 'uploads/slider';

        $fileList = $_POST['fileList'];


        if(isset($fileList)){
            unlink('uploads/slider/'.$fileList);
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

    private function send_email($userEmail, $message, $subject = 'Verify_email'){
        //echo $userEmail . '   ' . $message . '   ' . $subject;
        $this->load->library('email');
        $this->load->model('Send_email');
        return $this->Send_email->send($userEmail, $message, $subject);
    }
    public function send_notification(){
        $value = $this->input->post('value', true);

        $explod = explode('|', $value);
        $id = $explod[0];
        $status = $explod[1];

        //var_export($explod);exit;

        $this->load->model('donation');
        $join_wher = array(
            'donations_meta' => 'donations_meta.donation_id = donation_ads.donation_id'
        );

        $where = array(
            'dm_key' => 'username',
            'donation_ads.donation_id' => $id,

        );
        $donation_rec = $this->donation->sql_join_multi($where, $join_wher);

        //echo var_export($donation_rec); exit;


        $username = $donation_rec[0]['dm_value'];

        $this->load->model('user');
        $user_rec = $this->user->getRecord($username,'username');
        if($user_rec){
            //echo var_export($user_rec); exit;
            $email = $user_rec->email;

            if($status == 1){
                $message = "Your Donation ad with title \"{$donation_rec[0]['donation_title']}\" is Approved";
            }else{
                $message = "Sorry your donation ad with title \"{$donation_rec[0]['donation_title']}\" is inappropriate, it is unapproved";
            }

            $success = $this->send_email($email, $message, 'Donation Ads');
            //echo var_export($success); exit;
            if($success){
                echo 'Notification successfully sent';
            }else{
                echo 'Error! during sending email';
            }
        }else{
            echo 'username not found';
        }

    }
    public function image_upload() {
        $config = array(
            'upload_path' => "./uploads/causes/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'max_size' => "2048000"
        );

        $config['overwrite'] = FALSE;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
//echo '<pre>'.var_export($_FILES, true).'</pre>';exit;
        if ($this->upload->do_upload('file')) {

            //  echo '<pre>'.var_export($this->upload->data(), true).'</pre>';exit;
            return True;
        } else {
            return false;
        }
    }
}