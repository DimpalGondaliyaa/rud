<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Summaries extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Summaries",
			"stylesheet" => array("summaries.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("summaries.js")
		);
		$viewData = array(
			"viewName" => "summaries",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>