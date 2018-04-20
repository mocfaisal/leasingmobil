<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	function __construct()
	{
		
		parent::__construct();
		$this->load->model('FMobil','mb');
		$this->load->model('FPelanggan','pl');
		$this->load->model('FTransaksi','tr');
		if(!$this->session->userdata('login')){
			if($this->session->userdata('level')!='0' && $this->session->userdata('level')!='2'){
			// redirect('forbidden');
				redirect('login');
			}
			redirect('login');
		}
	}

	function index()
	{	
		$this->mb->getjmlcash();
		$this->mb->getjmlkredit();
		$data['jmlmobil'] = $this->mb->jmldata();
		$data['jmluser'] = $this->pl->jmldata();
		$data['jmltransaksi'] = $this->tr->jmldataCash() + $this->tr->jmldataKredit();
		$data['nama'] = $this->session->userdata('username');
		$data['jmltrKNow'] = $this->mb->jmltKNow();
		$data['jmltrCNow'] = $this->mb->jmltCNow();
		$data['jmltrANow'] = $this->mb->jmltKNow() + $this->mb->jmltCNow();
				//$data['level'] = $this->session->userdata('level');
		$this->load->view('view-home2',$data);
	}

	function logout(){

		session_destroy();
		redirect('login');
		
	}

}
