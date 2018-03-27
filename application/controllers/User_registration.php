<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_registration extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Wbd_add_info');
    }

    public function check_info() {
        $this->load->library('form_validation');
        //Information Check 
        $data = array('ok' => false, 'messages' => array());
        $this->form_validation->set_rules('cgusrnm', 'Full Name', 'trim|xss_clean|min_length[5]|required');
        $this->form_validation->set_rules('cgnnm', 'Nick Name', 'trim|xss_clean|min_length[1]|required');
        $this->form_validation->set_rules('cgeml', 'Email Address', 'trim|xss_clean|valid_email|required|is_unique[wbd_usr.eml]', array('is_unique' => 'This email address already registered.'));
        $this->form_validation->set_rules('cgunm', 'User Name', 'trim|xss_clean|min_length[5]|is_unique[wbd_usr.unm]|required', array('is_unique' => 'This username already exist.'));
        $this->form_validation->set_rules('cgpsd', 'Password', 'trim|xss_clean|min_length[8]|required');
        $this->form_validation->set_rules('ccgpsd', 'Confirm Password', 'trim|xss_clean|matches[cgpsd]|required', array('matches' => 'Password does not match.'));
        $this->form_validation->set_rules('cgcnm', 'Company Name', 'trim|xss_clean');
        $this->form_validation->set_rules('cgadr', 'User Address', 'trim|xss_clean|required');
        $this->form_validation->set_rules('cgct', 'City', 'trim|xss_clean|required');
        $this->form_validation->set_rules('cgcnt', 'Country', 'trim|xss_clean|required');
        $this->form_validation->set_rules('cgzn', 'State', 'trim|xss_clean|required');
        $this->form_validation->set_rules('cgzc', 'Zip Code', 'trim|xss_clean|min_length[1]|required');
        $this->form_validation->set_rules('cgpn', 'Phone Number', 'trim|xss_clean|required');
        $this->form_validation->set_rules('cgsn', 'Skype Name', 'trim|xss_clean|required');
        $this->form_validation->set_rules('pm', 'Payment Method', 'trim|xss_clean|required');
        $this->form_validation->set_rules('cgpeml', 'Email Address', 'trim|xss_clean|required|valid_email');

        $this->form_validation->set_error_delimiters('<p class="text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> ', '</p>');

        //Information check result
        if ($this->form_validation->run() == true) {
            $this->Wbd_add_info->wbd_nsrt_info();
            $data['messages'] = 'Thank you for registration. Please check your email address for activate your account.';
            $data['ok'] = true;
        } else {
            foreach ($_POST as $key => $value) {
                $data['messages'][$key] = form_error($key);
            }
        }
        echo json_encode($data);
    }

}
