<?php 

class Onas extends Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		
		$this->view->render('onas/index');
	}
}

?>