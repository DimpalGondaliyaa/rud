<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_User extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Add_User",
			"stylesheet" => array("add_User.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("add_User.js")
		);
		$viewData = array(
			"viewName" => "add_User",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function add_userdata()
	{
		$data = array('username' => $_POST['username'] ,
		'password' => $_POST['password'] ,
		'confirm' => $_POST['confirm'] ,
		'company' => $_POST['company'] ,
		 );

		$this->db->insert("add_user",$data);
	}
}
?>