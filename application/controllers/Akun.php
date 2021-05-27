<?php
defined('BASEPATH') or exit('no direct access allowed');

class Akun extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->mysessioncheck->checkSession('id_admin','login');
	}

	function index(){
		$crud = new Grocery_CRUD_Extended();
		$crud->set_table('admin');
		$crud->unset_jquery();
		$crud->required_fields('username','password');
		$crud->field_type('password','password');
		$crud->callback_before_insert(array($this,'encrypt_password_callback'));
		$crud->callback_before_update(array($this,'encrypt_password_callback'));
		$output = $crud->render();
		$this->show('admin',$output);
	}

	

	function encrypt_password_callback($post_array){
		$options = ['cost'=>12];
		$post_array['password'] = password_hash($post_array['password'],PASSWORD_DEFAULT,$options);
		return $post_array;

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