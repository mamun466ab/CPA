<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $u_id = $this->session->userdata('cg_id');
        $this->User_info->info($u_id);
        $this->load->model('Category');

        if ($this->Check->lgd_in_chk() == FALSE) { //For loged in check
            redirect(base_url());
        } else if ($this->Check->adn_in_chk() == TRUE) {
            redirect('Admin-Panel');
        }
    }

    public function index() {
        $params = array();
        $params['fnm'] = $this->User_info->fnm;
        $params['pp'] = $this->User_info->ppext;
        $params['pgttl'] = 'Contact Us | Click Giants';
        $params['catg'] = $this->Category->ctgr();
        $params['content'] = $this->load->view('users/Contact_us', $params, TRUE);
        $this->load->view('usr_dboard', $params);
    }

    public function send_mail() {
        $this->load->library('form_validation');
        //Information Check 
        $data = array('ok' => false, 'messages' => array());
        $this->form_validation->set_rules('cgusrnm', 'Full Name', 'trim|xss_clean|min_length[5]|required', array('required' => 'You can\'t leave this empty.'));
        $this->form_validation->set_rules('cgeml', 'Email Address', 'trim|xss_clean|valid_email|required', array('valid_email' => 'This email address not valid.', 'required' => 'You can\'t leave this empty.'));
        $this->form_validation->set_rules('cgcnm', 'User Address', 'trim|xss_clean|required', array('required' => 'You can\'t leave this empty.'));
        $this->form_validation->set_rules('cgadr', 'City', 'trim|xss_clean|required', array('required' => 'You can\'t leave this empty.'));

        $this->form_validation->set_error_delimiters('<p class="text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> ', '</p>');

        //Information check result
        if ($this->form_validation->run() == true) {
            $this->load->model('Send_feadback');
            $this->Send_feadback->send_fdback();
            $data['messages'] = 'Thank you for your feadback.';
            $data['ok'] = true;
        } else {
            foreach ($_POST as $key => $value) {
                $data['messages'][$key] = form_error($key);
            }
        }
        echo json_encode($data);
    }

}
