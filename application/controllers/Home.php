<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{		


		$this->load->model('User_model');
		$data=$this->User_model->getDetails();
		$headerData = array(
			"pageTitle" => "Home",
			"stylesheet" => array("home.css","style.css")
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
		$this->load->view('template',$viewData);
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
}
?>