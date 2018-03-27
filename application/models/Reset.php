<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reset extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function rest_pasd() {
        $rst_unm = $this->session->userdata('rst_unm');
        $new_psd = md5($this->input->post('newpsd'));
        $setdata = array(
            'psd' => $new_psd
        );
        $this->db->update('wbd_usr', $setdata, array('unm' => $rst_unm));
        $this->session->unset_userdata('rst_unm');
    }

}
