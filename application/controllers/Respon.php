<?php
defined('BASEPATH') or exit('no direct script allowed');

class Respon extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$crud = new Grocery_CRUD_Extended();
		 $this->load->config('grocery_crud');
 		$this->config->set_item('grocery_crud_xss_clean', true);
		$crud->unset_jquery();
		$crud->set_table('absen');
		$crud->unset_add();
		$crud->unset_edit();
		$crud->unset_read();
		$crud->unset_delete();
		$output = $crud->render();
		$this->show('respon',$output);
	}


	

	public function show($page,$output=null){
		$this->load->view('base/header.php');
		$this->load->view($page,$output);
		$this->load->view('base/footer.php');
	}
}

?>