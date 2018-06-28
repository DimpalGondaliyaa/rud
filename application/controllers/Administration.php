<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Administration",
			"stylesheet" => array("administration.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("administration.js")
		);
		$viewData = array(
			"viewName" => "administration",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>