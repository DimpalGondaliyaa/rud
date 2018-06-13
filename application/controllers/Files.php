<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Files",
			"stylesheet" => array("files.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("files.js")
		);
		$viewData = array(
			"viewName" => "files",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>