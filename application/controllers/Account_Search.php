<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_Search extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Account Search",
			"stylesheet" => array("account_Search.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("account_Search.js")
		);
		$viewData = array(
			"viewName" => "account_Search",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>