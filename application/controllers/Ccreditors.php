<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccreditors extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Creditors",
			"stylesheet" => array("ccreditors.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("ccreditors.js")
		);
		$viewData = array(
			"viewName" => "ccreditors",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>