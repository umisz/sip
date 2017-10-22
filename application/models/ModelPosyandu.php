<?php

class ModelPosyandu extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function getData($tableName,$data,$where=""){
		$data = $this -> db ->query('SELECT '.$data.' FROM '.$tableName." ".$where);
		return $data -> result_array();
	}

	public function cekId($tableName,$where=""){
		$data = $this -> db ->query('SELECT * FROM '.$tableName." ".$where);
  		return $data->num_rows();
 
	}
	public function dataTerakhir(){
		$data = $this->db->query("SELECT MAX(RIGHT(idBalita,3)) AS id FROM balita");
		return $data;
	}
    public function addData($tableName,$data){
		$res = $this -> db -> insert($tableName,$data);
		return $res;
	}
	public function HapusData($tableName, $where){
		$res = $this ->db-> delete($tableName,$where);
		return $res;
	}
	public function UpdateData($tableName,$data,$where){
		$res = $this ->db-> update($tableName,$data,$where);
		return $res;
	}
}

?>