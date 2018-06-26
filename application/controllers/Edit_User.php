<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_User extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Edit_User",
			"stylesheet" => array("edit_User.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("edit_User.js")
		);
		$viewData = array(
			"viewName" => "edit_User",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

/*	public function add_userdata()
	{
		$data = array('username' => $_POST['username'] ,
		'password' => $_POST['password'] ,
		'confirm' => $_POST['confirm'] ,
		'company' => $_POST['company'] ,
		 );

		$this->db->insert("add_user",$data);
	}*/
}
?>