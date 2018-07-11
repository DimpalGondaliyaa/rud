<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webhooks extends CI_Controller {


	public function index()
	{	
		$id = "";
			$f = $this->db->query("select * from webhooks where id = '$id'");
        $w = $f->row_array();

		$headerData = array(
			"pageTitle" => "Webhooks",
			"stylesheet" => array("webhooks.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("webhooks.js")
		);
		$viewData = array(
			"viewName" => "webhooks",
            "viewData" => array('w'=>$w),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function add_Webhooks()
	{
		$d = array('title' => $_POST['title'] ,
		'url' => $_POST['url'] ,
		'port' => $_POST['port'] ,
		'method' => $_POST['method'] ,
		'username' => $_POST['username'] , 
		'password' => $_POST['password'] ,
		'type' => $_POST['type']);

		$this->db->insert("webhooks",$d);
	}

	public function edtt_Webhooks()
	{
		$i = $_POST['id'];
		$d = array('title' => $_POST['title'] ,
		'url' => $_POST['url'] ,
		'port' => $_POST['port'] ,
		'method' => $_POST['method'] ,
		'username' => $_POST['username'] , 
		'password' => $_POST['password'] ,
		'type' => $_POST['type']);

		$this->db->where("id",$i);
		$this->db->update("webhooks",$d);
	}

	public function edt_Webhooks($id)
	{
		$f = $this->db->query("select * from webhooks where id = '$id'");
        $w = $f->row_array();

        $headerData = array(
			"pageTitle" => "Webhooks",
			"stylesheet" => array("webhooks.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("webhooks.js")
		);
		$viewData = array(
			"viewName" => "webhooks",
            "viewData" => array('w'=>$w),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function dlt_Webhooks($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("webhooks");
	}
}
?>