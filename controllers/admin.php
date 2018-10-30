<?php 

class Admin extends Controller {
	
	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		
		if($logged == false or Session::get('type') >= 3) {
			//Session::destroy();
			header("Location: /index");
			exit;
		}
		
		$this->view->js = array('admin/js/js.js', 'admin/js/jquery.datetimepicker.js');
		//$this->view->js = array('admin/js/jquery.datetimepicker.js');
		//print_r($_SESSION);
	}
	
	function index() {
		
		
		
		$this->view->render('admin/index');
	}
	
	
	
	
	
	
	function user() {
		
		//echo "userfgh";
		$this->view->set('userData', $this->model->UsrList());
		$this->view->render('admin/user');
	}
	
	/*function UsrList() {
		//$this->view->set('userData', $this->model->getAllSTM());
		$this->view->set('result', '');
	}*/
	
	function UsrListDel()
	{
		$this->model->UsrListDel();
	}
	
	function user_create() {
		$this->view->set('result', '');
		$this->view->render('admin/create_user');			
	}
	
	function user_createDo() {
		
		$que = $this->model->user_createDo();
		$this->view->set('result', $que);
		$this->view->render('admin/create_user');
	}
	
	/*function GetResult() {
		$this->model->GetResult();
	}*/
	
	
	
	
	
	
	function kursy() {
		$this->view->set('kursData', $this->model->getAllkurs());
		$this->view->render('admin/kursy');
	}
	
	function kurs_create() {
		$this->view->set('miasData', $this->model->getAllMias());
		$this->view->set('stData', $this->model->getAllST());
		$this->view->set('result', '');
		$this->view->render('admin/create_kurs');			
	}
	
	function kurs_createDo() {
			
		$this->model->kurs_createDo();
		//$this->view->set('result', $this->model->kurs_createDo());
		header("Location: /admin/kursy");
		/*$this->view->set('miasData', $this->model->getAllMias());
		$this->view->set('stData', $this->model->getAllST());
		$this->view->render('admin/create_kurs');*/
		
	}
	
	
	
	
	
	
	function srodtrans() {
		
		//echo "userfgh";
		$this->view->set('stData', $this->model->getAllST());
		
		$this->view->render('admin/srodtrans');
	}
	
	function srodtrans_create() {
		//$st = $this->loadModel('Admin_Model');
		//print_r($this->model->getAllST());
        $this->view->set('stmData', $this->model->getAllSTM());
		$this->view->set('result', '');
		$this->view->render('admin/srodtrans_create');
	}
	
	function srodtrans_createDo() {
			
		$que = $this->model->srodtrans_createDo();
		$this->view->set('result', $que);
		$this->view->render('admin/srodtrans_create');
		
	}
	
	function srodtrans_createDoR() {
		$this->model->srodtrans_createDoR();
	}
	
	function srodtransmod_create() {
		$this->view->set('result', '');
		$this->view->render('admin/srodtransmod_create');			
	}
	
	function srodtransmod_createDo() {
		
		$que = $this->model->srodtransmod_createDo();
		$this->view->set('result', $que);
		$this->view->render('admin/srodtransmod_create');
	}
	
	
	
	
	
	
	
	
	
	function rezerw() {
		
		//echo "userfgh";
		$this->view->set('rezData', $this->model->getAllRezer());
		$this->view->render('admin/rezerw');
	}
	
	function rezerw_create() {
		$this->view->set('kursData', $this->model->getAllkurs());
		$this->view->set('result', '');
		$this->view->render('admin/create_rezerw');
	}
	
	function rezerw_createDo() {
			
		$this->model->rezerw_createDo();
		header("Location: /admin/rezerw");
		//$this->view->set('kursData', $this->model->getAllkurs());
		//$this->view->set('result', $this->model->rezerw_createDo());
		//$this->view->render('admin/create_rezerw');
		
	}
	
	
	
	
	
	
	function raporty() {
		
		//echo "userfgh";
		
		$this->view->render('admin/raporty');
	}
	
}

?>