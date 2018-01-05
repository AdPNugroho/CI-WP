<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternative extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('data_control');
    }
    public function index(){
        $data = array(
            'pages'=>'alternative',
            'title'=>'Alternative',
            'criteria'=>$this->data_control->countTable('tbl_kriteria'),
            'alternative'=>$this->data_control->countTable('tbl_alternatif')
        );
		$this->load->view('component/header',$data);
		$this->load->view('component/navigation',$data);
		$this->load->view('pages/alternative',$data);   
		$this->load->view('component/footer',$data);
    }
    public function dataAlternative(){
        echo json_encode($this->data_control->getAll('tbl_alternatif')->result());
    }
    public function addAlternative(){
        foreach($_POST as $key => $value){
            $data[$key] = $this->input->post($key,TRUE);
        }
        echo json_encode($this->data_control->saveData($data,'tbl_alternatif','tbl_kriteria','id_alternatif','id_kriteria'));
    }
    public function updateAlternative(){
        foreach($_POST as $key => $value){
            $data[$key] = $this->input->post($key,TRUE);
        }
        echo json_encode($this->data_control->updateData($data,'id_alternatif','tbl_alternatif'));
    }
    public function deleteAlternative(){
        foreach($_POST as $key => $value){
            $data[$key] = $this->input->post($key,TRUE);
        }
        echo json_encode($this->data_control->deleteData($data,'tbl_alternatif'));

    }
    public function selectAlternative(){
        foreach($_POST as $key => $value){
            $data[$key] = $this->input->post($key,TRUE);
        }
        echo json_encode($this->data_control->getData($data,'tbl_alternatif'));
    }
}
