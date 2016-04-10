<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_pic extends CI_Controller
{
    public function index()
    {


    }


    public function do_upload()
    {

        $loggedInUser = $this->session->userdata('loggedInUser');
        $user_id = $this->session->userdata('username');
        if ($_FILES) {

            $success = '';
            $config = array(
                'upload_path' => "./upload_imgs/profile/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );

            $config['overwrite'] = FALSE;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $db_img_path = '';
            $header_id = $this->input->post('id', true);
            if($header_id){
                if ($this->upload->do_upload()) {
                    $this->load->model('general');
                    $input_img_name = $this->upload->data('file_name');
                    $upload_data_path = 'upload_imgs/profile/' . $input_img_name;

                    $arr = array('company_logo_header' => $upload_data_path);
                    $success = $this->general->updateRecord('gid', $arr, $header_id);

                } else {
                    echo $this->upload->display_errors();
                }
            }
            elseif ($loggedInUser) {
                $this->load->model('user');
                $column = array('profile_image_path');
                $where_value = array('username' => $user_id);
                $db_img_name = $this->user->getSpecificColumnRec($column, $where_value);

                $db_img_path = $db_img_name[0]['profile_image_path'];

                if ($this->upload->do_upload()) {

                    $input_img_name = $this->upload->data('file_name');
                    $upload_data_path = 'upload_imgs/profile/' . $input_img_name;

                    $arr = array('profile_image_path' => $upload_data_path);
                    $success = $this->user->updateRecord('username', $arr, $user_id);

                } else {
                    echo $this->upload->display_errors();
                }
            }


            if($success){
                if (file_exists($db_img_path)) {
                    if (!unlink($db_img_path)) {
                        echo("Error deleting $db_img_path");
                    } else {
                        echo("Deleted $db_img_path");
                    }
                } else {
                    echo 'file not exist';
                }
            }



        }
    }

    public function get_img_name()
    {
        $loggedInUser = $this->session->userdata('loggedInUser');
        $user_id = $this->session->userdata('username');

        if($loggedInUser){
            $this->load->model('user');

            $column = array('profile_image_path');
            $where_value = array('username' => $user_id);
            $db_img_name = $this->user->getSpecificColumnRec($column, $where_value);

            echo $db_img_name[0]['profile_image_path'];
        }


    }

}