<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donations extends CI_Controller{
    public function index (){
        
         $data['pagename'] = 'donation';
         $this->load->model('Donation');
        $data['viewdonation'] = $this->Donation->getRecord();
         $this->load->view('causes-list' , $data);
    }
    }