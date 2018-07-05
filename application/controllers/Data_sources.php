<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_sources extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Data_sources",
			"stylesheet" => array("data_sources.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("data_sources.js")
		);
		$viewData = array(
			"viewName" => "data_sources",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>