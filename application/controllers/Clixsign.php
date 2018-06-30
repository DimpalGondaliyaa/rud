<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clixsign extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Clixsign",
			"stylesheet" => array("clixsign.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("clixsign.js")
		);
		$viewData = array(
			"viewName" => "clixsign",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>