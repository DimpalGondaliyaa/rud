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
	
	public function sendsubscriber()
	{
	$data=array(
			'fname'=>$_POST['fname'],
			'lname'=>$_POST['lname'],
			'email'=>$_POST['email']
		);
		
		$email=$data['email'];
		$fnm=$data['fname'];
		
		
		   $ee=$this->db->query("SELECT email FROM newslatter WHERE email='".$email."'");
		   $eee=$ee->row_array();
		if($eee>0){
			$this->db->where('email',$email);
			$send=$this->db->update('newslatter',$data);
		}
		else {
		$send=$this->db->insert('newslatter',$data);
		}
		if($send > 0){

			 $config = Array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.googlemail.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'dimpal.v.gondaliyaa14@gmail.com', // change it to yours
			  'smtp_pass' => 'dimpalgondaliyaa', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
			);

			        $message = '';
			      $this->load->library('email', $config);
			      $this->email->set_newline("\r\n");
			      $this->email->from('dimpal.v.gondaliyaa14@gmail.com','dBright'); // change it to yours
			      $this->email->to($email);// change it to yours
			      $this->email->subject('Welcome to Debra M Bright');
			      $this->email->message("Dear, <b>$email</b> <br>Thank You for showing your interest into Debra M Bright. To see more enter the Bright Club and stay 
			      rejuvinated. All your worries are about to run away. Keep viewing our site for whats happening.Thanks");
			      if($this->email->send())
			     {
			      echo 'Email sent.';
			     }
			     else
			    {
			     show_error($this->email->print_debugger());
			    }


		}
	}
	public function fetchcondata($id)
	{
		$t = $this->db->query("select * from contactdetails where c_id='$id'");
		$y = $t->row_array();
		 $this->load->view("editcontactdata",$y);
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


}

?>