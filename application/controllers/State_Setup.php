<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State_Setup extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "State_Setup",
			"stylesheet" => array("state_Setup.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("state_Setup.js")
		);
		$viewData = array(
			"viewName" => "state_Setup",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>