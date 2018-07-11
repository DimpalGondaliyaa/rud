<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_Types extends CI_Controller {


	public function index()
	{		
		$id = "";

$t = $this->db->query("select * from event_types where id='$id'");
$yy = $t->row_array();
		$headerData = array(
			"pageTitle" => "Event_Types",
			"stylesheet" => array("event_Types.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("event_Types.js")
		);
		$viewData = array(
			"viewName" => "event_Types",
            "viewData" => array('yy'=>$yy),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function edit_eventt($id)
	{

$t = $this->db->query("select * from event_types where id='$id'");
$yy = $t->row_array();

		$headerData = array(
			"pageTitle" => "Event_Types",
			"stylesheet" => array("event_Types.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("event_Types.js")
		);
		$viewData = array(
			"viewName" => "event_Types",
            "viewData" => array('yy'=>$yy),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function add_evnt()
	{
		$d = array('file_type' => $_POST['file_type'] ,
		'title' => $_POST['title'] ,
		'length' => $_POST['length'] ,
		'sharewith' => $_POST['sharewith'] , 
		'status' => $_POST['status'] ,);

		$this->db->insert("event_types",$d);
	}

	public function edit_evnt()
	{
		$i = $_POST['id'];
		$d = array('file_type' => $_POST['file_type'] ,
		'title' => $_POST['title'] ,
		'length' => $_POST['length'] ,
		'sharewith' => $_POST['sharewith'] , 
		'status' => $_POST['status'] ,);

		$this->db->where("id",$i);
		$this->db->update("event_types",$d);
	}

	public function dlt_event($i)
	{
		$this->db->where('id',$i);
		$this->db->delete("event_types");
	}
}
?>