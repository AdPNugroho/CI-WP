<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('data_control');
    }
	public function index(){
        $data = array(
            'title'=>'Dashboard',
            'pages'=>'dashboard',
            'criteria'=>$this->data_control->countTable('tbl_kriteria'),
            'alternative'=>$this->data_control->countTable('tbl_alternatif'),
            'dataAlternative'=>$this->data_control->getAll('tbl_alternatif'),
            'dataCriteria'=>$this->data_control->getAll('tbl_kriteria')
        );
		$this->load->view('component/header',$data);
		$this->load->view('component/navigation',$data);
		$this->load->view('pages/dashboard',$data);
		$this->load->view('component/footer',$data);
    }
    public function countTable($tableName){
        return $this->db->count_all($tableName);
    }
}
