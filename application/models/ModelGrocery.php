<?php 
defined('BASEPATH') or exit('no direct script allowed');

class ModelGrocery extends grocery_CRUD_Model{
	private  $query_str = ''; 
	function __construct() {
		parent::__construct();
	}
 
	// function get_list() {
	// 	$query=$this->db->query($this->query_str);
 
	// 	$results_array=$query->result();
	// 	return $results_array;		
	// }
 
	public function set_query_str($query_str) {
		$this->query_str = $query_str;
	}

	function get_data(){
		$query = $this->db->query('select distinct("nama"),"pangkat","keterangan","kondisi","alamat_wfh","tanggal","waktu" from absen ');
		$result_array = $query->result();
		return $result_array;

	}
}
?>