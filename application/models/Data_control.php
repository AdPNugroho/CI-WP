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
    public function saveData($data,$table,$tableSync,$keyInsert,$keySync){
        $this->db->insert($table,$data);
        $id = $this->db->insert_id();
        $dataSync = $this->db->get($tableSync);
        if($dataSync->num_rows()>0){
            foreach($dataSync->result() as $key=>$value){
                $dataBatch[] = array(
                    $keyInsert=>$id,
                    $keySync=>$value->$keySync,
                    'nilai_evaluasi'=>0
                );
            }
            $this->db->insert_batch('tbl_evaluasi',$dataBatch);
        }
        return array('status'=>'info','message'=>'Data has been successfully saved');
    }
    public function getData($data,$table){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($data);
        return $this->db->get()->row();
    }
    public function deleteData($data,$table){
        $this->db->delete($table,$data);
        return array('status'=>'info','message'=>'Data has been successfully changed');
    }
    public function updateData($data,$param,$table){
        $this->db->where($param,$data[$param]);
        $this->db->update($table,$data);
        return array('status'=>'info','message'=>'Data has been successfully changed');
    }
    public function getEvaluationTable(){
        $criteria = $this->db->get('tbl_kriteria')->result();
        $alternative = $this->db->get('tbl_alternatif')->result();
        $evaluationTemp = $this->db->get('tbl_evaluasi')->result();
        foreach($evaluationTemp as $key=>$value){
            $evaluation[$value->id_kriteria][$value->id_alternatif] = $value->nilai_evaluasi;
        }
        $response = array(
            'criteria'=>$criteria,
            'alternative'=>$alternative,
            'evaluation'=>$evaluation
        );
        return $response;
    }
    public function getAllEvaluation($data){
        $this->db->select('*');
        $this->db->from('tbl_evaluasi');
        $this->db->join('tbl_kriteria','tbl_evaluasi.id_kriteria=tbl_kriteria.id_kriteria');
        $this->db->join('tbl_alternatif','tbl_evaluasi.id_alternatif=tbl_alternatif.id_alternatif');
        $this->db->where('tbl_evaluasi.id_alternatif',$data['id_alternatif']);
        return $this->db->get()->result();
    }
    public function updateEvaluation($data){
        foreach($data as $key=>$value){
            $update = array(
                'nilai_evaluasi'=>$value['nilai_evaluasi']
            );
            $this->db->where('id_evaluasi',$value['id_evaluasi']);
            $this->db->update('tbl_evaluasi',$update);
        }
        return array('status'=>'info','message'=>'Evaluation data has been successfully changed');
    }
}