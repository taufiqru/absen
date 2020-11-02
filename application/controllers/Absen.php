<?php
defined('BASEPATH') or exit('no direct access allowed');

class Absen extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('absen');
	}

	function submit(){
		$this->load->model('ModelAbsen');

		$nama = $this->input->post('nama');
		$pangkat = $this->input->post('pangkat');
		$keterangan = $this->input->post('keterangan');
		$kondisi = $this->input->post('kondisi');
		$alamat = $this->input->post('alamat');
		$tanggal = date('Y-m-d');
		$waktu = date('H:i:s');

		$data = array(
			'nama' => $nama,
			'pangkat' => $pangkat,
			'keterangan' => $keterangan,
			'kondisi' => $kondisi,
			'alamat' => $alamat,
			'tanggal' => $tanggal,
			'waktu' => $waktu,
		);

		$this->ModelAbsen->insert($data);
	}


}

?>