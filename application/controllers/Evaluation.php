<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluation extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('data_control');
    }
	public function index(){
		$data = array(
			'pages'=>'evaluation',
			'title'=>'Evaluation',
            'criteria'=>$this->data_control->countTable('tbl_kriteria'),
            'alternative'=>$this->data_control->countTable('tbl_alternatif')
        );
		$this->load->view('component/header',$data);
		$this->load->view('component/navigation',$data);
		$this->load->view('pages/evaluation',$data);
		$this->load->view('component/footer',$data);
	}
	public function updateEvaluation(){
		
	}
	public function selectEvaluation(){
		
	}
}
