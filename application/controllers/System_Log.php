<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System_Log extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "System_Log",
			"stylesheet" => array("system_Log.css","style.css",'roles.css')
		);
		$footerData = array(
			"jsFiles" => array("system_Log.js")
		);
		$viewData = array(
			"viewName" => "system_Log",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>