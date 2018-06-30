<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BudgetFields extends CI_Controller {


	public function index()
	{		

		$b=$this->db->query("SELECT * FROM budgets WHERE type='GI' ORDER BY id DESC");
		$all=$b->result_array();

		$b1=$this->db->query("SELECT * FROM budgets WHERE type='I' ORDER BY id DESC");
		$all1=$b1->result_array();

		$b2=$this->db->query("SELECT * FROM budgets WHERE type='E' ORDER BY id DESC");
		$all2=$b2->result_array();

		$b3=$this->db->query("SELECT * FROM budgets WHERE type='LA' ORDER BY id DESC");
		$all3=$b3->result_array();

		$b4=$this->db->query("SELECT * FROM budgets WHERE type='A' ORDER BY id DESC");
		$all4=$b4->result_array();

		$headerData = array(
			"pageTitle" => "Budget Fields",
			"stylesheet" => array("budgetFields.css","style.css","e_Sign.css")
		);
		$footerData = array(
			"jsFiles" => array("budgetFields.js")
		);
		$viewData = array(
			"viewName" => "budgetFields",
            "viewData" => array('all'=>$all,'all1'=>$all1,'all2'=>$all2,'all3'=>$all3,'all4'=>$all4),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function add_budgets(){

		$this->load->helper('date');
	    date_default_timezone_set("UTC");
	    if (function_exists('date_default_timezone_set'))
	    {
	      date_default_timezone_set('Asia/Kolkata');
	    }
	    date_default_timezone_set('Asia/Kolkata');

	    $c_date=date("Y-m-d H:i:s");

		$data=array('item_name'=>$this->input->post('item_name'),
					'type'=>$this->input->post('type'),
					'hover_hint'=>$this->input->post('hover_hint'),
					'replace_tag'=>$this->input->post('replace_tag'),
					'createdOn'=>$c_date);

		$this->db->insert('budgets',$data);

	}
}
?>