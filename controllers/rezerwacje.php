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
		
		$this->view->js = array('rezerwacje/js/js.js', 'rezerwacje/js/jquery.datetimepicker.js');
	}
	
	function index() {
		
		$this->view->set('result', '');
		$this->view->set('kursData', $this->model->getAllkurs());
		$this->view->set('kursDataDate', $this->model->getDatekurs());
		//$this->view->set('kursTime', $this->model->getKursTime());
		$this->view->render('rezerwacje/index');
	}
	
	function getKursTime()
	{
		//var_dump($this->model->getKursTime());
		$this->view->set('kursTime', $this->model->getKursTime());
		$this->view->data('rezerwacje/getKursTime');
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