<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Settings",
			"stylesheet" => array("settings.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("settings.js")
		);
		$viewData = array(
			"viewName" => "settings",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>