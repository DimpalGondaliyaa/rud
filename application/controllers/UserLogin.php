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
}
?>