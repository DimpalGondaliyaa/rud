<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debt_Reports extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Debt_Reports",
			"stylesheet" => array("debt_Reports.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("debt_Reports.js")
		);
		$viewData = array(
			"viewName" => "debt_Reports",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>