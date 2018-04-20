<?php 

/**
* 
*/
class FLogin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	function cek(){
		$query = $this->db->query("SELECT * FROM users WHERE username='".$this->input->post('username')."'
			AND password='".$this->input->post('password')."'
			");
		$jml = $query->num_rows();
		if($jml==1){
			$row=$query->row_array();
			$data=array(
				'username'=>$row['username'],
				'level'=>$row['level'],
				'login'=>true
				);
			$this->session->set_userdata($data);
			return true;
		}
		else
		{
			return false;
		}
	}

}

?>