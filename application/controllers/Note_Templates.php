  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note_Templates extends CI_Controller {


	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Note_Templates",
			"stylesheet" => array("note_Templates.css","style.css")
		);
		$footerData = array(
			"jsFiles" => array("note_Templates.js")
		);
		$viewData = array(
			"viewName" => "note_Templates",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
?>