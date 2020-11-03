<?php 
defined('BASEPATH') or exit('no direct script allowed');

class Login extends CI_Controller{ 
	function __construct(){
		parent::__construct();
	}	

	function index(){
		$status=$this->uri->segment(3);
		if(isset($status)){
			$data['status']="error!";
		}else{
			$data="";
		}

		$this->show('login',$data);		
	}

	function auth(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$this->load->model('ModelLogin');
		$val = $this->ModelLogin->doAuth($username,$password);
		
		if($val!=false){
			$this->mysessioncheck->createSession($val);
			redirect(base_url()."index.php/respon/");
		}else{
			 redirect(base_url()."index.php/login/index/error");
		}
	}

	function show($page,$output=null){
		$this->load->view($page,$output);
	}

	function logout(){
		$this->mysessioncheck->sessionDestroy('login');
	}
}