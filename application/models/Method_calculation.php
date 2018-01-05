<?php
class Method_calculation extends CI_Model {
    public function getResult(){
        $kriteriaTemp = $this->db->get('tbl_kriteria')->result();
        $alternatifTemp = $this->db->get('tbl_alternatif')->result();
        $evaluasiTemp = $this->db->get('tbl_evaluasi')->result();

        foreach($kriteriaTemp as $key=>$value){
            $kriteria[$value->id_kriteria] = array(
                'nama'=>$value->nama_kriteria,
                'bobot'=>$value->nilai_kriteria,
                'type'=>$value->type_kriteria
            );
        }
        foreach($alternatifTemp as $key=>$value){
            $alternatif[$value->id_alternatif]['nama']=$value->nama_alternatif;
        }
        foreach($evaluasiTemp as $key=>$value){
            $evaluasi[$value->id_kriteria][$value->id_alternatif] = $value->nilai_evaluasi;
        }
        $kriteria = $this->bobotKriteria($kriteria);
        $preferensi = $this->preferensiVektor($alternatif,$kriteria,$evaluasi);
        return array('kriteria'=>$kriteria,'preferensi'=>$preferensi);
    }
    public function bobotKriteria($kriteria){
        $total = array_sum(array_column($kriteria,'bobot'));
        foreach($kriteria as $key=>$value){
            $kriteria[$key]['normalisasi'] = $value['bobot']/$total;
        }
        return $kriteria;
    }
    public function preferensiVektor($alternatif,$kriteria,$evaluasi){
        foreach($alternatif as $keyAlternatif=>$valueAlternatif){
            $i = 1;
            foreach($kriteria as $keyKriteria=>$valueKriteria){
                if($valueKriteria['type']=="benefit"){
                    $i *= pow($evaluasi[$keyKriteria][$keyAlternatif],$kriteria[$keyKriteria]['normalisasi']);
                }else{
                    $i *= pow($evaluasi[$keyKriteria][$keyAlternatif],-$kriteria[$keyKriteria]['normalisasi']);
                }
            }
            $preferensi[$keyAlternatif]['nama']=$valueAlternatif['nama'];
            $preferensi[$keyAlternatif]['vektor_s']=$i;
        }
        $total_vektor_s = array_sum(array_column($preferensi,'vektor_s'));
        foreach($preferensi as $keyPreferensi=>$valuePreferensi){
            $preferensi[$keyPreferensi]['vektor_v'] = $valuePreferensi['vektor_s']/$total_vektor_s;
        }
        return $preferensi;
    }
}