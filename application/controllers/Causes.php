<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Causes extends CI_Controller{
    public function index (){
        $data['pagename'] = 'causes';
         $this->load->model('cause');
        $data['viewcause'] = $this->cause->getRecord();
        $this->load->view('causes-grid' , $data);
        
    }
}

