<?php
defined('BASEPATH') or exit('no direct access allowed');

class Bidang extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->mysessioncheck->checkSession('id_admin','login');
	}

	function index(){
		$crud = new Grocery_CRUD_Extended();
		$crud->set_table('bidang');
		$crud->set_relation('id_personil','personil','{pangkat} {nama}');
		$crud->display_as('id_personil','Nama');
		$output = $crud->render();
		$this->show('bidang',$output);
	}

	public function show($page,$output=null){
		$this->load->view('base/header.php');
		$this->load->view('base/navbar.php');
		$this->load->view('base/sidebar.php');
		$this->load->view($page,$output);
		$this->load->view('base/footer.php');
	}

	
}