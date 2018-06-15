<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadFile extends CI_Controller {

	
	public function index()
	{		
		if($this->session->userdata('email')=='' | $this->session->userdata('admin')==''){
			header('Location:'.base_url().'Adminlogin');
		}
		
		$headerData = array(
			"pageTitle" => "create file",
			"stylesheet" => array("add_Contact.css","home.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("uploadFile.js")
		);
		$viewData = array(
			"viewName" => "uploadFile",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function add_file()
	{


		$this->load->helper('date');
		date_default_timezone_set("UTC");
    	$date=gmdate("F j, Y");
		if (function_exists('date_default_timezone_set'))
		{
		  date_default_timezone_set('Asia/Kolkata');
		}

		date_default_timezone_set('Asia/Kolkata');
		$created_date=date("F j, Y H:i: a");
		$ee=$this->session->userdata('email');
		
		$data = array('file_type' => $_POST['file_type'] ,
		'file_name' => $_POST['file_name'] ,
		'createdBy'=>$ee,
		'createdOn'=>$created_date
	   );

		$this->db->insert("up_files",$data);
		$id = $this->db->insert_id();

		 $userImage=$id."_files.".pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
   
		$adduserimgg=array('file'=>$userImage);
		$this->db->where('id',$id);
		$this->db->update("up_files",$adduserimgg);
		$config["upload_path"]='html/images/files';
		$config["allowed_types"]='gif|png|jpg|jpeg';
		$config["file_name"]=$id."_files";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('file');
	}
	public function fetchfiledata($id)
	{
		$t = $this->db->query("select * from up_files where id='$id'");
		$p = $t->row_array();
		$this->load->view("update_files",$p);
	}

	public function edt_file()
	{
		$id = $_POST['id'];

		$data = array('file_type' => $_POST['file_type'] ,
		'file_name' => $_POST['file_name'] ,
	   );

		$this->db->where('id',$id);
		$this->db->update("up_files",$data);

		$userImage=$id."_files.".pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);

		if($_FILES['file']['name']!=""){
   
		$adduserimgg=array('file'=>$userImage);
		$this->db->where('id',$id);
		$this->db->update("up_files",$adduserimgg);
		$config["upload_path"]='html/images/files';
		$config["allowed_types"]='gif|png|jpg|jpeg';
		$config["file_name"]=$id."_files";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('file');
	  }
	}

	public function deletedata($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("up_files");
	}
}
