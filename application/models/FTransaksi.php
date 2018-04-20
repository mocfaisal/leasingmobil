<?php 

/**
* 
*/
class FTransaksi extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$kondisitr='';
	}

	function createKodeCash(){
		$tahun_sekarang = date('Y');
		$bulan = date('m');
		$query = $this->db->query(
			"SELECT IFNULL(MAX(SUBSTRING(kode_cash,8,3)),0) + 1 AS no_urut FROM beli_cash
			WHERE SUBSTRING(kode_cash,2,4)='".$tahun_sekarang."'");

		$data = $query->row_array();
		$no_urut = sprintf("%'.03d",$data['no_urut']);
		$kode_cash = "C".$tahun_sekarang.$bulan.$no_urut;
		return $kode_cash;
	}

	function createKodeKredit(){
		$tahun_sekarang = date('Y');
		$bulan = date('m');
		$query = $this->db->query(
			"SELECT IFNULL(MAX(SUBSTRING(kode_kredit,8,3)),0) + 1 AS no_urut FROM kredit
			WHERE SUBSTRING(kode_kredit,2,4)='".$tahun_sekarang."'");

		$data = $query->row_array();
		$no_urut = sprintf("%'.03d",$data['no_urut']);
		$kode_kredit = "K".$tahun_sekarang.$bulan.$no_urut;
		return $kode_kredit;
	}

	function createKodePaketKredit(){
		$tahun_sekarang = date('Y');
		$bulan = date('m');
		$query = $this->db->query(
			"SELECT IFNULL(MAX(SUBSTRING(kode_paket,9,3)),0) + 1 AS no_urut FROM paket_kredit
			WHERE SUBSTRING(kode_paket,3,4)='".$tahun_sekarang."'");

		$data = $query->row_array();
		$no_urut = sprintf("%'.03d",$data['no_urut']);
		$kode_paket = "PK".$tahun_sekarang.$bulan.$no_urut;
		return $kode_paket;
	}

function createKodeCicilan(){
		$tahun_sekarang = date('Y');
		$bulan = date('m');
		$query = $this->db->query(
			"SELECT IFNULL(MAX(SUBSTRING(kode_cicilan,8,3)),0) + 1 AS no_urut FROM bayar_cicilan
			WHERE SUBSTRING(kode_cicilan,2,4)='".$tahun_sekarang."'");

		$data = $query->row_array();
		$no_urut = sprintf("%'.03d",$data['no_urut']);
		$kode_cicilan = "A".$tahun_sekarang.$bulan.$no_urut;
		return $kode_cicilan;
	}

	function insertc(){
		
		$data = array(
			'kode_cash' => $this->input->post('kode_cash'),
			'ktp_pembeli' => $this->input->post('ktp_pembeli'),	
			'kode_mobil' => $this->input->post('kode_mobil'),
			'cash_tgl' => $this->input->post('tgl_byr'),
			'cash_bayar' => str_replace(',','',$this->input->post('bayar'))
			
		);
		if($this->db->insert('beli_cash',$data)){
			//$this->session->set_flashdata('error','Input Berhasil');

		}
		else{
			//$this->session->set_flashdata('error','Input Gagal');
		}

	}

	function insertk(){
		$data2 = array(
			'kode_kredit' 	  	 => $this->input->post('kode_kredit'),
			'ktp_pembeli' 		 => $this->input->post('ktp_pembeli'),	
			'kode_mobil' 		 => $this->input->post('kode_mobil'),
			'kode_paket' 		 => $this->createKodePaketKredit(),
			'tgl_kredit' 		 => $this->input->post('tgl_kredit'),
			'fotokopi_ktp' 		 => $this->input->post('fotokopi_ktp'),
			'fotokopi_kk' 		 => $this->input->post('fotokopi_kk'),
			'fotokopi_slip_gaji' => $this->input->post('fotokopi_slip_gaji')
		);
		$data1 = array(
			'kode_paket' 		=> $this->createKodePaketKredit(),
			'harga_paket' 		=> str_replace(',','',$this->input->post('harga_mobil')),
			'uang_muka' 		=> $this->input->post('dp'),
			'paket_jml_cicilan' => $this->input->post('jumlah_cicilan'),
			'bunga' 			=> str_replace('%','',$this->input->post('bunga')),
			'nilai_cicilan' 	=> str_replace(',','',$this->input->post('bayar'))
		);
		if($this->db->insert('kredit',$data2) && $this->db->insert('paket_kredit',$data1)){
			//$this->session->set_flashdata('error','Input Berhasil');
		}
		else{
			//$this->session->set_flashdata('error','Input Gagal');
		}
	}


	function getData(){
		$query=$this->db->query("SELECT * FROM beli_cash");
		return $query->result_array();

	}

	function delete($id){

		$this->db->query("DELETE FROM beli_cash WHERE kode_cash='".$id."'");

	}

	function update(){
		if ($kondisitr == 'Cash'){
			$data = array(
				'kode_cash' => $this->input->post('kode_cash'),
				'ktp_pembeli' => $this->input->post('ktp_pembeli'),	
				'kode_mobil' => $this->input->post('kode_mobil'),
				'cash_tgl' => $this->input->post('tgl_byr'),
				'cash_bayar' => $this->input->post('bayar')
			);

			$this->db->where('kode_cash', $this->input->post('kode_cash'));
			$this->db->update('beli_cash', $data);
		}

		else if ($kondisitr == 'Kredit'){
			$data = array(
				'kode_kredit' => $this->input->post('kode_kredit'),
				'ktp_pembeli' => $this->input->post('ktp_pembeli'),	
				'kode_mobil' => $this->input->post('kode_mobil'),
				'kode_paket' => $this->input->post('kode_paket'),
				'tgl_kredit' => $this->input->post('tgl_kredit'),
				'fotokopi_ktp' => $this->input->post('fotokopi_ktp'),
				'fotokopi_kk' => $this->input->post('fotokopi_kk'),
				'fotokopi_slip_gaji' => $this->input->post('fotokopi_slip_gaji')
			);
			$this->db->where('kode_kredit', $this->input->post('kode_kredit'));
			$this->db->update('kredit', $data);
		}
		
	}
	function jmldataCash(){
		$query=$this->db->query("SELECT * FROM beli_cash");
		$jml = $query->num_rows();
		return $jml;
	}

	function jmldataKredit(){
		$query=$this->db->query("SELECT * FROM kredit");
		$jml = $query->num_rows();
		return $jml;
	}

}

?>