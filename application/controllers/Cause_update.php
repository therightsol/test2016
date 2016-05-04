<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cause_update extends CI_Controller{
    public function index (){

        
    }

    public function view()
    {
        $data['pagename'] = 'causes';
        $this->load->model('cause');
        $this->load->model('causes_meta');
        $username = $this->session->userdata('username');
        $join_wher = array(
            'causes' => 'causes.cause_id = causes_meta.cause_id'
        );

        $where = array(
            'cm_key' => 'username',
            'cm_value' => $username
        );

        $this->load->library('pagination');
        $config = array();
        $config["base_url"] = base_url() . "cause_update/view";
        $total_row = $this->causes_meta->sql_join_count($where, $join_wher);
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

        $data["viewcause"] = $this->causes_meta->sql_join_multi($where, $join_wher, $config["per_page"], $page);

        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links);


        $this->load->view('causes_update' , $data);

    }
    public function update($id = '') {
        $data['pagename'] = 'update_causes'; 
        $data['data_saved'] = '';
            if(!empty($id)){
            // its a request to update news.
            
            
            //echo( $this->input->server('REQUEST_METHOD') === 'POST');     // debugging/checking that this is a POST request.
            if($this->input->server('REQUEST_METHOD') === 'POST'){
                // if this is a post request.
                
               //
               //  echo 'now update_do_update and continue';
                 $this->load->model('cause'); 
                $record = $this->cause->getRecord($id, 'cause_id');
                $this->load->helper('security');
                $rules = array(
                array(
                    'field' => 'title',
                    'label' => 'Cause Title',
                    'rules' => 'required|trim'
                ),
                 array(
                    'field' => 'shdescription',
                    'label' => 'Short Description',
                    'rules' => 'required|max_length[100]'
                ),
                 array(
                    'field' => 'lgdescription',
                    'label' => 'Full description',
                    'rules' => 'required'
                ),
                 
                array(
                    'field' => 'amount',
                    'label' => 'Amount',
                    'rules' => 'required'
                ),
                  array(
                    'field' => 'date',
                    'label' => 'Cause End Date',
                    'rules' => 'required'
                )
                );
                $this->load->library('form_validation');
            $this->form_validation->set_rules($rules);
             if (!$this->form_validation->run($rules) == FALSE) {
                
              $title = $this->input->post('title', TRUE);
              $shdescription =  $this->input->post('shdescription', TRUE);
              $lgdescription =  $this->input->post('lgdescription', TRUE);
               $amount =  $this->input->post('amount', TRUE);
                $fdate = $this->input->post('date', TRUE);
                $updated = date('d M Y', time());
                
                   $updating_data = array(
                        'cause_title' => $title,
                        'cause_short_description' => $shdescription,
                        'cause_long_description' => $lgdescription,
                        'total_required_amount' => $amount,
                        'cause_last_date' => $fdate,
                        'cause_update_date' => $updated,
                        
                    );
                   
                   $success = $this->cause->updateRecord('cause_id', $updating_data, $id);
                    if ($success) {
                        //echo 'dat saved successfully';
                       $data['data_saved'] = 'yes';
                       $this->load->view('update_form', $data);
                    }else{
                        echo 'date not saved';
                    }
             }else{
                 //form errors 
                 $data['rec'] = "";
                 $this->load->model('cause'); 
                $record = $this->cause->getRecord($id, 'cause_id');
                 $data['cause_id'] = $id;
                    $record = (array) $record; // changing to array
                    $data['rec'] = $record;
                 $this->load->view('update_form', $data);
             }
            }else {
                // if this is not a post request.
                $this->load->model('cause'); 
                $record = $this->cause->getRecord($id, 'cause_id'); 
                
                if(!empty($record)){
                    // record found so  continue.
                    
                    $data['cause_id'] = $id;
                    $record = (array) $record; // changing to array
                    $data['rec'] = $record;
                            
                    $this->load->view('update_form' , $data);
                    
                    
                }else {
                    // record not found.
                    // display error. and load view.
                    echo 'Record not found.';
                }
            }
        }else {
            //$this->load->view('update_news' , $data);

           // $news_rec = $this->load_news();
            $data['rec'] = $rec;

            $this->load->view('causes_update' , $data);
        }
        
    }
    public function delete_cause($id){
       $this->load->model('cause');
       $successdell = $this->cause->deleteRecord('cause_id', $id);
       redirect('Causes');
    }
}

