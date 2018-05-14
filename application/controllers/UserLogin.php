<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLogin extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Login",
			"stylesheet" => array("admin_login.css")
		);
		$footerData = array(
			"jsFiles" => array("admin_login.js")
		);
		$viewData = array(
			"viewName" => "login",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function login()
	{
		$this->load->model("Admin_model");
		$data = $_POST['data'];
		$ress = $this->Admin_model->login_data($data);
		echo json_encode($ress);
	}

	public function admin_logout()
	{
		$this->session->unset_userdata('email');
        $this->session->sess_destroy();
    	$this->session->unset_userdata('userData');
		$this->session->unset_userdata('google_code');
		header("Location:".base_url()."Admin_Login");
	}
}
?>