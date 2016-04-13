<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller{
    public function index(){
        
         $data['pagename'] = 'events';
        
         $this->load->view('event-details' , $data);
    }
}