<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Availability_schedule extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Availability_schedule",
			"stylesheet" => array("availability_schedule.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("availability_schedule.js")
		);
		$viewData = array(
			"viewName" => "availability_schedule",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>