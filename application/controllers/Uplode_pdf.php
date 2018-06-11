<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uplode_pdf extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Uplode_pdf",
			"stylesheet" => array("uplode_pdf.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("uplode_pdf.js")
		);
		$viewData = array(
			"viewName" => "uplode_pdf",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function add_pdffile()
	{
		$data = array(
		'doc_title' => $_POST['doc_title'] ,
		'doc_category' => $_POST['doc_category'] ,
		'doc_type' => $_POST['doc_type'] , 
		'all_file_type' => $_POST['all_file_type'] ,
		'all_states' => $_POST['all_states'] ,
		'share_with' => $_POST['share_with'] ,
		);
		$this->db->insert("docs",$data);
		$id = $this->db->insert_id();

		$userImage=$id."_files.".pathinfo($_FILES['pfd_file']['name'],PATHINFO_EXTENSION);
   
		$adduserimgg=array('pfd_file'=>$userImage);
		$this->db->where('id',$id);
		$this->db->update("docs",$adduserimgg);
		$config["upload_path"]='html/images/doc';
		$config["allowed_types"]='gif|png|jpg|jpeg|pdf';
		$config["file_name"]=$id."_files";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('pfd_file');
	}
}
?>