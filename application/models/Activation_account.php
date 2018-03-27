<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Activation_account extends CI_Model {

    public function update_sts($updatedata) {
        $data = array(
            'sts' => 1,
        );

        $this->db->where('sts', $updatedata);
        $this->db->update('wbd_usr', $data);
        return TRUE;
    }

}
