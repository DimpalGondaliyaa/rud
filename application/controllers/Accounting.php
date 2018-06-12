<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounting extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Accounting",
			"stylesheet" => array("accounting.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("accounting.js")
		);
		$viewData = array(
			"viewName" => "accounting",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>