<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistics extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Statistics",
			"stylesheet" => array("statistics.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("statistics.js")
		);
		$viewData = array(
			"viewName" => "statistics",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>