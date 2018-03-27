<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wbd_crud extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function wbd_update($tbl, $set_data, $whr_fld, $whr_dta) {
        $this->db->where($whr_fld, $whr_dta);
        $this->db->update($tbl, $set_data);
    }

    public function wbd_get_where($tbl, $whr_fld) {
        $pdt_dtl = $this->db->get_where($tbl, $whr_fld);
        return $pdt_dtl;
    }

}
