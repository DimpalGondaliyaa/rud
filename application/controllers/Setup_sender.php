<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup_sender extends CI_Controller {


	public function index()
	{		
		$id = "";
		$t = $this->db->query("select * from sender_setup where id='$id'");
		$tt = $t->row_array();

		$headerData = array(
			"pageTitle" => "Setup_sender",
			"stylesheet" => array("setup_sender.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("setup_sender.js")
		);
		$viewData = array(
			"viewName" => "setup_sender",
            "viewData" => array('tt'=>$tt),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function edtsender_data($id)
	{
		$t = $this->db->query("select * from sender_setup where id='$id'");
		$tt = $t->row_array();
		$headerData = array(
			"pageTitle" => "Setup_sender",
			"stylesheet" => array("setup_sender.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("setup_sender.js")
		);
		$viewData = array(
			"viewName" => "setup_sender",
            "viewData" => array("tt"=>$tt),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function addsetup_sender()
	{
		$data = array('Sender_name' => $_POST['Sender_name'],
		'email' =>$_POST['email'],
		'r_address' => $_POST['r_address'],
		'b_address' => $_POST['b_address'] );

		$this->db->insert("sender_setup",$data);
	}

	public function edtsetup_sender()
	{
		$id = $_POST['id'];
		$data = array('Sender_name' => $_POST['Sender_name'],
		'email' =>$_POST['email'],
		'r_address' => $_POST['r_address'],
		'b_address' => $_POST['b_address'] );

		$this->db->where("id",$id);
		$this->db->update("sender_setup",$data);
	}

	public function delete_sender($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("sender_setup");
	}
}
?>