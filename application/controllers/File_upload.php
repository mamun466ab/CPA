<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class File_upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('upload');
        $u_id = $this->session->userdata('cg_id');
        $this->User_info->info($u_id);
    }

    public function pp_upload() {
        $pp_ext = file_extension($_FILES['pp']['name']);
        if ($pp_ext != 'jpg' && $pp_ext != 'jpeg' && $pp_ext != 'png' && $pp_ext != 'gif') {
            $params = array();
            $params['fnm'] = $this->User_info->fnm;
            $params['nnm'] = $this->User_info->nnm;
            $params['act'] = $this->User_info->act;
            $params['eml'] = $this->User_info->eml;
            $params['unm'] = $this->User_info->unm;
            $params['cnm'] = $this->User_info->cnm;
            $params['adr'] = $this->User_info->adr;
            $params['cty'] = $this->User_info->cty;
            $params['cnt'] = $this->User_info->cnt;
            $params['zne'] = $this->User_info->zne;
            $params['zcd'] = $this->User_info->zcd;
            $params['phn'] = $this->User_info->phn;
            $params['snm'] = $this->User_info->snm;
            $params['pmd'] = $this->User_info->pmd;
            $params['pme'] = $this->User_info->pme;
            $params['pp'] = $this->User_info->ppext;
            $params['jdt'] = date('d M Y', $this->User_info->jdt) . ' <strong style= "color:red">(' . date_default_timezone_get() . ')</strong>';

            $params['pp_error'] = 'Profile picture must be \'jpg\' or \'jpeg\' or \'png\' or \'gif\' formate.';

            $params['pgttl'] = 'User Profile | Click Giants';
            $params['catg'] = $this->Category->ctgr();
            $params['content'] = $this->load->view('users/Profile_view', $params, TRUE);
            $this->load->view('usr_dboard', $params);
        } else {
            $u_id = $this->session->userdata('cg_id');
            $this->load->model('Wbd_crud');
            $set_data = array(
                'pp' => $pp_ext
            );
            $this->Wbd_crud->wbd_update('wbd_usr', $set_data, 'id', $u_id);
            
            //upload profile image.
            
            $config['upload_path'] = './libs/photo';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
//            $config['max_size'] = '5000';
//            $config['max_width'] = '5000';
//            $config['max_height'] = '5000';
            $config['file_name'] = "Profile-pic-{$u_id}.{$pp_ext}";
            $this->upload->initialize($config);
            $this->upload->do_upload('pp');
            $params = array();
            $params['fnm'] = $this->User_info->fnm;
            $params['nnm'] = $this->User_info->nnm;
            $params['act'] = $this->User_info->act;
            $params['eml'] = $this->User_info->eml;
            $params['unm'] = $this->User_info->unm;
            $params['cnm'] = $this->User_info->cnm;
            $params['adr'] = $this->User_info->adr;
            $params['cty'] = $this->User_info->cty;
            $params['cnt'] = $this->User_info->cnt;
            $params['zne'] = $this->User_info->zne;
            $params['zcd'] = $this->User_info->zcd;
            $params['phn'] = $this->User_info->phn;
            $params['snm'] = $this->User_info->snm;
            $params['pmd'] = $this->User_info->pmd;
            $params['pme'] = $this->User_info->pme;
            $params['pp'] = $this->User_info->ppext;
            $params['jdt'] = date('d M Y', $this->User_info->jdt) . ' <strong style= "color:red">(' . date_default_timezone_get() . ')</strong>';

            $params['pgttl'] = 'User Profile | Click Giants';
            $params['catg'] = $this->Category->ctgr();
            $params['content'] = $this->load->view('users/Profile_view', $params, TRUE);
            $this->load->view('usr_dboard', $params);
        }
    }

}
