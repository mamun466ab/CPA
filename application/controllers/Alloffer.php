<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alloffer extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // load Pagination library
        $this->load->library('pagination');
        $u_id = $this->session->userdata('cg_id');
        $this->User_info->info($u_id);
        
        if ($this->Check->lgd_in_chk() == FALSE){ //For loged in check
            redirect(base_url());
        }else if($this->Check->adn_in_chk() == TRUE){
            redirect('Admin-Panel');
        }
        
        
    }
    //For load User Dashboard
    public function page() {
        // load db and model
        $this->load->database();
        $this->load->model('Offers');
        $this->load->model('Category');

        // init params
        $params = array();
        $params['fnm'] = $this->User_info->fnm;
        $params['pp'] = $this->User_info->ppext;
        $params['catg'] = $this->Category->ctgr();
        $limit_per_page = 30;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total_records = $this->Offers->get_total();

        if ($total_records > 0) {
            // get current page records
            $params["results"] = $this->Offers->get_current_page_records($limit_per_page, $page * $limit_per_page);

            $config['base_url'] = base_url() . 'Alloffer/page';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;

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
        
        $params['pgttl'] = 'All Offer | Click Giants';

        $params['content'] = $this->load->view('users/Alloffer', $params, TRUE);
        $this->load->view('usr_dboard', $params);
    }
}
