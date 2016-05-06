<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign_add extends CI_Controller{
    public function index (){
        
        $data['pagename'] = 'addcamp';
         $data['data_saved'] = '';
        if(filter_input_array(INPUT_POST)){
            
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
                    'rules' => 'required|max_length[300]'
                ),
                 array(
                    'field' => 'lgdescription',
                    'label' => 'Full description',
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
            $this->do_upload();
            // echo '<pre>'.var_export($this->upload->data(), true).'</pre>';exit;
             if (!$this->form_validation->run($rules) == FALSE and $this->do_upload() == TRUE) {
                
              $title = $this->input->post('title', TRUE);
              $shdescription =  $this->input->post('shdescription', TRUE);
              $lgdescription =  $this->input->post('lgdescription', TRUE);
               $amount =  $this->input->post('amount', TRUE);
                $fdate = $this->input->post('date', TRUE);
                $cdate = date('d M Y', time());
                
                
                $this->load->model('campaign');
                     $this->campaign->campaign_image_path = 'uploads/camp/'.$this->upload->data('file_name');
                    $this->campaign->campaign_title = $title;
                    $this->campaign->campaign_short_description = $shdescription;
                    $this->campaign->campaign_long_description = $lgdescription;
                    
                    $this->campaign->campaign_last_date = $fdate;
                    $this->campaign->campaign_insert_date = $cdate;
                    $success = $this->campaign->insertRecord();

                 $this->load->model('campaign_meta');
                $username = $this->session->userdata('username');

                 $this->campaign_meta->campaign_id = $success;
                 $this->campaign_meta->cmp_key = 'username';
                 $this->campaign_meta->cmp_value = $username;
                 $this->campaign_meta->insertRecord();
                    if ($success) {
                        // echo var_dump($success);
                        $data['data_saved'] = 'yes';
                        $this->load->view('camp_add', $data);
                    }else{
                        echo 'some internal error 404 please try again';
                    }
                 
             }else{
                 //echo 'form not validate';
                 $this->load->view('camp_add' , $data);
                 
             }
            
                  
            
        }  else {
            
        
        $this->load->view('camp_add' , $data);
        }
    }
    public function do_upload() {
   $config = array(
                'upload_path' => "./uploads/camp/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'max_size' => "2048000"
            );

            $config['overwrite'] = FALSE;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {

              //  echo '<pre>'.var_export($this->upload->data(), true).'</pre>';exit;
                return True;
            } else {
                return FALSE;
               // echo $this->upload->display_errors();
            }
}
    }


