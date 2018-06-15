<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edt_Custom_Fields extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Edt_Custom_Fields",
			"stylesheet" => array("custom_Fields.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("edt_Custom_Fields.js")
		);
		$viewData = array(
			"viewName" => "edt_Custom_Fields",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function editcfdata($id)
	{
		$t = $this->db->query("select * from custom_fields where id='$id'");
		$u = $t->row_array();
		$headerData = array(
			"pageTitle" => "Edt_Custom_Fields",
			"stylesheet" => array("custom_Fields.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("edt_Custom_Fields.js")
		);
		$viewData = array(
			"viewName" => "edt_Custom_Fields",
            "viewData" => array('u'=>$u),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function edt_cfdata()
	{
		$id = $_POST['id'];
		$d = array('name' => $_POST['name'] ,
		'type' =>$_POST['type'] );

		$this->db->where("id",$id);
		$this->db->update("custom_fields",$d);
	}

}
?>