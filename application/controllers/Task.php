<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Task",
			"stylesheet" => array("task.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("task.js")
		);
		$viewData = array(
			"viewName" => "task",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>