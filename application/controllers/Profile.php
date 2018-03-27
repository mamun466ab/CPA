<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
        $params['nnm'] = $this->User_info->nnm;
        $params['act'] = $this->User_info->act;
        $params['eml'] = $this->User_info->eml;
        $params['unm'] = $this->User_info->unm;
        $params['cnm'] = $this->User_info->cnm;
        $params['adr'] = $this->User_info->adr;
        $params['cty'] = $this->User_info->cty;
        $params['cnt'] = $this->User_info->cnt;
        $params['zne'] = $this->User_info->zne;
        $params['zcd'] = $this->User_info->zcd;
        $params['phn'] = $this->User_info->phn;
        $params['snm'] = $this->User_info->snm;
        $params['pmd'] = $this->User_info->pmd;
        $params['pme'] = $this->User_info->pme;
        $params['pp'] = $this->User_info->ppext;
        $params['jdt'] = date('d M Y', $this->User_info->jdt) . ' <strong style= "color:red">(' . date_default_timezone_get() . ')</strong>';

        $params['pgttl'] = 'User Profile | Click Giants';
        $params['catg'] = $this->Category->ctgr();
        $params['content'] = $this->load->view('users/Profile_view', $params, TRUE);
        $this->load->view('usr_dboard', $params);
    }

}
