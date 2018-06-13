<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditContact extends CI_Controller {


	public function index()
	{		
		if($this->session->userdata('email')=='' | $this->session->userdata('admin')==''){
			header('Location:'.base_url().'Adminlogin');
		}

		$this->load->model('User_model');
		$data=$this->User_model->getDetails();

		$headerData = array(
			"pageTitle" => "Edit Contact",
			"stylesheet" => array("home.css","editContact.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js","editContact.js")
		);
		$viewData = array(
			"viewName" => "editContact",
            "viewData" => array('data'=>$data),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>