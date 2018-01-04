<?php
class Data_control extends CI_Model {
    public function countTable($table){
        if(isset($table)){
            return $this->db->count_all($table);
        }else{
            return null;
        }
    }
    public function getAll($table){
        if(isset($table)){
            return $this->db->get($table);
        }else{
            return null;
        }
    }
}