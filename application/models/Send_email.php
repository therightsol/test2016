<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Send_email extends MY_Model {

    public function send($userEmail = false, $message, $subject = false, $type = false) {
        $this->load->model('Email_setup');
        $record = $this->Email_setup->getRecord();
        $config = '';
        $from = '';
        $reply_to = '';
        foreach ($record as $k => $v) {

                $from = $v['email_address'];
                $reply_to = $v['email_address'];


            $config['smtp_pass'] = $v['email_password'];
            $config['smtp_user'] = $v['email_address'];
            $config['smtp_port'] = $v['email_port'];
            $config['smtp_crypto'] = $v['smtp_crypto'];
            $config['smtp_host'] = $v['email_host'];
            $config['protocol'] = $v['protocol'];
        }

        if($type == false){
            $type = 'html';
        }

        if($subject == false){
            $subject = 'Save A Soul';
        }
        if($userEmail == false){
            $userEmail = $from;
        }

        //config initialize
        $this->email->initialize($config);

        $success = $this->email->from($from)
            ->reply_to($reply_to)
            ->to($userEmail)
            ->subject($subject)
            ->message($message)
            ->set_mailtype($type)
            ->send();
        return $success;
    }

} ?>
