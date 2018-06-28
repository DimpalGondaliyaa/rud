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

	public function edituserdata($id)
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
            "viewData" => array("id"=>$id),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function Suspend($id)
	{
		$t = $this->db->query("select * from add_user where id='$id'");
		$c = $t->row_array();
		if($c['Suspend']=="0")
		{
			$this->db->query("UPDATE add_user SET Suspend = '1'  WHERE id='$id'");
		}
		else
		{
			$this->db->query("UPDATE add_user SET Suspend = '0'  WHERE id='$id'");
		}
	}

	public function deleteuserdata($id)
	{
		$this->db->where('id',$id);
		$this->db->delete("add_user");
	}

	public function edt_user_dataa()
	{
		$id = $_POST['id'];
		$data = array('username' => $_POST['username'] ,
		'password' => $_POST['password'] ,
		'confirm' => $_POST['confirm'] ,
		'role' => $_POST['role'] ,
		'report_to' => $_POST['report_to'] ,
		'f_name' => $_POST['f_name'] ,
		'l_name' => $_POST['l_name'] ,
		'company' => $_POST['company'] ,
		'email' => $_POST['email'] ,
		'payee' => $_POST['payee'] ,
		'out_mail_server' => $_POST['out_mail_server'] , 
	    'port' => $_POST['port'] , 
		'type' => $_POST['type'] ,
		't_email' => $_POST['t_email'] , 
		'Userfield1' => $_POST['Userfield1'] , 
		'Userfield2' => $_POST['Userfield2'] , 
		'Userfield3' => $_POST['Userfield3'] , 
		'Userfield4' => $_POST['Userfield4'] , 
		'Userfield5' => $_POST['Userfield5'] , 
		'Userfield6' => $_POST['Userfield6'] , 
		);
		$this->db->where("id",$id);
		$this->db->update("add_user",$data);
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