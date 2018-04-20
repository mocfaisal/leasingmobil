<?php 
/**
* 
*/
class Pelanggan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('FPelanggan','MPl');
	}

	function index(){
		$data['nama'] = $this->session->userdata('username');
		$data['tampil']='data';
		$this->load->view('view-pelanggan',$data);
		
	}

	function input(){

		if($this->input->post()){
			$this->MPl->insert();
	echo "Input Berhasil";	//redirect('pelanggan');
}

else{
	echo "Input Gagal";
// $data['tampil']='input';
// $data['data_pelanggan']=$this->MPl->getData();
// $this->load->view('view-pelanggan',$data);


}



}

function hapus($id){
	$this->MPl->delete($id);
	redirect('pelanggan');
}

function update(){
	if ($this->input->post()){
		$this->MPl->update();
		echo "Update Berhasil";
	}else{
		echo "Denied!";
	}
}

}


?>