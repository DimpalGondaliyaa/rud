<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_new_report extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Create_new_report",
			"stylesheet" => array("create_new_report.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("create_new_report.js")
		);
		$viewData = array(
			"viewName" => "create_new_report",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>