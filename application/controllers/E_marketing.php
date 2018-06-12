<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_marketing extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "E marketing",
			"stylesheet" => array("e_marketing.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("e_marketing.js")
		);
		$viewData = array(
			"viewName" => "e_marketing",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>