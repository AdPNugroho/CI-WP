<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Criteria extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('data_control');
    }
	public function index(){
        $data = array(
            'pages'=>'criteria',
            'title'=>'Criteria',
            'criteria'=>$this->data_control->countTable('tbl_kriteria'),
            'alternative'=>$this->data_control->countTable('tbl_alternatif')
        );
        $this->load->view('component/header',$data);
		$this->load->view('component/navigation',$data);
        $this->load->view('pages/criteria',$data);
		$this->load->view('component/footer',$data);
    }
    private function dataCriteria(){

    }
    private function addCriteria(){

    }
    private function updateCriteria(){

    }
    private function deleteCriteria(){

    }
    private function selectCriteria(){
        
    }
}
