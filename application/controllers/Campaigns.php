<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaigns extends CI_Controller {


	public function index()
	{	$id="";	
		$t = $this->db->query("select * from Campaigns where id='$id'");
		$tt = $t->row_array();

		$headerData = array(
			"pageTitle" => "Campaigns",
			"stylesheet" => array("campaigns.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("campaigns.js")
		);
		$viewData = array(
			"viewName" => "campaigns",
            "viewData" => array('tt'=>$tt),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function edtCampaigns($id)
	{
		$t = $this->db->query("select * from Campaigns where id='$id'");
		$tt = $t->row_array();

			$headerData = array(
			"pageTitle" => "Campaigns",
			"stylesheet" => array("campaigns.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("campaigns.js")
		);
		$viewData = array(
			"viewName" => "campaigns",
            "viewData" => array('tt'=>$tt),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function add_campdata()
	{
		$dd = date("Y-m-d");
		$d = array('title' => $_POST['title'] ,
		'start_date' => $_POST['start_date'] ,
		'end_date' => $_POST['end_date'] ,
		'source' => $_POST['source'] ,
		'media_type' => $_POST['media_type'] ,
		'priority' => $_POST['priority'] , 
		'created_by' => $_POST['created_by'],
		'created_at' => $dd,
		'Campaign_Cost' => $_POST['Campaign_Cost'] ,
		'Leads_Purchased' => $_POST['Leads_Purchased'] ,
		'active' => $_POST['active'] ,);

		$this->db->insert("Campaigns",$d);
	}

	public function edt_campdata()
	{
		$id = $_POST['id'];
		$dd = date("Y-m-d");
		$d = array('title' => $_POST['title'] ,
		'start_date' => $_POST['start_date'] ,
		'end_date' => $_POST['end_date'] ,
		'source' => $_POST['source'] ,
		'media_type' => $_POST['media_type'] ,
		'priority' => $_POST['priority'] , 
		'created_by' => $_POST['created_by'],
		'created_at' => $dd,
		'Campaign_Cost' => $_POST['Campaign_Cost'] ,
		'Leads_Purchased' => $_POST['Leads_Purchased'] ,
		'active' => $_POST['active'] );

		$this->db->where("id",$id);
		$this->db->update("Campaigns",$d);
	}

	public function dlt_campdata($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("Campaigns");

	}
}
?>