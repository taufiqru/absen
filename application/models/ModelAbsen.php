<?php 
defined('BASEPATH') or exit('no direct script allowed');

class ModelAbsen extends CI_Model{

	function insert($data){
		return $this->db->insert('absen',$data);
	}

	function status(){
		return $this->db->get('status_timer')->result_array();
	}

	function updateStatus($data){
		$this->db->where('id_status','0');
		return $this->db->update('status_timer',$data);

	}
}
?>