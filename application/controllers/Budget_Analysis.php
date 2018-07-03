<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budget_Analysis extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Budget_Analysis",
			"stylesheet" => array("budget_Analysis.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("budget_Analysis.js")
		);
		$viewData = array(
			"viewName" => "budget_Analysis",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>