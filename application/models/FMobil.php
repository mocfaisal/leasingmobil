<?php 

/**
* 
*/
class FMobil extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function createKodeMobil($merk){
		$tahun_sekarang = date('Y');
		$query = $this->db->query(
			"SELECT IFNULL(MAX(SUBSTRING(kode_mobil,8,5)),0)+1 AS no_urut FROM mobil
			WHERE SUBSTRING(kode_mobil,4,4)='".$tahun_sekarang."' AND SUBSTRING(kode_mobil,1,3)='".$merk."'");

		$data = $query->row_array();
		$no_urut = sprintf("%'.03d",$data['no_urut']);
		$kode_mobil = $merk.$tahun_sekarang.$no_urut;
		return $kode_mobil;
	}


	function insert(){
		$data = array(
			'kode_mobil' => $this->input->post('kode_mobil'),
			'merk' => $this->input->post('merk'),	
			'type' => $this->input->post('type'),
			'warna' => $this->input->post('warna'),
			'harga_mobil' => $this->input->post('harga'),
			'gambar' => $this->input->post('gambar')
		);
		if($this->db->insert('mobil',$data)){
			$this->session->set_flashdata('error','Input Berhasil');

		}
		else{
			$this->session->set_flashdata('error','Input Gagal');
		}
	}

	function getData(){
		$query=$this->db->query("SELECT * FROM mobil");
		return $query->result_array();

	}

	function delete($id){

		$this->db->query("DELETE FROM mobil WHERE kode_mobil='".$id."'");

	}

	function update(){

		$data = array(
			'merk' => $this->input->post('merk'),
			'type' => $this->input->post('type'),
			'warna' => $this->input->post('warna'),
			'harga_mobil' => $this->input->post('harga'),
			'gambar' => $this->input->post('gambar')
		);

		$this->db->where('kode_mobil', $this->input->post('kode_mobil'));
		$this->db->update('mobil', $data);
		
	}
	function jmldata(){
		$query=$this->db->query("SELECT * FROM mobil");
		$jml=$query->num_rows();
		return $jml;
	}

function grafikcash($bulan){
	$query=$this->db->query("SELECT count(cash_tgl) FROM v_tgltransaksi where cash_tgl like '%". date('Y'). "-" .$bulan."%' GROUP BY kode_cash");
	$jml=$query->num_rows();
	return $jml;

}

function getjmlcash(){
	$data = array(
		'cashJan' => $this->grafikcash('01'),
		'cashFeb' => $this->grafikcash('02'),
		'cashMar' => $this->grafikcash('03'),
		'cashApr' => $this->grafikcash('04'),
		'cashMei' => $this->grafikcash('05'),
		'cashJun' => $this->grafikcash('06'),
		'cashJul' => $this->grafikcash('07'),
		'cashAgu' => $this->grafikcash('08'),
		'cashSep' => $this->grafikcash('09'),
		'cashOkt' => $this->grafikcash('10'),
		'cashNov' => $this->grafikcash('11'),
		'cashDes' => $this->grafikcash('12')
		
	);
	$this->session->set_userdata($data);

}


function grafikkredit($bulan){
	$query=$this->db->query("SELECT count(tgl_kredit) FROM v_tgltransaksi where tgl_kredit like '%". date('Y'). "-" .$bulan."%' GROUP BY kode_kredit");
	$jml=$query->num_rows();
	return $jml;

}

function getjmlkredit(){
	$data = array(
		'kreditJan' => $this->grafikkredit('01'),
		'kreditFeb' => $this->grafikkredit('02'),
		'kreditMar' => $this->grafikkredit('03'),
		'kreditApr' => $this->grafikkredit('04'),
		'kreditMei' => $this->grafikkredit('05'),
		'kreditJun' => $this->grafikkredit('06'),
		'kreditJul' => $this->grafikkredit('07'),
		'kreditAgu' => $this->grafikkredit('08'),
		'kreditSep' => $this->grafikkredit('09'),
		'kreditOkt' => $this->grafikkredit('10'),
		'kreditNov' => $this->grafikkredit('11'),
		'kreditDes' => $this->grafikkredit('12')
		
	);
	$this->session->set_userdata($data);

}

function jmltKNow(){
	$query=$this->db->query("SELECT count(tgl_kredit) FROM v_tgltransaksi where tgl_kredit like '%".date('Y-m-d')."%' GROUP BY kode_kredit");
	$jml=$query->num_rows();
	return $jml;

}

function jmltCNow(){
	$query=$this->db->query("SELECT count(cash_tgl) FROM v_tgltransaksi where cash_tgl like '%".date('Y-m-d')."%' GROUP BY kode_cash");
	$jml=$query->num_rows();
	return $jml;

}

}

?>