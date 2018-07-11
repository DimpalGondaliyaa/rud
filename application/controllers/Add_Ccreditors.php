<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Ccreditors extends CI_Controller {


	public function index()
	{		
		$id = "";
$t = $this->db->query("select * from Ccreditors where id='$id'");
$ttt = $t->row_array();


		$headerData = array(
			"pageTitle" => "Add creditors",
			"stylesheet" => array("add_Ccreditors.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("add_Ccreditors.js")
		);
		$viewData = array(
			"viewName" => "add_Ccreditors",
            "viewData" => array('ttt'=>$ttt),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function edt_credit($id)
	{
$t = $this->db->query("select * from Ccreditors where id='$id'");
$ttt = $t->row_array();
		$headerData = array(
			"pageTitle" => "Add creditors",
			"stylesheet" => array("add_Ccreditors.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("add_Ccreditors.js")
		);
		$viewData = array(
			"viewName" => "add_Ccreditors",
            "viewData" => array('ttt'=>$ttt),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function add_caddd()
	{
		$d = array('status' => $_POST['status'] ,
		'name' => $_POST['name'] ,
		'fname' => $_POST['fname'] ,
		'lname' => $_POST['lname'] ,
		'address1' => $_POST['address1'] ,
		'address2' => $_POST['address2'] ,
		'city' => $_POST['city'] ,
		'state' => $_POST['state'] , 
		'zip' => $_POST['zip'] ,
		'phone' => $_POST['phone'] ,
		'phone2' => $_POST['phone2'] ,
		'fax' => $_POST['fax'] ,
		'email' => $_POST['email'] ,
		'url' => $_POST['url'] );

		$this->db->insert("Ccreditors",$d);
	}

	public function EDIT_caddd()
	{
		$id = $_POST['id'];
		$d = array('status' => $_POST['status'] ,
		'name' => $_POST['name'] ,
		'fname' => $_POST['fname'] ,
		'lname' => $_POST['lname'] ,
		'address1' => $_POST['address1'] ,
		'address2' => $_POST['address2'] ,
		'city' => $_POST['city'] ,
		'state' => $_POST['state'] , 
		'zip' => $_POST['zip'] ,
		'phone' => $_POST['phone'] ,
		'phone2' => $_POST['phone2'] ,
		'fax' => $_POST['fax'] ,
		'email' => $_POST['email'] ,
		'url' => $_POST['url'] );

		$this->db->where("id",$id);
		$this->db->update("Ccreditors",$d);
	}
	public function deete_caddd($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('Ccreditors');
	}
}
?>
