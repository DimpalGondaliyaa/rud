<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_Event extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Schedule_Event",
			"stylesheet" => array("schedule_Event.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("schedule_Event.js")
		);
		$viewData = array(
			"viewName" => "schedule_Event",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>