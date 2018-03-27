<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $u_id = $this->session->userdata('cg_id');
        $this->User_info->info($u_id);
        
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
        $params['pgttl'] = 'Change Password | Click Giants';
        $params['catg'] = $this->Category->ctgr();
        $params['content'] = $this->load->view('users/Change_password', $params, TRUE);
        $this->load->view('usr_dboard', $params);
    }

}
