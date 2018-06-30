
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Companies extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Companies",
			"stylesheet" => array("companies.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("companies.js")
		);
		$viewData = array(
			"viewName" => "companies",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>