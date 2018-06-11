<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guidelines extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Guidelines",
			"stylesheet" => array('guidelines.css',"style.css")
		);
		$footerData = array(
			"jsFiles" => array("guidelines.js")
		);
		$viewData = array(
			"viewName" => "guidelines",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>