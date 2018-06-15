<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workflow extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Workflow",
			"stylesheet" => array("workflow.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("workflow.js")
		);
		$viewData = array(
			"viewName" => "workflow",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>