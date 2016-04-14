<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation_form extends CI_Controller{
    public function index(){
        
         $data['pagename'] = 'donation';
         $data['access'] = 'no';
         $this->load->view('donations' , $data);
    }
    public function donation($id){
        
         $data['pagename'] = 'donation';
        
         $this->load->view('donations' , $data);
    }
     
    }