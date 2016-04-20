<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/*
 * Please do not change this file.
 * This file is responsible for sendig / getting data from Android Application.
 */
class Mobile extends CI_Controller{
    public function index (){
        redirect(base_url());
    }


    public function get_all_campaigns_jsonArr(){
        $this->load->model('campaign');
        $record = $this->campaign->getRecord();
        $record = (array) $record; // changing to array

        $record = json_encode($record);

        //print_r($record);
        echo $record;

    }
}
