<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Categories",
			"stylesheet" => array("categories.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("categories.js")
		);
		$viewData = array(
			"viewName" => "categories",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>