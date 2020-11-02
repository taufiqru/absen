<?php 
defined('BASEPATH') or exit('no direct script allowed');

class ModelAbsen extends CI_Model{

	function insert($data){
		return $this->db->insert('absen',$data);
	}
}
?>