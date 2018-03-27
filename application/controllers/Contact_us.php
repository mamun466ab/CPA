<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->Check->lgd_in_chk()) { //User loged in check
            redirect('dashboard');
        } else if ($this->Check->adn_in_chk() == TRUE) {
            redirect('Admin-Panel');
        }
    }

    public function index() {
        $this->load->view('Contact_us');
    }

}
