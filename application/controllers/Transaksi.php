<?php 

/**
* 
*/
class Transaksi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('FTransaksi','t');
		$this->load->model('FPelanggan','p');
	}


function index(){
$data['nama'] = $this->session->userdata('username');
$this->load->view('view-transaksi',$data);

}

function transaksi(){

	
}

function cash(){
	// $data['kondisitr'] = 'Cash';
	$data['nama'] = $this->session->userdata('username');
	$data['kode_cash'] = $this->t->createKodeCash();
	$data['pembeli'] = $this->p->getData();
	$this->load->view('view-cash',$data);
}

function kredit(){
	// $data['kondisitr'] = 'Kredit';
	$data['nama'] = $this->session->userdata('username');
	$data['kode_kredit'] = $this->t->createKodeKredit();
	// $data['kode_paket'] = $this->t->createKodePaketKredit();
	$data['pembeli'] = $this->p->getData();
	$this->load->view('view-kredit',$data);
}

function cicilan(){
	$data['nama'] = $this->session->userdata('username');
	//$data['kode_kredit'] = $this->t->createKodeKredit();
	$data['kode_angsuran'] = $this->t->createKodeCicilan();
	//$data['pembeli'] = $this->p->getData();
	$this->load->view('view-cicilan',$data);
}

function inputc(){

	if($this->input->post()){
			$this->t->insertc();
	echo "Input Berhasil";	//redirect('pelanggan');
	// redirect('cash');
}

else{
	echo "Input Gagal";

}

}

function inputk(){

	if($this->input->post()){
			$this->t->insertk();
			// $this->t->insertpk();
	echo "Input Berhasil";	//redirect('pelanggan');
	// redirect('cash');
}

else{
	echo "Input Gagal";

}

}

}

 ?>