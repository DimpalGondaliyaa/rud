<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document_type extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Document_type",
			"stylesheet" => array("document_type.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("document_type.js")
		);
		$viewData = array(
			"viewName" => "document_type",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>