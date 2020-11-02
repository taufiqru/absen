<?php
class ModelMitra extends CI_Model{

	function insertDataMitra($data){
		$res = $this->db->insert('mitra',$data);

		if($res){
			return $insert_id = $this->db->insert_id();	
		}else{
			return $res;
		}
		
	}

	function insertAlamatKantor($data){
		return $this->db->insert('kantor',$data);
	}

	function insertDataDirektur($data){
		return $this->db->insert('direktur',$data);
	}

	function insertDataNarahubung($data){
		return $this->db->insert('narahubung',$data);
	}
}

?>