
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Teams",
			"stylesheet" => array("teams.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("teams.js")
		);
		$viewData = array(
			"viewName" => "teams",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>