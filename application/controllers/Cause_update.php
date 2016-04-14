<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cause_update extends CI_Controller{
    public function index (){
         $data['pagename'] = 'causes';
         $this->load->model('cause');
        $data['viewcause'] = $this->cause->getRecord();
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

