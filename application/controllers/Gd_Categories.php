<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gd_Categories extends CI_Controller {


	public function index()
	{	
		$id = "";	
		$m = $this->db->query("select * from gd_categories where id='$id'");
		$n = $m->row_array();

		$headerData = array(
			"pageTitle" => "Gd_Categories",
			"stylesheet" => array("gd_Categories.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("gd_Categories.js")
		);
		$viewData = array(
			"viewName" => "gd_Categories",
            "viewData" => array('n'=>$n),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function edtGd_Categories($id)
	{
		$m = $this->db->query("select * from gd_categories where id='$id'");
		$n = $m->row_array();
		$headerData = array(
			"pageTitle" => "Gd_Categories",
			"stylesheet" => array("gd_Categories.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("gd_Categories.js")
		);
		$viewData = array(
			"viewName" => "gd_Categories",
            "viewData" => array('n'=>$n),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function add_guiddata()
	{
		$data = array('cat_name' => $_POST['cat_name'],
		'paren_cat' => $_POST['paren_cat'] );
		$this->db->insert("gd_categories",$data);
	}

	public function edtt_guiddata()
	{
		$i = $_POST['id'];

		$data = array('cat_name' => $_POST['cat_name'],
		'paren_cat' => $_POST['paren_cat'] );
		$this->db->where("id",$i);
		$this->db->update("gd_categories",$data);

	}

	public function delete_cat($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("gd_categories");
	}
}
?>