<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{		
		if($this->session->userdata('email')=='' | $this->session->userdata('admin')==''){
			header('Location:'.base_url().'Adminlogin');
		}

		$this->load->model('User_model');
		$data=$this->User_model->getDetails();

		$headerData = array(
			"pageTitle" => "Home",
			"stylesheet" => array("home.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js")
		);
		$viewData = array(
			"viewName" => "home",
            "viewData" => array('data'=>$data),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function addregdata()
	{
		$data = array('fname' => $_POST['fname'],
		'lname' => $_POST['lname'],
		'email' => $_POST['email'],
		'password' => $_POST['password'] );

		$this->db->insert("users",$data);
	}
	
	public function fetchcondata($id)
	{
		$t = $this->db->query("select * from contactdetails where c_id='$id'");
		$y = $t->row_array();
		 $this->load->view("editcontactdata",$y);
	}

	public function addconfilee()
	{
		$this->load->helper('date');
		date_default_timezone_set("UTC");
		if (function_exists('date_default_timezone_set'))
		{
		  date_default_timezone_set('Asia/Kolkata');
		}
		date_default_timezone_set('Asia/Kolkata');
		$created_date=date("d-m-Y H:i: a");

		$data = array('type' => $_POST['type'],
					'description' => $_POST['description'],
					'createdOn'=>$created_date
				);

		$this->db->insert("contact_file",$data);
		$id = $this->db->insert_id();


		 $userImage=$id."_files.".pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
   
		$adduserimgg=array('file'=>$userImage);
		$this->db->where('id',$id);
		$this->db->update("contact_file",$adduserimgg);
		$config["upload_path"]='html/images';
		$config["allowed_types"]='gif|png|jpg|jpeg';
		$config["file_name"]=$id."_files";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('file');
	}

	public function edtcontactdata()
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

		$data = array('f_name' => $_POST['f_name'] ,
		'l_name' => $_POST['l_name'] ,
		'u_email' => $_POST['u_email'] ,
		'password' => $_POST['password'] ,
		'gender' => $_POST['gender'] ,
		'phone' => $_POST['phone'] ,
		'mobile' => $_POST['mobile'] , 
		'income' => $_POST['income'] ,
		'dob' => $_POST['dob'] ,
		'address' => $_POST['address'] ,
		'city' => $_POST['city'] ,
		'zipcode' => $_POST['zipcode'] ,
		'state' => $_POST['state'] ,
		'timeofresidency' => $c_date);

		$id = $_POST['c_id'];
		$this->db->where("c_id",$id);
		$this->db->update("contactdetails",$data);
	}

	public function deletecon($id)
	{
		$this->db->where("c_id",$id);
		$this->db->delete("contactdetails");
	}


	/*Change Status*/

	public function fetchStatus($id)
	{
		$t = $this->db->query("SELECT * FROM contactdetails WHERE c_id='".$id."'");
		$y = $t->row_array();
		$this->load->view("editcontactdataStatus",$y);
	}

	public function edtcontactStatus(){
		$id = $_POST['c_id'];
		$data=array('stage'=>$_POST['stage'],'status'=>$_POST['status']);
		$this->db->where("c_id",$id);
		$this->db->update("contactdetails",$data);
	
	}

/*add Note*/

	public function NoteModal($id)
	{
		$t = $this->db->query("SELECT * FROM contactdetails WHERE c_id='".$id."'");
		$y = $t->row_array();
		$this->load->view("addNotePage",$y);
	}

	public function addNote(){

		$this->load->helper('date');
		date_default_timezone_set("UTC");
		if (function_exists('date_default_timezone_set'))
		{
		  date_default_timezone_set('Asia/Kolkata');
		}

		$c_date=date("Y-m-d H:i:s");
		$id = $_POST['c_id'];
		$data=array('u_id'=>$id,'note_type'=>$_POST['note_type'],'note'=>$_POST['note'],'createdOn'=>$c_date);
		$this->db->insert("notes",$data);
	
	}



/*add Events*/

	public function eventsModal($id)
	{
		$t = $this->db->query("SELECT * FROM contactdetails WHERE c_id='".$id."'");
		$y = $t->row_array();
		$this->load->view("addEventsPage",$y);
	}

	public function addEvent(){

		$this->load->helper('date');
		date_default_timezone_set("UTC");
		if (function_exists('date_default_timezone_set'))
		{
		  date_default_timezone_set('Asia/Kolkata');
		}

		$c_date=date("Y-m-d H:i:s");
		$id = $_POST['c_id'];
		$data=array('u_id'=>$id,
			'e_title'=>$_POST['e_title'],
			'e_date'=>$_POST['e_date'],
			'e_time'=>$_POST['e_time'],
			'e_timezone'=>$_POST['e_timezone'],
			'e_public'=>$_POST['e_public'],
			'e_event_type'=>$_POST['e_event_type'],
			'e_assign_to'=>$_POST['e_assign_to'],
			'e_location'=>$_POST['e_location'],
			'e_desc'=>$_POST['e_desc'],
			'createdOn'=>$c_date
		);
		$this->db->insert("u_events",$data);
	
	}

}

?>