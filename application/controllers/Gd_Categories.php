<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gd_Categories extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Gd_Categories",
			"stylesheet" => array("gd_Categories.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("gd_Categories.js")
		);
		$viewData = array(
			"viewName" => "gd_Categories",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function add_guiddata()
	{
		$data = array('cat_name' => $_POST['cat_name'],
		'paren_cat' => $_POST['paren_cat'] );
		$this->db->insert("gd_categories",$data);
	}
}
?>