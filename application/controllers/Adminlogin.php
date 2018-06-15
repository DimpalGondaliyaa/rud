<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {


	public function index()
	{	
		if($this->session->userdata('email')!='' | $this->session->userdata('admin')!=''){
			header('Location:'.base_url().'Home');
		}
			
		$headerData = array(
			"pageTitle" => "Login",
			"stylesheet" => array("admin_login.css","style.css")
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
		$this->load->view('admintemplate',$viewData);
	}

	public function login()
	{
		$this->load->model("Admin_model");
		$data = $_POST['data'];
		$ress = $this->Admin_model->login_data($data);
		echo json_encode($ress);
	}

	public function user_logout()
	{
		$this->session->unset_userdata('email');
        $this->session->sess_destroy();
    	$this->session->unset_userdata('userData');
		$this->session->unset_userdata('google_code');
		header("Location:".base_url()."Adminlogin");
	}
}
?>