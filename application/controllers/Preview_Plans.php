<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preview_Plans extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Preview_Plans",
			"stylesheet" => array("preview_Plans.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("preview_Plans.js")
		);
		$viewData = array(
			"viewName" => "preview_Plans",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>