<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bankdetails extends CI_Controller
{
    public function index($uid = false)
    {

        $data['pagename'] = 'bankdetails';

        if($uid)
            $data['bank_rec'] = $this->user_meta->getRecord($uid, 'fk_uid', true);

        $this->load->view('bankdetails', $data);
    }

}