<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chartmdl extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function chart_crud(){
        $uid = $this->session->userdata('cg_id');
        $this->db->select('clk,cnv,dt');
        $this->db->where('uid',$uid);
        $this->db->from('wbd_cc');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function br_chrt(){
        $uid = $this->session->userdata('cg_id');
        $ccttl = array();
        $this->db->select_sum('clk');
        $this->db->where('uid', $uid);
        $this->db->from('wbd_cc');
        $clkttl = $this->db->get()->result();
        foreach ($clkttl as $clkval){
            array_push($ccttl, $clkval);
        }
        
        $this->db->select_sum('cnv');
        $this->db->where('uid', $uid);
        $this->db->from('wbd_cc');
        $cnvttl = $this->db->get()->result();
        foreach ($cnvttl as $cnvval){
            array_push($ccttl, $cnvval);
        }
        return $ccttl;
    }
}
