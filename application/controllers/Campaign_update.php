<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign_update extends CI_Controller{
    public function index (){
         $data['pagename'] = 'campupdate';
         $this->load->model('Campaign');
        $data['viewcamp'] = $this->Campaign->getRecord();
        $this->load->view('Campaign_update' , $data);
        
    }
    public function update($id = '') {
        $data['pagename'] = 'update_camp'; 
        $data['data_saved'] = '';
            if(!empty($id)){
            // its a request to update news.
            
            
            //echo( $this->input->server('REQUEST_METHOD') === 'POST');     // debugging/checking that this is a POST request.
            if($this->input->server('REQUEST_METHOD') === 'POST'){
                // if this is a post request.
                
               //
               //  echo 'now update_do_update and continue';
                 $this->load->model('Campaign'); 
                $record = $this->Campaign->getRecord($id, 'Campaign_id');
                $this->load->helper('security');
                $rules = array(
                array(
                    'field' => 'title',
                    'label' => 'Campaign Title',
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
               
                $fdate = $this->input->post('date', TRUE);
                $updated = date('d M Y', time());
                $this->load->model('Campaign');
                   $updating_data = array(
                        'Campaign_title' => $title,
                        'campaign_short_description' => $shdescription,
                        'campaign_long_description' => $lgdescription,
                        
                        'campaign_last_date' => $fdate,
                        'campaign_insert_date' => $updated,
                        
                    );
                   
                   $success = $this->Campaign->updateRecord('campaign_id', $updating_data, $id);
                    if ($success) {
                        //echo 'dat saved successfully';
                       $data['data_saved'] = 'yes';
                       $url = base_url() . 'Campaigns_view';
                            header( "refresh:3; url=$url" );
                       $this->load->view('update_form_campaign', $data);
                    }else{
                        echo 'date not saved';
                    }
             }else{
                 //form errors 
                 $data['rec'] = "";
                 $this->load->model('campaign'); 
                $record = $this->campaign->getRecord($id, 'campaign_id');
                 $data['campaign_id'] = $id;
                    $record = (array) $record; // changing to array
                    $data['rec'] = $record;
                 $this->load->view('update_form_campaign', $data);
             }
            }else {
                // if this is not a post request.
                $this->load->model('campaign'); 
                $record = $this->campaign->getRecord($id, 'campaign_id'); 
                
                if(!empty($record)){
                    // record found so  continue.
                    
                    $data['campaign_id'] = $id;
                    $record = (array) $record; // changing to array
                    $data['rec'] = $record;
                            
                    $this->load->view('update_form_campaign' , $data);
                    
                    
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

            $this->load->view('campaign_update' , $data);
        }
        
    }
    public function delete_campaign($id){
       $this->load->model('campaign');
       $successdell = $this->campaign->deleteRecord('campaign_id', $id);
       redirect('Campaigns_view');
    }
}



