<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_Trigger extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Email_Trigger",
			"stylesheet" => array("email_Trigger.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("email_Trigger.js")
		);
		$viewData = array(
			"viewName" => "email_Trigger",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>