<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docs extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Docs",
			"stylesheet" => array("docs.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("docs.js")
		);
		$viewData = array(
			"viewName" => "docs",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>