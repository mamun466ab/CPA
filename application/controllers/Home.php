<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        //User login check model
        //$this->load->model('Check');
        if($this->Check->lgd_in_chk()){
            redirect('dashboard');
        }else if($this->Check->adn_in_chk() == TRUE){
            redirect('Admin-Panel');
        }
    }

    public function index() {
        $this->load->view('home');
    }

}
