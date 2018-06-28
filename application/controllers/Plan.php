<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Plan",
			"stylesheet" => array("plan.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("plan.js")
		);
		$viewData = array(
			"viewName" => "plan",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>