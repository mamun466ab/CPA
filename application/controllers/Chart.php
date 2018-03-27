<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Chartmdl');
    }
    
    public function bar_chart(){
        $ctresult = $this->Chartmdl->br_chrt();
        echo json_encode($ctresult);
    }
    
    public function line_chart(){
        $result = $this->Chartmdl->chart_crud();
        echo json_encode($result);
    }
}
