<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateCompany extends CI_Controller {

	
	public function index()
	{		
		if($this->session->userdata('email')=='' | $this->session->userdata('admin')==''){
			header('Location:'.base_url().'Adminlogin');
		}
		
		$c=$this->db->query("SELECT * FROM companies ORDER BY c_id DESC");
		$cmpny=$c->result_array();


		$headerData = array(
			"pageTitle" => "Create Company",
			"stylesheet" => array("createCompany.css","home.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("create_company.js")
		);
		$viewData = array(
			"viewName" => "createCompany",
            "viewData" => array('company'=>$cmpny),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function add_company()
	{
		$this->load->helper('date');
		date_default_timezone_set("UTC");
    	$date=gmdate("F j, Y");
		if (function_exists('date_default_timezone_set'))
		{
		  date_default_timezone_set('Asia/Kolkata');
		}

		date_default_timezone_set('Asia/Kolkata');
		/*$currentDate = date('Y-M-D H:i:s',time());*/
		$currentDate =time();

		$datestring = '%Y-%m-%d - %h:%i %a';
		$time = time();
		$better_date= mdate($datestring, $time);
			$c_date=date("Y-m-d H:i:a");


		$current_Date=date('y-m-d',time());
		$time= date("h:i:a");

		$data = array(
		'c_name' => $_POST['c_name'] ,
		'c_status' => $_POST['c_status'] ,
		'createdOn' => $c_date);

		$this->db->insert("companies",$data);
	}


	public function fetchCompany($id)
	{
		$t = $this->db->query("select * from companies where c_id='$id'");
		$y = $t->row_array();
		 $this->load->view("editCompany",$y);
	}

	public function editCompanyData()
	{
		$this->load->helper('date');
		date_default_timezone_set("UTC");
    	$date=gmdate("F j, Y");
		if (function_exists('date_default_timezone_set'))
		{
		  date_default_timezone_set('Asia/Kolkata');
		}

		date_default_timezone_set('Asia/Kolkata');
		/*$currentDate = date('Y-M-D H:i:s',time());*/
		$currentDate =time();

		$datestring = '%Y-%m-%d - %h:%i %a';
		$time = time();
		$better_date= mdate($datestring, $time);
		$c_date=date("Y-m-d H:i:s");

		$current_Date=date('y-m-d',time());
		$time= date("h:i:a");

		$data = array('c_name' => $_POST['c_name'] ,
			'c_status' => $_POST['c_status'] ,
			'createdOn' => $c_date);

		$id = $_POST['c_id'];
		$this->db->where("c_id",$id);
		$this->db->update("companies",$data);
	}

	public function deletCompanyData($id)
	{
		$this->db->where("c_id",$id);
		$this->db->delete("companies");
	}

}
