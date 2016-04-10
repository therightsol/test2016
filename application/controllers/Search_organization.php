<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_organization extends CI_Controller{
    public function index (){
        

        $data['pagename'] = 'search';
        $this->load->model('user');
        if(filter_input_array(INPUT_GET)){
            $input_search = trim($this->input->get('search', true));

            $like_value = array(
                'username' => $input_search
            );

            $this->load->library('pagination');
            $config = array();
            $config["base_url"] = base_url() . "search_organization/?search=".$input_search;
            $total_row = $this->user->record_count($like_value);
            $config["total_rows"] = $total_row;
            $config["per_page"] = 4;
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

            $config['enable_query_strings'] = TRUE;
            $config['query_string_segment'] = 'page';
            $config['page_query_string'] = TRUE;

            if ($this->input->get('page')) {
                $sgm = (int) trim($this->input->get('page'));
                $segment = $config['per_page'] * ($sgm - 1);
            } else {
                $segment = 0;
            }

            $this->pagination->initialize($config);

            $join_where = array(
                'users_meta' => 'users_meta.fk_uid = users.uid'
            );


            $data["results"] = $this->user->getPaginated($config["per_page"], $segment ,$like_value);

            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );

            $this->load->view('search_organization' , $data);
        }else{
            redirect();
        }
    }
    }
