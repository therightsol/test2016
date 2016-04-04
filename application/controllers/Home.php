<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $data['pagename'] = 'Home';
        $data['activeMenu'] = 'Home';
        
        $this->load->view('index', $data);
    }
}
?>
        
        