<?php
defined('BASEPATH') or exit('no direct access allowed!');

class Mitra extends CI_Controller{
	function __construct(){
		parent::__construct();
	}	

	public function add(){
		$this->show('tambah_mitra.php');
	}

	public function table(){
		$crud = new Grocery_CRUD_Extended();
		$crud->unset_jquery();
		$crud->set_table('mitra');
		$crud->unset_add();
		$crud->unset_edit();
		$output = $crud->render();
		$this->show('tabel_mitra.php',$output);
	}

	public function insert(){
		$this->load->model('ModelMitra');

		$namaperusahaan = $this->input->post('namaperusahaan');
	    $kemampuannyata = $this->input->post('kemampuannyata');
	    $tenagaahli = $this->input->post('tenagaahli');
	    $namadirektur = $this->input->post('namadirektur');
	    $jabatandirektur = $this->input->post('jabatandirektur');
	    $kontakdirektur = $this->input->post('kontakdirektur');
	    $namanarahubung = $this->input->post('namanarahubung');
	    $jabatannarahubung = $this->input->post('jabatannarahubung');
	    $kontaknarahubung = $this->input->post('kontaknarahubung');
	    $alamatkantor = $this->input->post('alamatkantor');
	    $statuskantor = $this->input->post('statuskantor');

	    $datamitra = array(
	    	'nama' => $namaperusahaan,
	    	'kemampuan_nyata' => $kemampuannyata,
	    	'tenaga_ahli' => $tenagaahli
	    );

	    $status = $this->ModelMitra->insertDataMitra($datamitra);

	    if($status != false){
	    	$datakantor = array(
	    		'id_mitra' => $status,
	    		'alamat' => $alamatkantor,
	    		'status' => $statuskantor
	    	);
	    	$this->ModelMitra->insertAlamatKantor($datakantor);

	    	$datadirektur = array(
	    		'id_mitra' => $status,
	    		'nama' => $namadirektur,
	    		'jabatan' => $jabatandirektur,
	    		'kontak' => $kontakdirektur
	    	);
	    	$this->ModelMitra->insertDataDirektur($datadirektur);

	    	$datanarahubung = array(
	    		'id_mitra' => $status,
	    		'nama' => $namanarahubung,
	    		'jabatan' => $jabatannarahubung,
	    		'kontak' => $kontaknarahubung
	    	);
	    	$this->ModelMitra->insertDataNarahubung($datanarahubung);

	    	$data = array(
	    		'status' => 'success',
	    		'msg' => 'Data Berhasil di Input!'
	    	);
	    }else{
	    	$data = array(
	    		'status' => 'error',
	    		'msg'=> 'Data Gagal Di Input!'
	    	);
	    }
	    
	    echo json_encode($data);
	}

	public function edit(){
		$this->show('edit_mitra.php');
	}

	public function show($page,$output=null){
		$this->load->view('base/header.php');
		$this->load->view('base/navbar.php');
		$this->load->view('base/sidebar.php');
		$this->load->view($page,$output);
		$this->load->view('base/control_sidebar.php');
		$this->load->view('base/footer.php');
	}
}