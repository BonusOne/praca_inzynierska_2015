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
		$this->view->chartAPI = true;
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
	
	function UserDel()
	{
		$this->model->UserDel();
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
	
	function UserTypes()
	{
		$this->model->UserTypes();
	}
	
	function UserchangeBlok()
	{
		$this->model->UserchangeBlok();
	}
	
	/*function GetResult() {
		$this->model->GetResult();
	}*/
	
	
	
	
	
	
	function kursy() {
		//$this->view->set('kursData', $this->model->getAllkurs());
		$this->view->set('kursDataDate', $this->model->getDatekurs());
		$this->view->render('admin/kursy');
	}
	
	function getKursDateAll()
	{
		//var_dump($this->model->getKursTime());
		$this->view->set('kursDate', $this->model->getAllkurs());
		$this->view->data('admin/getKursDate');
	}
	
	function getKursDate()
	{
		//var_dump($this->model->getKursTime());
		$this->view->set('kursDate', $this->model->getKursDate());
		$this->view->data('admin/getKursDate');
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
	
	function kursOdwolany()
	{
		$this->model->kursOdwolany();
	}
	
	
	
	
	
	
	function srodtrans() {

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
	
	function srodtransDel()
	{
		$this->model->srodtransDel();
	}
	
	function ChangeStats()
	{
		$this->model->ChangeStats();
	}
	
	
	
	
	
	
	
	
	
	function rezerw() {
		
		//echo "userfgh";
		//$this->view->set('rezData', $this->model->getAllRezer());
		$this->view->render('admin/rezerw');
	}
	
	function rezerw_create() {
		//$this->view->set('kursData', $this->model->getAllkurs());
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
	
	function getRezerwKursDate()
	{
		//var_dump($this->model->getKursTime());
		$this->view->set('rezData', $this->model->getRezerwKursDate());
		$this->view->data('admin/getRezerwKursDate');
	}
	
	function getKursTimeRe()
	{
		//var_dump($this->model->getKursTime());
		$this->view->set('kursTime', $this->model->getKursTimeRez());
		$this->view->data('rezerwacje/getKursTime');
	}
	
	
	
	
	
	function raporty() {
		
		$this->view->render('admin/raporty');
	}
	
	function rap_SelectTodayRezerw() {
		$this->view->set('count', $this->model->getSelectTodayRezerw());
		$this->view->data('admin/Data/count');
	}
	
	function rap_CountTodayKurs() {
		$this->view->set('count', $this->model->getCountTodayKurs());
		$this->view->data('admin/Data/count');
	}
	
	function rap_SelectRezerwInter7Day() {
		$this->view->set('count', $this->model->getSelectRezerwInter7Day());
		$this->view->data('admin/Data/count');
	}
	
	function rap_user() {
		$this->view->set('UserRejestracjeKwartal', $this->model->getUserRejestracje('kwartal'));
		$this->view->set('UserRejestracjeMiesiac', $this->model->getUserRejestracje('miesiac'));
		$this->view->set('UserRejestracjeTydzien', $this->model->getUserRejestracje('tydzien'));
		$this->view->render('admin/rap_user');
	}
	
	function rap_CountUser() {
		$this->view->set('count', $this->model->getCountUser('uzytkownicy'));
		$this->view->data('admin/Data/count');
	}
	
	function rap_CountUserNiezab() {
		$this->view->set('count', $this->model->getCountUser('uzytniezablokowani'));
		$this->view->data('admin/Data/count');
	}
	
	function rap_CountUserZab() {
		$this->view->set('count', $this->model->getCountUser('zablokowani'));
		$this->view->data('admin/Data/count');
	}
	
	function rap_UserRejestracje() {
		//$this->view->set('UserRejestracje', $this->model->getUserRejestracje());
		//$this->view->data('admin/Data/count');
	}
	
	function rap_rezer() {
		
		//$this->view->set('userData', $this->model->UsrList());
		$this->view->set('RezerwacjeKwartal', $this->model->getRezerwa('kwartal'));
		$this->view->set('RezerwacjeMiesiac', $this->model->getRezerwa('miesiac'));
		$this->view->set('RezerwacjeTydzien', $this->model->getRezerwa('tydzien'));
		$this->view->render('admin/rap_rezer');
	}
	
	function rap_CountRezerwacjeDzis() {
		$this->view->set('count', $this->model->getCountRezerwacje('dzis'));
		$this->view->data('admin/Data/count');
	}
	
	function rap_CountRezerwacjeDzisPot() {
		$this->view->set('count', $this->model->getCountRezerwacje('potwierdzone'));
		$this->view->data('admin/Data/count');
	}
	
	function rap_CountRezerwacjeDzisNiePot() {
		$this->view->set('count', $this->model->getCountRezerwacje('niepotwierdzone'));
		$this->view->data('admin/Data/count');
	}
	
	
	function rap_srodt() {
		
		//$this->view->set('userData', $this->model->UsrList());
		$this->view->render('admin/rap_srodt');
	}
	
	function rap_wykorz() {
		
		//$this->view->set('userData', $this->model->UsrList());
		$this->view->render('admin/rap_wykorz');
	}
	
	function rap_sledz() {
		
		//$this->view->set('userData', $this->model->UsrList());
		$this->view->render('admin/rap_sledz');
	}
	
	
	
}

?>