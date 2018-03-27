<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usr_pass extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function snd_pass($usr_eml) {
        $usr_ml = $usr_eml;
        $snt_psd = $this->db->get_where('wbd_usr', array('eml' => $usr_ml));

        $nnm = $snt_psd->row(0)->nnm;
        $tp = $snt_psd->row(0)->tp;
        $unm = $snt_psd->row(0)->unm;
        $psd = $snt_psd->row(0)->psd;

        if ($snt_psd->num_rows() == 1) {
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
            $this->email->from('test@safe-department-payment.com', 'Click Giants');
            $this->email->to($usr_ml);

            $this->email->subject('Send Password');

            $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body>';
            $message .= '<table border="0" style="width: 60%; margin: 0 20%;"><tr align="center"><td><img src="' . base_url() . 'libs/temp_pic/logo.png" alt="Click Giants Logo" width="15%" /></td></tr></table><table border="0" style="width: 60%; margin: 0 20%; font-family: arial;"><tr><td style="padding: 10px; font-size: 19px; font-weight: bold;">Account Activation</td></tr><tr><td style="padding: 0 10px;">Hi <strong>' . $nnm . '</strong> Thank you for stay with <strong>Click Giants</strong> ! Your account type "' . $tp . '".</td></tr><tr><td style="padding: 12px 10px;">Your Username : ' . $unm . '</td></tr><tr><td style="padding: 0 10px; font-weight: bold;">Click Here for Reset Password :- <a href="' . base_url() . 'Reset_pass/reset_form/' . $unm . '" style="height: 25px; padding: 5px 10px; background: #0099BC; color: #fff; font-weight: bold; border-radius: 5px; box-shadow: 0 0 3px 2px #ccc; text-decoration: none;" onMouseOver="this.style.color = \'#0F0\'" onMouseOut="this.style.color = \'#FFF\'">Click Here</a></td></tr></table>';
            $message .= '</body></html>';

            $this->email->message($message);
            $this->email->send();
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
