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
    public function dataCriteria(){
        echo json_encode($this->data_control->getAll('tbl_kriteria')->result());
    }
    public function addCriteria(){
        foreach($_POST as $key => $value){
            $data[$key] = $this->input->post($key,TRUE);
        }
        echo json_encode($this->data_control->saveData($data,'tbl_kriteria','tbl_alternatif','id_kriteria','id_alternatif'));
    }
    public function updateCriteria(){
        foreach($_POST as $key => $value){
            $data[$key] = $this->input->post($key,TRUE);
        }
        echo json_encode($this->data_control->updateData($data,'id_kriteria','tbl_kriteria'));
    }
    public function deleteCriteria(){
        foreach($_POST as $key => $value){
            $data[$key] = $this->input->post($key,TRUE);
        }
        echo json_encode($this->data_control->deleteData($data,'tbl_kriteria'));
    }
    public function selectCriteria(){
        foreach($_POST as $key => $value){
            $data[$key] = $this->input->post($key,TRUE);
        }
        echo json_encode($this->data_control->getData($data,'tbl_kriteria'));
    }
}
