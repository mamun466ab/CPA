<?php

class Cgpanellg extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->Check->adn_in_chk() == TRUE){
            redirect('Admin-Panel');
        }else if($this->Check->lgd_in_chk()){
            redirect('dashboard');
        }
    }

    public function index() {
        $this->load->view('Cg_Cpanel_Login');
    }

}
