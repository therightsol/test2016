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


    public function get_all_causes_jsonArr(){
        $this->load->model('cause');
        $record = $this->cause->getRecord();
        $record = (array) $record; // changing to array

        $record = json_encode($record);

        //print_r($record);
        echo $record;

    }

    public function get_single_causeDetail($id = null){

        if(! $id)
            return false;

        $this->load->model('cause');
        $record = $this->cause->getRecord($id, 'cause_id');

        $record = (array) $record; // changing to array

        $record = json_encode($record);

        //print_r($record);
        echo $record;

    }
}
