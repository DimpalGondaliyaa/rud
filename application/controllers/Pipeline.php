<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pipeline extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Pipeline",
			"stylesheet" => array("pipeline.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("pipeline.js")
		);
		$viewData = array(
			"viewName" => "pipeline",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>