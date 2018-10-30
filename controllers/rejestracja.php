<?php 

class Rejestracja extends Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->view->set('result', '');
		$this->view->render('rejestracja/index');
	}
	
	function rejestracjaDo() {
		
		$this->model->rejestracjaDo();
		$this->view->set('result', $this->model->rejestracjaDo());
		$this->view->render('rejestracja/index');
	}
}

?>