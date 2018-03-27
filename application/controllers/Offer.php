<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Offer extends CI_Controller {
    public function __construct() {
        parent::__construct();
        //For user information
        $u_id = $this->session->userdata('cg_id');
        $this->User_info->info($u_id);
        // load Pagination library
        $this->load->library('pagination');
        
        if ($this->Check->lgd_in_chk() == FALSE){ //For loged in check
            redirect(base_url());
        }else if($this->Check->adn_in_chk() == TRUE){
            redirect('Admin-Panel');
        }
        
        
    }
    //For load User Dashboard
    public function Category() {
        // load db and model
        $this->load->database();
        $this->load->model('Catoffer');
        

        // init params
        $params = array();
        $params['fnm'] = $this->User_info->fnm;
        $params['pp'] = $this->User_info->ppext;
        $params['catg'] = $this->Category->ctgr();
        $params['pgttl'] = $this->uri->segment(3) . ' | Click Giants';
        $limit_per_page = 30;
        $ctg = $this->uri->segment(3);
        $page = ($this->uri->segment(4)) ? ($this->uri->segment(4) - 1) : 0;
        $total_records = $this->Catoffer->get_total($ctg);

        if ($total_records > 0) {
            // get current page records
            $params["results"] = $this->Catoffer->get_current_page_records($limit_per_page, $page * $limit_per_page, $ctg);

            $config['base_url'] = base_url() . 'Offer/Category/' . $ctg;
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
            $config["uri_segment"] = 4;

            // custom paging configuration
            $config['num_links'] = 4;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;

            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';

            $config['first_link'] = '<span class="glyphicon glyphicon-backward"></span>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';

            $config['last_link'] = '<span class="glyphicon glyphicon-forward"></span>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';

            $config['next_link'] = '<span class="glyphicon glyphicon-triangle-right"></span>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';

            $config['prev_link'] = '<span class="glyphicon glyphicon-triangle-left"></span>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';

            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';

            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';

            $this->pagination->initialize($config);

            // build paging links
            $params["links"] = $this->pagination->create_links();
        }

        $params['content'] = $this->load->view('users/Catoffer', $params, TRUE);
        $this->load->view('usr_dboard', $params);
    }
    
    //For offer detail
    public function details(){
        $this->load->model('Wbd_crud');
        $pdt_id = $this->uri->segment(3);
        $tbl= 'wbd_pdct';
        $whr_fld = array('id' => $pdt_id);
        
        //print_r($this->Wbd_crud->wbd_get($tbl, $fld, $whr_fld));
        $params = array();
        $params['pdt_dtl'] = $this->Wbd_crud->wbd_get_where($tbl, $whr_fld);
        $params['fnm'] = $this->User_info->fnm;
        $params['pp'] = $this->User_info->ppext;
        $params['pgttl'] = 'Change Password | Click Giants';
        $params['catg'] = $this->Category->ctgr();
        $params['content'] = $this->load->view('users/Offer_details', $params, TRUE);
        $this->load->view('usr_dboard', $params);
    }
}
