<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_pass extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Reset');
    }

    public function index() {

        $this->session->set_userdata(array('rst_frm' => 'Reset Email'));
        //echo $this->session->userdata('rst_frm');
        redirect(base_url());
    }

    public function send_pass() {
        $usr_eml = $this->input->post('rsteml');
        $this->load->model('Usr_pass');
        if ($this->Usr_pass->snd_pass($usr_eml) == TRUE):
            $this->session->set_userdata(array('suc_msg' => 'Please check your email address for Username and Password.'));
            redirect(base_url());
        else:
            $this->session->set_userdata(array('reg_msg' => 'Yout email is not registered. Click <a href="' . base_url() . 'Affiliate-Signup">Here</a> for register a affiliate account.'));
            redirect(base_url());
        endif;
    }

    public function reset_form($rst_umn) {
        $rst_ses = array(
            'new_psd' => 'Ok',
            'rst_unm' => $rst_umn
        );
        $this->session->set_userdata($rst_ses);
        redirect(base_url());
    }

    public function reset_psd() {
        $this->load->library('form_validation');
        $data = array('ok' => false, 'messages' => array());
        $this->form_validation->set_rules('newpsd', 'New Password', 'trim|xss_clean|min_length[8]|required', array('required' => 'You can\'t leave this empty.'));
        $this->form_validation->set_rules('newcpsd', 'Confirm New Password', 'trim|xss_clean|matches[newpsd]|required', array('matches' => 'Password does not match.', 'required' => 'You can\'t leave this empty.'));

        $this->form_validation->set_error_delimiters('<p class="text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> ', '</p>');

        if ($this->form_validation->run() == true) {
            $this->Reset->rest_pasd();
            $data['messages'] = 'Your Password Successfully Reset.';
            $data['ok'] = true;
        } else {
            foreach ($_POST as $key => $value) {
                $data['messages'][$key] = form_error($key);
            }
        }

        echo json_encode($data);
    }

    public function cng_psd() {
        $this->load->library('form_validation');
        $data = array('ok' => false, 'messages' => array());
        $this->form_validation->set_rules('opsd', 'Old Password', 'trim|xss_clean|min_length[8]|required', array('required' => 'You can\'t leave this empty.', 'min_length' => 'Atleast 8 characters.'));
        $this->form_validation->set_rules('rnpsd', 'New Password', 'trim|xss_clean|required|min_length[8]', array('required' => 'You can\'t leave this empty.', 'min_length' => 'Atleast 8 characters.'));
        $this->form_validation->set_rules('crnpsd', 'Confirm New Password', 'trim|xss_clean|matches[rnpsd]|required', array('matches' => 'Password does not match.', 'required' => 'You can\'t leave this empty.'));

        $this->form_validation->set_error_delimiters('<p class="text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> ', '</p>');

        if ($this->form_validation->run() == true) {
//            $this->Reset->rest_pasd();
//            $data['messages'] = 'Your Password Successfully Reset.';
//            $data['ok'] = true;
            $u_id = $this->session->userdata('cg_id');
            $u_psd = $this->session->userdata('u_psd');
            $o_psd = md5($this->input->post('opsd'));
            $n_psd = md5($this->input->post('rnpsd'));
            if ($u_psd == $o_psd) {
                $this->load->model('Wbd_crud');
                $set_data = array(
                    'psd' => $n_psd
                );
                $this->Wbd_crud->wbd_update('wbd_usr', $set_data, 'id', $u_id);
                $data['messages'] = 'Your Password Successfully Reset.';
                $data['ok'] = true;
            } else {
                $data['messages']['opsd'] = '<p class="text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Old password is incorrect.</p>';
            }
        } else {
            foreach ($_POST as $key => $value) {
                $data['messages'][$key] = form_error($key);
            }
        }

        echo json_encode($data);
    }

}
