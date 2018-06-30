<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usage extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Usage",
			"stylesheet" => array("usage.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("usage.js")
		);
		$viewData = array(
			"viewName" => "usage",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>