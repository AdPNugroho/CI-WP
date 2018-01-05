<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model(array('data_control','method_calculation'));
    }
		public function index(){
      $result = $this->method_calculation->getResult();
      $data = array(
        'title'=>'Report',
        'pages'=>'report',
        'criteria'=>$this->data_control->countTable('tbl_kriteria'),
        'alternative'=>$this->data_control->countTable('tbl_alternatif'),
        'normalization'=>$result['kriteria'],
        'preferensi'=>$result['preferensi']
      );
      $this->load->view('component/header',$data);
      $this->load->view('component/navigation',$data);
      $this->load->view('pages/report',$data);
      $this->load->view('component/footer',$data);
    }
}
