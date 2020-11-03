<?php
defined('BASEPATH') or exit('no direct access allowed');

class Absen extends CI_Controller{
	function __construct(){
		parent::__construct();
		
	}



	function index(){
		if($this->checktime()){
			$this->show('timeout');
		}else{
			$this->show('absen');	
		}
		
	}

	function checktime(){
		$currtime = date('H:i');
		if(strtotime($currtime)>strtotime('06:30') or strtotime($currtime)<strtotime('04:00')){
			return false;
		}else{
			return false;
		}
	}

	function sukses(){
		$this->show('sukses');
	}

	function gagal(){
		$this->show('gagal');
	}

	function submit(){
		if($this->checktime()){
			$this->show('timeout');
		}else{


		$this->load->model('ModelAbsen');

		$nama = $this->input->post('nama',true);
		$pangkat = $this->input->post('pangkat');
		$keterangan = $this->input->post('keterangan');
		$kondisi = $this->input->post('kondisi');
		$alamat = $this->input->post('alamat',true);
		$tanggal = date('Y-m-d');
		$waktu = date('H:i:s');

		$data = array(
			'nama' => strip_tags($nama),
			'pangkat' => $pangkat,
			'keterangan' => $keterangan,
			'kondisi' => $kondisi,
			'alamat_wfh' => strip_tags($alamat),
			'tanggal' => $tanggal,
			'waktu' => $waktu,
		);

		$res = $this->ModelAbsen->insert($data);
		if($res){
			redirect('/absen/sukses');
		}else{
			redirect('/absen/gagal');
		}
	  }
	}


	function timeout(){
		$this->show('timeout');
	}

	function show($page,$output=null){
		$this->load->view('absenbase/header');
		$this->load->view($page,$output);
		$this->load->view('absenbase/footer.php');
	}
}

?>