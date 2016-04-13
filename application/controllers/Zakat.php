<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zakat extends CI_Controller{
    public function index (){
        
       $data['pagename'] = 'zakat';
       $this->load->view('zakaat' , $data);
       
    }
}
?>