<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_pdct extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Wbd_add_info');
    }

    public function check_info() {
        //$this->load->library('form_validation');
        //Information Check 
        $data = array('ok' => false, 'messages' => array());
        $this->form_validation->set_rules('ttl', 'Offer title', 'trim|xss_clean|min_length[5]|required', array('required' => 'Offer title can\'t be empty.'));
        $this->form_validation->set_rules('ml', 'Offer link', 'trim|xss_clean|min_length[1]|required', array('required' => 'Offer link can\'t be empty.'));
        $this->form_validation->set_rules('ctgr', 'Offer category', 'trim|xss_clean|required', array('required' => 'Select a offer category.'));
        $this->form_validation->set_rules('dtl', 'Offer description', 'trim|xss_clean|required', array('required' => 'Offer description can\'t be empty.'));
        $this->form_validation->set_rules('alwc', 'Alowed country', 'trim|xss_clean|required', array('required' => 'Select a alowed country.'));
        $this->form_validation->set_rules('ppc', 'Pay', 'trim|xss_clean|required', array('required' => 'Pay can\'t be empty.'));
        
        $this->form_validation->set_error_delimiters('<p class="text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> ', '</p>');

        //Information check result
        if ($this->form_validation->run() == true) {
            $this->Wbd_add_info->wbd_pdct();
            $data['messages'] = 'Successfully added your offer.';
            $data['ok'] = true;
        } else {
            foreach ($_POST as $key => $value){
                $data['messages'][$key] = form_error($key);
            }
        }
        echo json_encode($data);
    }
    
    public function pdct_cat(){
        $data = array('ok' => false, 'messages' => array());
        $this->form_validation->set_rules('ctn', 'Category', 'trim|xss_clean|is_unique[wbd_pc.pc]|required', array('is_unique' => 'Already exist, try again another.', 'required' => 'You can\'t leave this empty.'));
        
        $this->form_validation->set_error_delimiters('<p class="text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> ', '</p>');
        
        if ($this->form_validation->run() == true) {
            $this->Wbd_add_info->wbd_pdct_cat();
            $data['messages'] = 'Successfully added product category.';
            $data['ok'] = true;
        } else {
            foreach ($_POST as $key => $value){
                $data['messages'][$key] = form_error($key);
            }
        }
        echo json_encode($data);
    }

}
