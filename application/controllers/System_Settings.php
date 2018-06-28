<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System_Settings extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "System_Settings",
			"stylesheet" => array("system_Settings.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("system_Settings.js")
		);
		$viewData = array(
			"viewName" => "system_Settings",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>