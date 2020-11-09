<?php
defined('BASEPATH') or exit('no direct script allowed');

class Pengaturan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->mysessioncheck->checkSession('id_admin','login');
	}

	function index(){
		$this->show('pengaturan');
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