<?php 

/**
* 
*/
class Mobil extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('FMobil');
		if(!$this->session->userdata('login')){
			if($this->session->userdata('level')!='0' && $this->session->userdata('level')!='2'){
			// redirect('forbidden');
				redirect('login');
			}
			redirect('login');
		}

	}

	function index(){
		$data['nama'] = $this->session->userdata('username');
		$data['tampil'] = 'data';
		// $data['KodeMobil'] = $this->FMobil->kodeMobil($this('#merk'));
		$data['data_mobil'] = $this->FMobil->getData();
		// $data['KodeMobil'] = $this->FMobil->getData();
// $data['data_mobil']=$this->FMobil->getData();
// $this->load->view('parts/top');

		$this->load->view('view-mobil',$data);
// $this->load->view('parts/bottom');

	}

// function mobil(){


// $data['tampil'] = 'data';

// $this->load->view('view-mobil',$data);

// }

	function input(){

if($this->input->post()){//input_mobil

	$this->FMobil->insert();
	echo "Input Berhasil";
	// redirect('mobil/input');
}else{
	echo "Input Gagal";
// $data['tampil']='input';
// $data['data_mobil']=$this->FMobil->getData();
// $this->load->view('view-mobil',$data);


}

// echo "Berhasil";
}

function hapus($id){
	$this->FMobil->delete($id);
	// redirect('mobil');
}

function update(){
	if ($this->input->post()){

		$this->FMobil->update();
		echo "Update Berhasil";
	}else{
		echo "Denied!";
	}

}
function kodeMobil($merk){
	$merk= strtoupper(substr($merk,0,3));
	$kode=$this->FMobil->createKodeMobil($merk);
	echo $kode;

}


}

?>