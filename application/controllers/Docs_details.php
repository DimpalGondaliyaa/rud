<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docs_details extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Docs_details",
			"stylesheet" => array("docs.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("docs_details.js")
		);
		$viewData = array(
			"viewName" => "docs_details",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function get_docdata($i)
	{
		$t = $this->db->query("select * from docs where id='$i'");
		$tt = $t->row_array();

		$headerData = array(
			"pageTitle" => "Docs_details",
			"stylesheet" => array("docs.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("docs_details.js")
		);
		$viewData = array(
			"viewName" => "docs_details",
            "viewData" => array('tt'=>$tt),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function edt_doc_dataa()
	{

		$data = array(
		'doc_title' => $_POST['doc_title'] ,
		'doc_category' => $_POST['doc_category'] ,
		'doc_type' => $_POST['doc_type'] , 
		'all_file_type' => $_POST['all_file_type'] ,
		'all_states' => $_POST['all_states'] ,
		'share_with' => $_POST['share_with'] ,
		);

		$id = $_POST['id'];
		$this->db->where("id",$id);
		$this->db->update("docs",$data);
	}

	public function deletedoc($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("docs");
	}
}
?>