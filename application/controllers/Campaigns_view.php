<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class campaigns_view extends CI_Controller{
    public function index (){
        $data['pagename'] = 'Campaings';
         $this->load->model('campaign');
        $data['viewcamp'] = $this->campaign->getRecord();
        $this->load->view('camp_view' , $data);
    }
     public function view($id){
        $data['pagename'] = 'Campaings';
         $this->load->model('campaign');
        
         $record = $this->campaign->getRecord($id, 'campaign_id');
         $data['campaign_id'] = $id;
         $record = (array) $record; // changing to array
         $data['rec'] = $record;
        $this->load->view('camp-details' , $data);
        
    }
}
