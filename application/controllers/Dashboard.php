<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index(){
		$this->load->view('pages/dashboard');
    }
    public function countTable($tableName){
        return $this->db->count_all($tableName);
    }
}
