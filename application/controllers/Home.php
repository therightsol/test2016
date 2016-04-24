<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $data['pagename'] = 'Home';
        $data['activeMenu'] = 'Home';
         $data['success'] = '';
        $data['error'] = '';
         $this->load->model('cause');
        $data['viewcause'] = $this->cause->getRecord();
         $this->load->model('Donation');
        $data['viewdon'] = $this->Donation->getRecord();
        $this->load->model('campaign');
        $data['viewcamp'] = $this->campaign->getRecord();
        $this->load->view('index', $data);
    }
}
?>
        
        