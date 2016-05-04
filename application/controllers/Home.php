<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $data['pagename'] = 'Home';
        $data['activeMenu'] = 'Home';
         $data['success'] = '';
        $data['error'] = '';
        $this->load->model('cause');
        $data['viewcause'] = $this->cause->getLimit(4);
        $data['total_causes'] = $this->cause->record_count();
        $this->load->model('slide');
        $data['slider'] = $this->slide->getRecord();
        //print_r($data['slider']);exit;
         $this->load->model('Donation');
        $data['viewdon'] = $this->Donation->getLimit(4);
        $data['total_Donations'] = $this->Donation->record_count();
        $this->load->model('campaign');
        $data['viewcamp'] = $this->campaign->getLimit(4);
        $data['total_campaigns'] = $this->campaign->record_count();
        $this->load->view('index', $data);
    }
}
?>