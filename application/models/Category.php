<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Model {

    public function ctgr() {
        $this->db->order_by('pc', 'asc');
        return $this->db->get('wbd_pc')->result();
    }

}
