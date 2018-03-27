<?php

class Check extends CI_Model {

    //User loged in check
    public function lgd_in_chk() {
        return $this->session->userdata('cg_id') != FALSE;
    }

    //Admin loged in check
    public function adn_in_chk() {
        return $this->session->userdata('adnid') != FALSE;
    }
}
