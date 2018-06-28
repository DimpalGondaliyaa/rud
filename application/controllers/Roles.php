<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Roles",
			"stylesheet" => array("roles.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("roles.js")
		);
		$viewData = array(
			"viewName" => "roles",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>