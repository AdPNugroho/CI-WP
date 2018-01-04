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
    private function dataAlternative(){

    }
    private function addAlternative(){

    }
    private function updateAlternative(){

    }
    private function deleteAlternative(){

    }
    private function selectAlternative(){
        
    }
}
