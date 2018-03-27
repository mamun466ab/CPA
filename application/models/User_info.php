<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_info extends CI_Model {

    public $fnm;
    public $nnm;
    public $eml;
    public $unm;
    public $cnm;
    public $adr;
    public $cty;
    public $cnt;
    public $zne;
    public $zcd;
    public $phn;
    public $snm;
    public $pmd;
    public $pme;
    public $act;
    public $jdt;
    public $ppext;

    public function __construct() {
        parent::__construct();
    }

    public function info($u_id) {
        $u_id_whr = array('id' => $u_id);
        $u_all_info = $this->db->get_where('wbd_usr', $u_id_whr);
        if ($u_all_info->num_rows() == 1) {
            $this->fnm = $u_all_info->row(0)->fnm;
            $this->nnm = $u_all_info->row(0)->nnm;
            $this->eml = $u_all_info->row(0)->eml;
            $this->unm = $u_all_info->row(0)->unm;
            $this->cnm = $u_all_info->row(0)->cnm;
            $this->adr = $u_all_info->row(0)->adrs;
            $this->cty = $u_all_info->row(0)->ct;
            $this->cnt = $u_all_info->row(0)->cnt;
            $this->zne = $u_all_info->row(0)->zn;
            $this->zcd = $u_all_info->row(0)->zc;
            $this->phn = $u_all_info->row(0)->phn;
            $this->snm = $u_all_info->row(0)->sn;
            $this->pmd = $u_all_info->row(0)->pm;
            $this->pme = $u_all_info->row(0)->pme;
            $this->act = $u_all_info->row(0)->tp;
            $this->jdt = $u_all_info->row(0)->rd;
            $this->ppext = $u_all_info->row(0)->pp;
        }
    }

}
