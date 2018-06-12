<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enrollments extends CI_Controller {


	public function index()
	{		
/*		if($this->session->userdata('email')=='' | $this->session->userdata('admin')==''){
			header('Location:'.base_url().'Adminlogin');
		}
*/
		/*$this->load->model('User_model');*/
/*		$data=$this->User_model->getDetails();
*/		$headerData = array(
			"pageTitle" => "Enrollments",
			"stylesheet" => array()
		);
		$footerData = array(
			"jsFiles" => array("home.js")
		);
		$viewData = array(
			"viewName" => "enrollments",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}

?>