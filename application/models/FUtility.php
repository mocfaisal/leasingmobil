<?php 

/**
* 
*/
class FUtility extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

function register(){

$data = array(
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password'),	
		'level' => $this->input->post('optlevel')
			);

if($this->db->insert('users',$data)){
$this->session->set_flashdata('error','Input Berhasil');
	
}
else{
	$this->session->set_flashdata('error','Input Gagal');
}



}


}

 ?>