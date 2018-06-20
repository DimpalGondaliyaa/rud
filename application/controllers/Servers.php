<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servers extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Servers",
			"stylesheet" => array("servers.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("servers.js")
		);
		$viewData = array(
			"viewName" => "servers",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>