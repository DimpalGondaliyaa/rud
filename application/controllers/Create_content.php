<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_content extends CI_Controller {


	public function index()
	{		
		$id = "";
		$t = $this->db->query("select * from content where id='$id'");
		$c = $t->row_array();

		$headerData = array(
			"pageTitle" => "Create_content",
			"stylesheet" => array("create_content.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("create_content.js")
		);
		$viewData = array(
			"viewName" => "create_content",
            "viewData" => array('c'=>$c),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function edit_content($id)
	{
		$t = $this->db->query("select * from content where id='$id'");
		$c = $t->row_array();


		$headerData = array(
			"pageTitle" => "Create_content",
			"stylesheet" => array("create_content.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("create_content.js")
		);
		$viewData = array(
			"viewName" => "create_content",
            "viewData" => array('c'=>$c),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function edt_contentdata()
	{
		$i = $_POST['id'];
		$data = array('title' => $_POST['title'] ,
		'feature_page' => $_POST['feature_page'] ,
		'category' => $_POST['category'] ,
		'description' => $_POST['description'] ,
		'share_with' => implode(',',  $_POST['share_with'] ) );

		$this->db->where("id",$i);
		$this->db->update("content",$data);
	}

	public function delete_contentdata($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("content");
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