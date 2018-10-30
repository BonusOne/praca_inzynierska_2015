<?php 

class Rezerwacje extends Controller {
	
	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		
		if($logged == false) {
			Session::destroy();
			header("Location: /login");
			exit;
		}
		
		//$this->view->js = array('rezerwacje/js/js.js');
	}
	
	function index() {
		
		$this->view->set('result', '');
		$this->view->set('kursData', $this->model->getAllkurs());
		$this->view->render('rezerwacje/index');
	}
	
	function rezerw_addDo() {
		
		$res = $this->model->rezerw_addDo();
		$this->view->set('result', $res);
		$this->view->set('kursData', $this->model->getAllkurs());
		$this->view->render('rezerwacje/index');
		//header("Location: /rezerwacje/index");
	}
}

?>