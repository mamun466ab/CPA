<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cgpanel extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Category');
        if($this->Check->adn_in_chk() == FALSE){
            redirect('Admin-Login');
        }else if($this->Check->lgd_in_chk()){
            redirect('dashboard');
        }
    }

    public function index(){
        $container = array();
        $container['catg'] = $this->Category->ctgr();
        $container['pagetitle'] = 'Add Offer';
        $container['content'] = $this->load->view('Admin/Addoffer', $container, TRUE);
        $this->load->view('Cgpanel', $container);
    }
    
    public function add_category(){
        $container = array();
        $container['pagetitle'] = 'Add Category';
        $container['content'] = $this->load->view('Admin/Addcategory', '', TRUE);
        $this->load->view('Cgpanel', $container);
    }
}
