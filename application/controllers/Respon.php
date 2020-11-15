<?php
defined('BASEPATH') or exit('no direct script allowed');

class Respon extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->mysessioncheck->checkSession('id_admin','login');
	}

	

	function index(){
		$crud = new Grocery_CRUD_Extended();
		$this->load->config('grocery_crud');
 		//$this->config->set_item('grocery_crud_xss_clean', true);
		// $crud->unset_jquery();
		// $crud->unset_bootstrap();
		$crud->set_table('absen');
		$crud->unset_add();
		$crud->unset_edit();
		$crud->unset_read();
		$crud->unset_delete();
		$crud->where('tanggal',date('Y-m-d'));
		// $crud->callback_column('tanggal',array($this,'_callback_tanggal'));
		$crud->order_by('tanggal','asc');
		$output = $crud->render();
		$this->show('respon',$output);
	}

	function sup(){
		$crud = new Grocery_CRUD_Extended();
		$crud->set_model('modelgrocery');
		$this->load->config('grocery_crud');
		$crud->set_table('absen');
		$crud->columns(['nama','pangkat','keterangan','kondisi','tanggal','waktu']);
		$crud->basic_model->get_data();
		$crud->order_by('tanggal','asc');
		$output = $crud->render();
		$this->show('respon',$output);
	}

	public function laporan(){
		$this->load->model('ModelAbsen');
		$res['query'] = $this->ModelAbsen->getAll();

		$this->show('laporan',$res);
	}

	public function _callback_tanggal($value,$row){
		// $value = str_replace('/',$value,':'); 
		return $value;
	}
	

	public function show($page,$output=null){
		$this->load->view('base/header.php');
		$this->load->view('base/navbar.php');
		$this->load->view('base/sidebar.php');
		$this->load->view($page,$output);
		$this->load->view('base/footer.php');
	}
}

?>