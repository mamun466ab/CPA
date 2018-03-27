<?php

// models/Users.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catoffer extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_current_page_records($limit, $start, $ctg) {
        $this->db->where('pct', $ctg);
        $this->db->limit($limit, $start);
        $query = $this->db->get("wbd_pdct");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    public function get_total($ctg) {
        $this->db->where('pct', $ctg);
        return $this->db->get('wbd_pdct')->num_rows();
    }

}
