<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wbd_usr extends CI_Model {

    public function wbd_login() {
        $lunm = $this->input->post('lunm'); //Login Username or email
        $lpsd = md5($this->input->post('lpsd')); //Login password
        $lg_info = array(
            'unm' => $lunm,
            'psd' => $lpsd
        );

        $lg_rslt = $this->db->get_where('wbd_usr', $lg_info);

        if ($lg_rslt->num_rows() == 1):
            if ($lg_rslt->row(0)->sts == 1):
                $usr_info = array(
                    'cg_id' => $lg_rslt->row(0)->id,
                    'cg_fnm' => $lg_rslt->row(0)->fnm,
                    'u_nnm' => $lg_rslt->row(0)->nnm,
                    'cg_eml' => $lg_rslt->row(0)->eml,
                    'u_tp' => $lg_rslt->row(0)->tp,
                    'u_psd' => $lg_rslt->row(0)->psd
                );
                $this->session->set_userdata($usr_info);
                return TRUE;
            else:
                $acc_inactv = array();
                $acc_inactv['reg_msg'] = '<strong>Inactive Account!</strong> Please check your registered email for activation link or code.';
                $this->session->set_userdata($acc_inactv);
                redirect(base_url());
            endif;
        else:
            return FALSE;
        endif;
    }

    public function wbd_adn_login() {
        $adneml = $this->input->post('ademl'); //Login Username or email
        $adnpsd = md5($this->input->post('adpsd')); //Login password

        $adn_info = array(
            'eml' => $adneml,
            'psd' => $adnpsd
        );

        $adn_rslt = $this->db->get_where('wbd_adn', $adn_info);

        if ($adn_rslt->num_rows() == 1):
            if ($adn_rslt->row(0)->sts == 1):
                $adn_ses = array(
                    'adnid' => $adn_rslt->row(0)->id,
                    'fnm' => $adn_rslt->row(0)->fnm,
                    'adneml' => $adn_rslt->row(0)->eml
                );
                $this->session->set_userdata($adn_ses);
                return TRUE;
            else:
                $adn_inctv = array();
                $adn_inctv['ad_L_err'] = '<strong>Inactive Account!</strong> Please check your registered email for activation link or code.';
                $this->session->set_userdata($adn_inctv);
                redirect(base_url() . 'Admin-Login');
            endif;
        else:
            return FALSE;
        endif;
    }

}
