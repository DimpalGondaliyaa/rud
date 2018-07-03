<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_content extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Create_content",
			"stylesheet" => array("create_content.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("create_content.js")
		);
		$viewData = array(
			"viewName" => "create_content",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function add_contentdata()
	{
		$data = array('title' => $_POST['title'] ,
		'feature_page' => $_POST['feature_page'] ,
		'category' => $_POST['category'] ,
		'description' => $_POST['description'] ,
		'share_with' => implode(',',  $_POST['share_with'] ) );

		$this->db->insert("content",$data);
	}
}
?>