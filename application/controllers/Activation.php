<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Activation extends CI_Controller {

    public function activate_account($ac) {
        //Update User Status
        $updatedata = $ac;

        $this->load->model('Activation_account');

        if ($this->Activation_account->update_sts($updatedata)):
            $msg = array();
            $msg['reg_msg'] = 'Thank you for activate your account';
            $this->session->set_userdata($msg);
            redirect(base_url());
        else:
            $msg = array();
            $msg['reg_msg'] = 'Your account is not activate.';
            $this->session->set_userdata($msg);
            redirect(base_url());
        endif;
    }

}
