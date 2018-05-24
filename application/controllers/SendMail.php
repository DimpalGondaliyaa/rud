<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SendMail extends CI_Controller {


	public function index()
	{	
		$email=$this->session->userdata('email');	
		
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

		$email_config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => 'yorEmailId@gmail.com', // change it to yours
			'smtp_pass' => 'yourGmailPasswords', // change it to yours
			'mailtype'  => 'html',
			'charset'   => 'iso-8859-1'
		);

		// Defined Attachment file using variable
		$atch=base_url().'html/images/logo.png';

		$this->load->library('email', $email_config);

		$this->email->set_newline("\r\n");
		$this->email->from('rud.webrud@gmail.com', 'Rudra');
		$this->email->to('gobinath.g10@gmail.com');
		$this->email->subject('Mail with Attachment');
		$this->email->message("This mail you are getting with an Attachment file from CodeIgniter using Gmail");
		$this->email->attach($atch);
		$maill=$this->email->send();

			if($maill>0)
		     {
		      echo 'Email sent.';
		     }
		     else
		    {
		     show_error($this->email->print_debugger());
		    }
	}
}

?>