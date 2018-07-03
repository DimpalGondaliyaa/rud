<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creditors extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Creditors",
			"stylesheet" => array("creditors.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("creditors.js")
		);
		$viewData = array(
			"viewName" => "creditors",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>