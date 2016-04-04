<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function index(){
        $data['pagename'] = 'contact';
        $data['activeMenu'] = 'contact';
        $data['success'] = '';
        $data['error'] = '';
        //echo $this->session->userdata('loggedInUser');exit;
        $this->load->library('form_validation');
        if(filter_input_array(INPUT_POST)){
            $this->load->helper('security');
            $rules = array(
                array('field' => 'name',
                    'label' => 'Name',
                    'rules' => 'required|max_length[32]|min_length[2]|xss_clean|encode_php_tags|trim'
                ),
                array('field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required|max_length[32]|min_length[2]|xss_clean|encode_php_tags|trim'
                ),
                array('field' => 'number',
                    'label' => 'Number',
                    'rules' => 'max_length[32]|min_length[2]|xss_clean|encode_php_tags|trim'
                ),
                array('field' => 'message',
                    'label' => 'Message',
                    'rules' => 'required|max_length[500]|min_length[2]|xss_clean|encode_php_tags|trim'
                ),
            );

            $this->form_validation->set_rules($rules);
            $this->form_validation->set_error_delimiters('', '');

            if (!$this->form_validation->run($rules) == FALSE) {

                $input_message = $this->input->post('message', true);
                $name = $this->input->post('name', true);
                $email = $this->input->post('email', true);
                $Phone = $this->input->post('number', true);
                $success = $this->email($input_message, $name, $Phone, $email);
                if($success){
                    $data['success'] = 'yes';
                    $this->load->view('contact' , $data);
                }else{
                    $data['error'] = 'yes';
                    $this->load->view('contact' , $data);
                }
            }else{
                $this->load->view('contact' , $data);
            }
        }else{
            $this->load->view('contact' , $data);
        }

    }
    private function email($input_message, $name, $Phone, $email) {
        $this->load->model('basic_functions');

        $message =  '<b>Email Address </b>:'.$email
            .'<br><b>Name:</b>'.$name
            .'<br><b>Phone:</b>'.$Phone
            .'<br><b>Message:</b>'.$input_message
            . '<br /><br /><br /><br /><br /><br /><br /><hr />'
            . '<strong> </strong><br /><br />'
            . '<hr /> Thank you to choose our company <br /> <br />';


        $this->load->library('email');
        $this->load->model('send_email');
        $success = $this->send_email->send(false, $message, 'Contact');
        return $success;

    }
}

?>
