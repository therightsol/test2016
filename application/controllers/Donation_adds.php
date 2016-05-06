<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Donation_adds extends CI_Controller {

    public function index(){
     
        
     $data['pagename']   = 'don_adds';
    
      
         $data['data_saved'] = '';
        if(filter_input_array(INPUT_POST)){
            
            $this->load->helper('security');
            $rules = array(
                array(
                    'field' => 'title',
                    'label' => 'Donation Title',
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
            $this->do_upload();
            // echo '<pre>'.var_export($this->upload->data(), true).'</pre>';exit;
             if (!$this->form_validation->run($rules) == FALSE and $this->do_upload() == TRUE) {
                
              $title = $this->input->post('title', TRUE);
              $shdescription =  $this->input->post('shdescription', TRUE);
              $lgdescription =  $this->input->post('lgdescription', TRUE);
               $amount =  $this->input->post('amount', TRUE);
                $fdate = $this->input->post('date', TRUE);
                $cdate = date('d M Y', time());
                
                
                $this->load->model('Donation');
                     $this->Donation->donation_image_path = 'uploads/causes/'.$this->upload->data('file_name');
                    $this->Donation->donation_title = $title;
                    $this->Donation->donation_short_description = $shdescription;
                    $this->Donation->donation_long_description = $lgdescription;
                    $this->Donation->total_required_amount = $amount;
                    $this->Donation->donation_last_date = $fdate;
                    $this->Donation->donation_insert_date = $cdate;
                    $success = $this->Donation->insertRecord();

                 $username = $this->session->userdata('username');
                 $this->load->model('donations_meta');
                 $this->donations_meta->donation_id = $success;
                 $this->donations_meta->dm_key = 'username';
                 $this->donations_meta->dm_value = $username;
                 $this->donations_meta->insertRecord();
                    if ($success) {
                        // echo var_dump($success);
                        $data['data_saved'] = 'yes';
                         $this->load->view('don_Adds' , $data);
                    }else{
                        echo 'some internal error 404 please try again';
                    }
                 
             }else{
                 //echo 'form not validate';
                 $this->load->view('don_Adds' , $data);
                 
             }
            
                  
            
        }  else {
            
        
         $this->load->view('don_Adds' , $data);
        }
    }
    public function do_upload() {
   $config = array(
                'upload_path' => "./uploads/causes/",
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

