<?php 

/**
* 
*/
class FPelanggan extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


function insert(){

$data = array(
		'ktp_pembeli' => $this->input->post('ktp_pembeli'),
		'nama_pembeli' => $this->input->post('nama_pembeli'),	
		'alamat_pembeli' => $this->input->post('alamat_pembeli'),
		'telpon_pembeli' => $this->input->post('telpon_pembeli')
	);
if($this->db->insert('pembeli',$data)){
$this->session->set_flashdata('error','Input Berhasil');
	
}
else{
	$this->session->set_flashdata('error','Input Gagal');
}

}


function getData(){
	$query=$this->db->query("SELECT * FROM pembeli");
	return $query->result_array();

}

function delete($id){

$this->db->query("DELETE FROM pembeli WHERE ktp_pembeli='".$id."'");

}
function update(){
	$data = array(
		'nama_pembeli' => $this->input->post('nama_pembeli'),	
		'alamat_pembeli' => $this->input->post('alamat_pembeli'),
		'telpon_pembeli' => $this->input->post('telpon_pembeli')
		);
	$this->db->where('ktp_pembeli', $this->input->post('ktp_pembeli'));
	$this->db->update('pembeli',$data);

}
function jmldata(){
	$query=$this->db->query("SELECT * FROM pembeli");
	$jml = $query->num_rows();
	return $jml;
}

}

 ?>