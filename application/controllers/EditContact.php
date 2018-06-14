<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditContact extends CI_Controller {


	public function index()
	{		
		if($this->session->userdata('email')=='' | $this->session->userdata('admin')==''){
			header('Location:'.base_url().'Adminlogin');
		}

		$this->load->model('User_model');
		$data=$this->User_model->getDetails();
		$id='';
		$q=$this->db->query("SELECT * FROM contactdetails WHERE c_id='".$id."'");
		$get=$q->row_array();

		$headerData = array(
			"pageTitle" => "Edit Contact",
			"stylesheet" => array("home.css","editContact.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js","editContact.js")
		);
		$viewData = array(
			"viewName" => "editContact",
            "viewData" => array('data'=>$data,'get'=>$get),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function editData($id){
				if($this->session->userdata('email')=='' | $this->session->userdata('admin')==''){
			header('Location:'.base_url().'Adminlogin');
		}

		$q=$this->db->query("SELECT * FROM contactdetails WHERE c_id='".$id."'");
		$get=$q->row_array();

		$headerData = array(
			"pageTitle" => "Edit Contact",
			"stylesheet" => array("home.css","editContact.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js","editContact.js")
		);
		$viewData = array(
			"viewName" => "editContact",
            "viewData" => array('get'=>$get),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>