<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom_Fields extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Custom_Fields",
			"stylesheet" => array("custom_Fields.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("custom_Fields.js")
		);
		$viewData = array(
			"viewName" => "custom_Fields",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function add_cfdata()
	{
		$data = array('name' => $_POST['name'] ,
		'type' => $_POST['type']  );
		$this->db->insert("custom_fields",$data);
	}
}
?>