<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        //Load The User Login Model
        $this->load->model('wbd_usr');
    }

    public function index() {
        //Check User login data
        $this->form_validation->set_rules('lunm', 'Username', 'trim|xss_clean');
        $this->form_validation->set_rules('lpsd', 'Password', 'trim|xss_clean|min_length[8]');

        if ($this->form_validation->run() == FALSE) {
            //send user login data error
            $lerr = array();
            $lerr['reg_msg'] = validation_errors();
            $this->session->set_userdata($lerr);
            redirect(base_url()); //redirect to home page
        } else {
            $usr_lg = $this->wbd_usr->wbd_login();
            if ($usr_lg):
                redirect('Dashboard');
            else:
                $lg_err = array();
                $lg_err['reg_msg'] = 'Your Username or Password Incorrect.';
                $this->session->set_userdata($lg_err);
                redirect(base_url());
            endif;
        }
    }

    public function admin_login() {

        //Check User login data
        $this->form_validation->set_rules('ademl', 'Email', 'trim|xss_clean|valid_email|required');
        $this->form_validation->set_rules('adpsd', 'Password', 'trim|xss_clean|min_length[16]|required');

        $this->form_validation->set_error_delimiters('<i class="fa fa-exclamation-circle" aria-hidden="true"></i> ');

        if ($this->form_validation->run() == FALSE) {
            $alerr = array();
            $alerr['ad_L_err'] = validation_errors();
            $this->session->set_userdata($alerr);
            redirect(base_url() . 'Admin-Login');
        } else {
            $adn_lg = $this->wbd_usr->wbd_adn_login();
            if ($adn_lg):
                redirect('Admin-Panel');
            else:
                $alerr['ad_L_err'] = 'Your Email or Password Incorrect.';
                $this->session->set_userdata($alerr);
                redirect(base_url() . 'Admin-Login');
            endif;
        }
    }

}
