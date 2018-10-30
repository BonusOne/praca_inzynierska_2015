<?php 

class Kierowca extends Controller {
	
	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		
		if($logged == false or Session::get('type') >= 3) {
			//Session::destroy();
			header("Location: /index");
			exit;
		}
		
		$this->view->js = array('kierowca/js/js.js', 'admin/js/jquery.datetimepicker.js');
		//$this->view->chartAPI = true;
		//$this->view->js = array('admin/js/jquery.datetimepicker.js');
		//print_r($_SESSION);
	}
	
	function index() {
		
		$this->view->set('result', '');
		$this->view->set('kursData', $this->model->getAllkurs());
		$this->view->set('kursDataDate', $this->model->getDatekurs());
		$this->view->render('kierowca/index');
	}
	
	function getKursTime()
	{
		//var_dump($this->model->getKursTime());
		$this->view->set('kursTime', $this->model->getKursTime());
		$this->view->data('kierowca/getKursTime');
	}
	
	function getRezerw()
	{
		//var_dump($this->model->getKursTime());
		$this->view->set('RezerwDate', $this->model->getRezerw());
		$this->view->data('kierowca/getRezerw');
	}
	

	function ChangePotwie()
	{
		$this->model->ChangePotwie();
	}
	
	
}

?>