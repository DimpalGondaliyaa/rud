<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_list extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "New_list",
			"stylesheet" => array("new_list.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("new_list.js")
		);
		$viewData = array(
			"viewName" => "new_list",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>