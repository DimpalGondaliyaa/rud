<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssignUser extends CI_Controller {

	
	public function index()
	{		
		if($this->session->userdata('email')=='' | $this->session->userdata('admin')==''){
			header('Location:'.base_url().'Adminlogin');
		}
		
		$u=$this->db->query("SELECT * FROM contactdetails ORDER BY c_id DESC");
		$user=$u->result_array();

		$a=$this->db->query("SELECT * FROM users ORDER BY u_id DESC");
		$assigner=$a->result_array();

		$au=$this->db->query("SELECT * FROM assigned_user WHERE status='0'");
		$asignUser=$au->result_array();

		$headerData = array(
			"pageTitle" => "AssignUser",
			"stylesheet" => array("add_Contact.css","assignUser.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("assignUser.js")
		);
		$viewData = array(
			"viewName" => "AssignUser",
            "viewData" => array('user'=>$user,'assigner'=>$assigner,'asignUser'=>$asignUser),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}




	public function assignUserData()
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

		$data = array('user_email' => $_POST['user_email'],
					'asgn_email' => $_POST['asgn_email'],
					'assignedOn' => $c_date
		);

		$this->db->insert("assigned_user",$data);
	}

	public function deleteAssignRecord($id){
		$this->db->where('asgn_id',$id);
		$this->db->delete("assigned_user");
	}
}
