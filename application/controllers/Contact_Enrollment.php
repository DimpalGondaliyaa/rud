<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Enrollment extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Contact_Enrollment",
			"stylesheet" => array("contact_Enrollment.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("contact_Enrollment.js")
		);
		$viewData = array(
			"viewName" => "contact_Enrollment",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>