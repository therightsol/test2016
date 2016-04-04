<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generals extends CI_Controller {
    public function index(){
        $this->load->model('general');
        $record = $this->general->getRecord();

        echo json_encode($record    );
    }
}
?>
        
        