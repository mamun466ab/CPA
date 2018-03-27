<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wbd_add_info extends CI_Model {

    public function wbd_nsrt_info() {
        $nnm = $this->input->post('cgnnm');
        $cgpsd = md5($this->input->post('cgpsd'));
        $usr_eml = $this->input->post('cgeml');
        $ac = rand(100000, 999999);
        $tp = 'Affiliate';
        //date_default_timezone_set("Asia/Dhaka");
        $rd = time();
        $wbdinfo = array(
            'fnm' => $this->input->post('cgusrnm'),
            'nnm' => $nnm,
            'eml' => $usr_eml,
            'unm' => $this->input->post('cgunm'),
            'psd' => $cgpsd,
            'cnm' => $this->input->post('cgcnm'),
            'adrs' => $this->input->post('cgadr'),
            'ct' => $this->input->post('cgct'),
            'cnt' => $this->input->post('cgcnt'),
            'zn' => $this->input->post('cgzn'),
            'zc' => $this->input->post('cgzc'),
            'phn' => $this->input->post('cgpn'),
            'sts' => $ac,
            'sn' => $this->input->post('cgsn'),
            'pm' => $this->input->post('pm'),
            'pme' => $this->input->post('cgpeml'),
            'tp' => $tp,
            'rd' => $rd
        );

        if ($this->db->insert('wbd_usr', $wbdinfo)):
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
            $this->email->to($usr_eml);

            $this->email->subject('Account Verification');

            $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body>';
            $message .= '<table border="0" style="width: 60%; margin: 0 20%;"><tr align="center"><td><img src="' . base_url() . 'libs/temp_pic/logo.png" alt="Click Giants Logo" width="15%" /></td></tr></table><table border="0" style="width: 60%; margin: 0 20%; font-family: arial;"><tr><td style="padding: 10px; font-size: 19px; font-weight: bold;">Account Activation</td></tr><tr><td style="padding: 0 10px;">Hi <strong>' . $nnm . '</strong> Thank you for join with <strong>Click Giants</strong> ! Your account type "' . $tp . '". Click on the button below for active your account :</td></tr><tr><td align="center" style="padding: 12px 10px;"><a href="' . base_url() . 'Activation/activate_account/' . $ac . '" style="height: 25px; padding: 5px 10px; background: #0099BC; color: #fff; font-weight: bold; border-radius: 5px; box-shadow: 0 0 3px 2px #ccc; text-decoration: none;" onMouseOver="this.style.color = \'#0F0\'" onMouseOut="this.style.color = \'#FFF\'">Click Here</a></td></tr><tr><td style="padding: 0 10px; font-weight: bold;">Thanks Again</td></tr></table>';
            $message .= '</body></html>';

            $this->email->message($message);
            $this->email->send();
        endif;
    }

    public function wbd_pdct() {
        //date_default_timezone_set("Asia/Dhaka");
        $pd = time();
        $pdct = array(
            'ttl' => $this->input->post('ttl'),
            'ml' => $this->input->post('ml'),
            'pct' => $this->input->post('ctgr'),
            'dtl' => $this->input->post('dtl'),
            'awc' => $this->input->post('alwc'),
            'pd' => $pd,
            'ppc' => $this->input->post('ppc')
        );
        $this->db->insert('wbd_pdct', $pdct);
    }

    public function wbd_pdct_cat() {
        $prdctnm = array(
            'pc' => $this->input->post('ctn')
        );

        $this->db->insert('wbd_pc', $prdctnm);
    }

}
