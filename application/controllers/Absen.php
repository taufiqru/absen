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
		
		$status =false;
		$currtime = date('H:i');
		if(strtotime($currtime)>strtotime('07:00') or strtotime($currtime)<strtotime('04:00')){
			$status =  true;
		}else{
			$status =  false;
		}

		$toggle = $this->statusTimer();
		
		if($toggle[0]['status']=="Off"){
			$status = false;	
		}

		return $status;
		
	}

	function reload(){
		if($this->checktime()){
			$data = array('status'=> 'timeout');
			
		}else{
			$data = array('status'=> 'ok');
		}
		echo json_encode($data);
	}

	
	function statusTimer(){
		$this->load->model('ModelAbsen');
		return $this->ModelAbsen->status();
	}

	function updateStatusTimer(){
		$this->load->model('ModelAbsen');
		$value = $this->input->post('status');
		$data = array( 'status' => $value);
		$res = $this->ModelAbsen->updateStatus($data);
		echo json_encode($res);
	}

	function getStatusTimer(){
		echo json_encode($this->statusTimer()[0]);
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
		if($keterangan=="Lainnya"){
			$keterangan = $this->input->post('others');
		}
		if($kondisi=="Sakit"){
			$ketsakit = $this->input->post('ketsakit');

			$kondisi = $kondisi.": ".$ketsakit;
		}
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