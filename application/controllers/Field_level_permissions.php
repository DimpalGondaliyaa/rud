
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Field_level_permissions extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Field_level_permissions",
			"stylesheet" => array("field_level_permissions.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("field_level_permissions.js")
		);
		$viewData = array(
			"viewName" => "field_level_permissions",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>