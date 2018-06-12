<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Report",
			"stylesheet" => array("report.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("report.js")
		);
		$viewData = array(
			"viewName" => "report",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>