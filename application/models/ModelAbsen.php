<?php 
defined('BASEPATH') or exit('no direct script allowed');

class ModelAbsen extends CI_Model{

	function insert($data){
		if($this->checkDuplicate($data)>0){
			$this->db->where('nama',$data['nama']);
			$this->db->where('tanggal',date('Y-m-d'));
			return $this->db->update('absen',$data);
		}else{
			return $this->db->insert('absen',$data);	
		}
	}

	function checkDuplicate($data){
		$this->db->where('nama',$data['nama']);
		$result = $this->db->get('absen')->result_array();
		return count($result);

	}

	function status(){
		return $this->db->get('status_timer')->result_array();
	}

	function updateStatus($data){
		$this->db->where('id_status','0');
		return $this->db->update('status_timer',$data);

	}

	function getAll(){
		$this->db->where('tanggal',date('Y-m-d'));
		return $this->db->get('absen')->result();
	}
}
?>