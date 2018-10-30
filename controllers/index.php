<?php 

class Index extends Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		//echo 'INSIDE INDEX INDEX';
		//$this->view->render('index/index', 1); //Dla $noInclude w Widoku
		$this->view->render('index/index');
	}
	
	function details() {
		$this->view->render('index/index');
	}
}

?>