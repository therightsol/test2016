<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donations extends CI_Controller{
    public function index (){
        


    }

    public function all()
    {
        $data['pagename'] = 'donation';
        $this->load->model('Donation');
        $this->load->library('pagination');
        $config = array();
        $config["base_url"] = base_url() . "donations/all";
        $total_row = $this->Donation->record_count(false, array('is_approved' => 1));
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

        $data["viewdonation"] = $this->Donation->sql_join_multi(array('is_approved' => 1), false, $config["per_page"], $page);


        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links);

        $this->load->view('causes-list' , $data);
    }
    }