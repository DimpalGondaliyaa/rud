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


	public function add_contactt()
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
			$created_date=date("d-m-Y H:i: a");

		$current_Date=date('y-m-d',time());
		$time= date("h:i:a");

		$data = array('f_name' => $_POST['f_name'],
		'c_f_name'=>$_POST['c_f_name'],	
		'middle_name'=>$_POST['middle_name'],
		'c_middle_name'=>$_POST['c_middle_name'],
		'l_name' => $_POST['l_name'] ,
		'c_l_name'=>$_POST['c_l_name'],
		'maiden_name'=>$_POST['maiden_name'],
		'c_maiden_name'=>$_POST['c_maiden_name'],
		'u_email' => $_POST['u_email'] ,
		/*'gender' => $_POST['gender'] ,*/
		'phone' => $_POST['phone'],
		'c_phone' => $_POST['c_phone'],
		'c_email'=>$_POST['c_email'],
		'ssn'=>$_POST['ssn'],
		'c_ssn'=>$_POST['c_ssn'], 
		'dob_m'=>$_POST['dob_m'],
		'c_dob_m'=>$_POST['c_dob_m'],
		'dob_d'=>$_POST['dob_d'],
		'c_dob_d'=>$_POST['c_dob_d'],
		'dob_y'=>$_POST['dob_y'],
		'c_dob_y'=>$_POST['c_dob_y'],
		'address'=>$_POST['address'],
		'address2'=>$_POST['address2'],
		'city' => $_POST['city'],
		'state' => $_POST['state'],
		'zipcode' => $_POST['zipcode'],
		'occupation'=>$_POST['occupation'],
		'c_occupation'=>$_POST['c_occupation'],
		'employer'=>$_POST['employer'],
		'c_employer'=>$_POST['c_employer'],
		'position'=>$_POST['position'],
		'c_position'=>$_POST['c_position'],
		'length_of_employmen'=>$_POST['length_of_employmen'],
		'c_length_of_employmen'=>$_POST['c_length_of_employmen'],
		'employer_address'=>$_POST['employer_address'],
		'c_employer_address'=>$_POST['c_employer_address'],
		'employer_address2'=>$_POST['employer_address2'],
		'c_employer_address2'=>$_POST['c_employer_address2'],
		'emp_city'=>$_POST['emp_city'],
		'c_emp_city'=>$_POST['c_emp_city'],
		'emp_state'=>$_POST['emp_state'],
		'c_emp_state'=>$_POST['c_emp_state'],
		'emp_zip'=>$_POST['emp_zip'],
		'c_emp_zip'=>$_POST['c_emp_zip'],
		'emp_home_phone'=>$_POST['emp_home_phone'],
		'c_emp_home_phone'=>$_POST['c_emp_home_phone'],
		'gross_income'=>$_POST['gross_income'],
		'income_spouse'=>$_POST['income_spouse'],
		'status_of_loans'=>$_POST['status_of_loans'],
		'taxable_income'=>$_POST['taxable_income'],
		'indebtedness_amoun'=>$_POST['indebtedness_amoun'],
		'family_size'=>$_POST['family_size'],
		'filing_status'=>$_POST['filing_status'],
		'file_taxes'=>$_POST['file_taxes'],
		'dl_number'=>$_POST['dl_number'],
		'dl_state'=>$_POST['dl_state'],
		'wages_garnished'=>$_POST['wages_garnished'],
		'pslf'=>$_POST['pslf'],
		'fsa_pin'=>$_POST['fsa_pin'],
		'ref_f_name'=>$_POST['ref_f_name'],
		'ref_l_name'=>$_POST['ref_l_name'],
		'ref_relationship'=>$_POST['ref_relationship'],
		'ref_addr'=>$_POST['ref_addr'],
		'ref_city'=>$_POST['ref_city'],
		'ref_state'=>$_POST['ref_state'],
		'ref_zip'=>$_POST['ref_zip'],
		'ref_phone'=>$_POST['ref_phone'],

		'ref2_f_name'=>$_POST['ref2_f_name'],
		'ref2_l_name'=>$_POST['ref2_l_name'],
		'ref2_relationship'=>$_POST['ref2_relationship'],
		'ref2_addr'=>$_POST['ref2_addr'],
		'ref2_city'=>$_POST['ref2_city'],
		'ref2_state'=>$_POST['ref2_state'],
		'ref2_zip'=>$_POST['ref2_zip'],
		'ref2_phone'=>$_POST['ref2_phone'],

		'createdOn'=>$created_date,
		'timeofresidency' => $c_date);
		$this->db->insert("contactdetails",$data);
	}


	/*Update Contacts datta*/

	public function upp_contactt()
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
			$created_date=date("d-m-Y H:i: a");

		$current_Date=date('y-m-d',time());
		$time= date("h:i:a");

		$up_id=$_POST['c_id'];
		$data = array('f_name' => $_POST['f_name'],
		'c_f_name'=>$_POST['c_f_name'],	
		'middle_name'=>$_POST['middle_name'],
		'c_middle_name'=>$_POST['c_middle_name'],
		'l_name' => $_POST['l_name'] ,
		'c_l_name'=>$_POST['c_l_name'],
		'maiden_name'=>$_POST['maiden_name'],
		'c_maiden_name'=>$_POST['c_maiden_name'],
		'u_email' => $_POST['u_email'] ,
		/*'gender' => $_POST['gender'] ,*/
		'phone' => $_POST['phone'],
		'c_phone' => $_POST['c_phone'],
		'c_email'=>$_POST['c_email'],
		'ssn'=>$_POST['ssn'],
		'c_ssn'=>$_POST['c_ssn'], 
		'dob_m'=>$_POST['dob_m'],
		'c_dob_m'=>$_POST['c_dob_m'],
		'dob_d'=>$_POST['dob_d'],
		'c_dob_d'=>$_POST['c_dob_d'],
		'dob_y'=>$_POST['dob_y'],
		'c_dob_y'=>$_POST['c_dob_y'],
		'address'=>$_POST['address'],
		'address2'=>$_POST['address2'],
		'city' => $_POST['city'],
		'state' => $_POST['state'],
		'zipcode' => $_POST['zipcode'],
		'occupation'=>$_POST['occupation'],
		'c_occupation'=>$_POST['c_occupation'],
		'employer'=>$_POST['employer'],
		'c_employer'=>$_POST['c_employer'],
		'position'=>$_POST['position'],
		'c_position'=>$_POST['c_position'],
		'length_of_employmen'=>$_POST['length_of_employmen'],
		'c_length_of_employmen'=>$_POST['c_length_of_employmen'],
		'employer_address'=>$_POST['employer_address'],
		'c_employer_address'=>$_POST['c_employer_address'],
		'employer_address2'=>$_POST['employer_address2'],
		'c_employer_address2'=>$_POST['c_employer_address2'],
		'emp_city'=>$_POST['emp_city'],
		'c_emp_city'=>$_POST['c_emp_city'],
		'emp_state'=>$_POST['emp_state'],
		'c_emp_state'=>$_POST['c_emp_state'],
		'emp_zip'=>$_POST['emp_zip'],
		'c_emp_zip'=>$_POST['c_emp_zip'],
		'emp_home_phone'=>$_POST['emp_home_phone'],
		'c_emp_home_phone'=>$_POST['c_emp_home_phone'],
		'gross_income'=>$_POST['gross_income'],
		'income_spouse'=>$_POST['income_spouse'],
		'status_of_loans'=>$_POST['status_of_loans'],
		'taxable_income'=>$_POST['taxable_income'],
		'indebtedness_amoun'=>$_POST['indebtedness_amoun'],
		'family_size'=>$_POST['family_size'],
		'filing_status'=>$_POST['filing_status'],
		'file_taxes'=>$_POST['file_taxes'],
		'dl_number'=>$_POST['dl_number'],
		'dl_state'=>$_POST['dl_state'],
		'wages_garnished'=>$_POST['wages_garnished'],
		'pslf'=>$_POST['pslf'],
		'fsa_pin'=>$_POST['fsa_pin'],
		'ref_f_name'=>$_POST['ref_f_name'],
		'ref_l_name'=>$_POST['ref_l_name'],
		'ref_relationship'=>$_POST['ref_relationship'],
		'ref_addr'=>$_POST['ref_addr'],
		'ref_city'=>$_POST['ref_city'],
		'ref_state'=>$_POST['ref_state'],
		'ref_zip'=>$_POST['ref_zip'],
		'ref_phone'=>$_POST['ref_phone'],

		'ref2_f_name'=>$_POST['ref2_f_name'],
		'ref2_l_name'=>$_POST['ref2_l_name'],
		'ref2_relationship'=>$_POST['ref2_relationship'],
		'ref2_addr'=>$_POST['ref2_addr'],
		'ref2_city'=>$_POST['ref2_city'],
		'ref2_state'=>$_POST['ref2_state'],
		'ref2_zip'=>$_POST['ref2_zip'],
		'ref2_phone'=>$_POST['ref2_phone'],

		'createdOn'=>$created_date,
		'timeofresidency' => $c_date);

		$this->db->where('c_id',$up_id);
		$this->db->update("contactdetails",$data);
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

	public function Details($id){
			if($this->session->userdata('email')=='' | $this->session->userdata('admin')==''){
			header('Location:'.base_url().'Adminlogin');
		}

		$q=$this->db->query("SELECT * FROM contactdetails WHERE c_id='".$id."'");
		$get=$q->row_array();

		$note=$this->db->query("SELECT * FROM notes WHERE u_id='".$id."' ORDER BY id DESC ");
		$allNotes=$note->result_array();

		$iidd=$this->db->query("SELECT * FROM banks WHERE u_id='".$id."'");
		$bankDetails=$iidd->row_array();

		$q=$this->db->query("SELECT * FROM cards WHERE u_id='".$id."'");
		$getCard=$q->row_array();

		$t=$this->db->query("SELECT * FROM tasks WHERE uu_id='".$id."'");
		$getTask=$t->result_array();



		$headerData = array(
			"pageTitle" => "Edit Contact",
			"stylesheet" => array("home.css","editContact.css","fullDetails.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js","editContact.js")
		);
		$viewData = array(
			"viewName" => "fullDetails",
            "viewData" => array('get'=>$get,'allNotes'=>$allNotes,'bankDetails'=>$bankDetails,'getCard'=>$getCard,'tsk'=>$getTask),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}




	public function addNote(){

		$this->load->helper('date');
		date_default_timezone_set("UTC");
		if (function_exists('date_default_timezone_set'))
		{
		  date_default_timezone_set('Asia/Kolkata');
		}

		$nu=implode(',', $_POST['notifyusers']);

		$c_date=date("Y-m-d H:i:s");
		$id = $_POST['c_id'];
		$data=array('u_id'=>$id,
			'note_type'=>$_POST['note_type'],
			'note'=>$_POST['note'],
			'email'=>$_POST['email'],
			'notify_user'=>$nu,
			'createdOn'=>$c_date);
		$this->db->insert("notes",$data);
	
	}


	public function deleteNote($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("notes");
	}


/*========= Add Card Details
============================*/

	public function addCard(){

		$this->load->helper('date');
		date_default_timezone_set("UTC");
		if (function_exists('date_default_timezone_set'))
		{
		  date_default_timezone_set('Asia/Kolkata');
		}

		$c_date=date("Y-m-d H:i:s");
		$id = $_POST['c_id'];

		$xpr_date=$_POST['exp_mo'].'/'.$_POST['exp_yr'];
		$data=array('u_id'=>$id,
			'card'=>$_POST['card'],
			'card_type'=>$_POST['card_type'],
			'card_issuer'=>$_POST['card_issuer'],
			'name_on_card'=>$_POST['name_on_card'],
			'card_number'=>$_POST['card_number'],
			'expiration_date'=>$xpr_date,
			'cvv'=>$_POST['cvv'],
			'address'=>$_POST['address'],
			'address2'=>$_POST['address2'],
			'city'=>$_POST['city'],
			'state'=>$_POST['state'],
			'zip'=>$_POST['zip'],
			'createdOn'=>$c_date);
		$this->db->insert("cards",$data);
	
	}


/*========= Add Bank Details
============================*/

	public function addBank(){

		$this->load->helper('date');
		date_default_timezone_set("UTC");
		if (function_exists('date_default_timezone_set'))
		{
		  date_default_timezone_set('Asia/Kolkata');
		}

		$c_date=date("Y-m-d H:i:s");
		$id = $_POST['c_id'];
		$data=array('u_id'=>$id,
			'routing_number'=>$_POST['routing_number'],
			'bank_name'=>$_POST['bank_name'],
			'account_number'=>$_POST['account_number'],
			'address'=>$_POST['address'],
			'account_type'=>$_POST['account_type'],
			'bank_city'=>$_POST['bank_city'],
			'bank_state'=>$_POST['bank_state'],
			'bank_postal_code'=>$_POST['bank_postal_code'],
			'name_on_account'=>$_POST['name_on_account'],
			'bank_phone'=>$_POST['bank_phone'],
			'createdOn'=>$c_date);
		$this->db->insert("banks",$data);
	
	}	

	/*Delete Bank*/

	public function deleteBank($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("banks");
	}


}
?>