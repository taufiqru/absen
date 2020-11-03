<?php
defined('BASEPATH') or exit('no direct access allowed');

class ModelLogin extends CI_Model{

	function doAuth($username,$password){
		$this->load->library('encryption');
		$this->db->where('username',$username);
		$query=$this->db->get('admin')->result_array();
		for($i=0;$i<count($query);$i++){
			$res = $query[$i]['password'];
			
			if(password_verify($password,$res)){
				return $query[$i];
			}
		}

		return false;
	}
}

?>