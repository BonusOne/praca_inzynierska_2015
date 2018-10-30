<?php 

class Panel extends Controller {
	
	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		
		if($logged == false) {
			Session::destroy();
			header("Location: /login");
			exit;
		}
		
		$this->view->js = array('panel/js/js.js');
	}
	
	function index() {
		
		$this->view->render('panel/index');
	}
	
	function logout() {
		
		Session::destroy();
		header("Location: /login");
		exit;
	}
	
	function xhrInsert() {
		$this->model->xhrInsert();
	}
	
	function userDelete() {
		
		$this->model->userDelete();
	}
	
}

?>