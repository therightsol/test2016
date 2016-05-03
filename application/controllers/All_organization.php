<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_organization extends CI_Controller{
    public function index (){
        
         $data['pagename'] = 'org';
         $this->load->model('user');
        $data['viewdon'] = $this->user->getRecord();
         $this->load->view('orgtable' , $data);
    }
    }