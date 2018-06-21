
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transactions extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Transactions",
			"stylesheet" => array("transactions.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("transactions.js")
		);
		$viewData = array(
			"viewName" => "transactions",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>