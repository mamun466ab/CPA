<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wbd_logout extends CI_Controller {

    //For user logout
    public function index() {
        $this->session->unset_userdata('cg_id');
        $this->session->unset_userdata('u_nnm');
        $this->session->unset_userdata('u_tp');
        
        $this->session->sess_destroy();
        redirect(base_url());
    }
    
    public function adn_logout(){
        $this->session->unset_userdata('adnid');
        $this->session->unset_userdata('fnm');
        $this->session->unset_userdata('adneml');
        
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
