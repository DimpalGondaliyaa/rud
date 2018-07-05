<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Ccreditors extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Add creditors",
			"stylesheet" => array("add_Ccreditors.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("add_Ccreditors.js")
		);
		$viewData = array(
			"viewName" => "add_Ccreditors",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>