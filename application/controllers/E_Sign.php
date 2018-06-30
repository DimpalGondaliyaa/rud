<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_Sign extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "E_Sign",
			"stylesheet" => array("e_Sign.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("e_Sign.js")
		);
		$viewData = array(
			"viewName" => "e_Sign",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>