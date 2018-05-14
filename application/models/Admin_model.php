<?php 
	class Admin_model extends CI_Model{
	
	
	public function login_data($data)
	{
		$email = $data['email'];
		$password = $data['password'];
		$sql = $this->db->query("SELECT * FROM userlist WHERE email='$email' and passwords ='$password'");
		if($sql->num_rows()==1)
		{
			$sql= array('status' => "ok",
			'message' => "login ok" );
			$this->session->set_userdata('email',$email);
		}
		else
		{
			$sql= array('status' => "no",
			'message' => "login fail"  );
		}
		return $sql;
	}

}
?>