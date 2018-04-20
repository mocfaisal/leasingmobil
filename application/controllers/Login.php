<?php 

/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('FLogin');
		if($this->session->userdata('login') && 
			$this->uri->segment(2) != 'logout'){
			redirect('mobil');
		}
	}

	function index(){

	$this->load->view('view-login2');

	}

	function cekLogin(){
		if($this->input->post()){
			if(!$this->FLogin->cek())
				echo "Username atau Password Salah!";
		}else
		echo "Access Denied!";
	}


	function logout(){
	//$this->session->session_destroy();
	session_destroy();
	redirect('login');
	}


}

 ?>