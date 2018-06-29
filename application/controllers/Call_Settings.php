<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Call_Settings extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Call_Settings",
			"stylesheet" => array("call_Settings.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("call_Settings.js")
		);
		$viewData = array(
			"viewName" => "call_Settings",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>