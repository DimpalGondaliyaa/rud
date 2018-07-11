<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLogin extends CI_Controller {


	public function index()
	{		
	
		$headerData = array(
			"pageTitle" => "UserLogin",
			"stylesheet" => array("userLogin.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("userLogin.js")
		);
		$viewData = array(
			"viewName" => "userLogin",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function userloginnn()
	{
		$this->load->model("User_model");
		$data = $_POST['data'];
		$ress = $this->User_model->userlogin_data($data);
		echo json_encode($ress);
	}

	function getEmail(){
	    $this->db->where('u_email', $this->input->post('ref_code'));
	    $query = $this->db->get('users');
	    if($query->num_rows() >= 1){
	       echo 'Email Already Exist';
	    }
	}


	public function adduserdata()
	{
		$data = array('f_name' => $_POST['f_name'] ,
		'l_name' => $_POST['l_name'] ,
		'u_email' => $_POST['u_email'] ,
		'passwords' => $_POST['passwords'] ,
		'gender' => $_POST['gender'] ,
		'phone' => $_POST['phone'] ,
		'mobile' => $_POST['mobile'] , 
		'income' => $_POST['income'] ,
		'dob' => $_POST['dob'] ,
		'address' => $_POST['address'] ,
		'city' => $_POST['city'] ,
		'zipcode' => $_POST['zipcode'] ,
		'state' => $_POST['state'] ,
		'timeofresidency' => $_POST['timeofresidency']);

		$this->db->insert("users",$data);
	}

	public function user_logout()
	{
		$this->session->unset_userdata('email');
        $this->session->sess_destroy();
    	$this->session->unset_userdata('userData');
		$this->session->unset_userdata('google_code');
		header("Location:".base_url()."UserLogin");
	}
}
?>