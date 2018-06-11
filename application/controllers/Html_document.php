<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Html_document extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Html_document",
			"stylesheet" => array("html_document.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("html_document.js")
		);
		$viewData = array(
			"viewName" => "html_document",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}

?>