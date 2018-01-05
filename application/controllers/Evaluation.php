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
		$id_evaluasi = $this->input->post('id_evaluasi',TRUE);
		$nilai_evaluasi = $this->input->post('nilai_evaluasi',TRUE);
		foreach($id_evaluasi as $key=>$value){
			$data[$key]['id_evaluasi'] = $value;
			$data[$key]['nilai_evaluasi'] = $nilai_evaluasi[$key];
		}
		echo json_encode($this->data_control->updateEvaluation($data));
	}
	public function selectEvaluation(){
        foreach($_POST as $key => $value){
            $data[$key] = $this->input->post($key,TRUE);
        }
		echo json_encode($this->data_control->getAllEvaluation($data));
	}
	public function dataEvaluation(){
		echo json_encode($this->data_control->getEvaluationTable());
	}
}
