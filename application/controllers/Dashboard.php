<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index(){
		echo base_url('test');
    }
    public function countTable($tableName){
        return $this->db->count_all($tableName);
    }
}
