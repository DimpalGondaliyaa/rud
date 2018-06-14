<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_marketing_details extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "E marketing",
			"stylesheet" => array("e_marketing_details.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("e_marketing_details.js")
		);
		$viewData = array(
			"viewName" => "e_marketing_details",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>