<?php 


/**
* 
*/
class Utility extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Futility','U');
	}


function index(){

}

function utility(){

}

function register(){
	$data['nama'] = $this->session->userdata('username');
	$this->load->view('view-users',$data);

}

function input(){
	if($this->input->post()){
			$this->U->register();
	echo "Input Berhasil";	//redirect('pelanggan');
	}

else{
	echo "Input Gagal";

}

}

function logout(){

	session_destroy();
	redirect('login');
	
	}


}


 ?>