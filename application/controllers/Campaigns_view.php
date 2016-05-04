<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class campaigns_view extends CI_Controller{
    public function index (){
        redirect('campaigns_view/all');
    }

    public function all()
    {
        $data['pagename'] = 'Campaings';
        $this->load->model('campaign');


        $this->load->library('pagination');
        $config = array();
        $config["base_url"] = base_url() . "campaigns_view/all";
        $total_row = $this->campaign->record_count();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '<span class="fa fa-angle-left"></span>&ensp;Prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next&ensp;<span class="fa fa-angle-right"></span>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a class="active" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';




        $this->pagination->initialize($config);
        if ($this->uri->segment(3)) {
            $page = ($this->uri->segment(3));

        } else {
            $page = 0;
        }

        $data["viewcamp"] = $this->campaign->sql_join_multi(false, false, $config["per_page"], $page);

        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links);

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
