<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Summons extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Summons",
			"stylesheet" => array("summons.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("summons.js")
		);
		$viewData = array(
			"viewName" => "summons",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>