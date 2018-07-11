<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merge_Creditors extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Merge_Creditors",
			"stylesheet" => array("merge_Creditors.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("merge_Creditors.js")
		);
		$viewData = array(
			"viewName" => "merge_Creditors",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>
