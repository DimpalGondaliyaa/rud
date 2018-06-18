<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_E_marketing extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "E marketing",
			"stylesheet" => array("schedule_E_marketing.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("e_marketing.js")
		);
		$viewData = array(
			"viewName" => "schedule_E_marketing",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>