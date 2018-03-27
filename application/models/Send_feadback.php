<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Send_feadback extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function send_fdback(){
            $fnm = $this->input->post('cgusrnm');
            $eml = $this->input->post('cgeml');
            $sub = $this->input->post('cgcnm');
            $msgs = $this->input->post('cgadr');
        
        if (!empty($fnm) or !empty($eml) or !empty($sub) or !empty($msgs)):
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'mail.safe-department-payment.com';
            $config['mailtype'] = 'html';
//            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['smtp_user'] = 'test@safe-department-payment.com';
            $config['smtp_pass'] = 'a466765b';
            $config['smtp_port'] = '25';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;

            $this->email->initialize($config);
            $this->email->set_newline('\r\n');
            $this->email->from($eml, $fnm);
            $this->email->to('test@safe-department-payment.com');

            $this->email->subject($sub);

            $this->email->message($msgs);
            $this->email->send();
        endif;
    }
}
