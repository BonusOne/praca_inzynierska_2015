<?php 

class Admin_Model extends Model {
	
	function __construct() {
		parent::__construct();
		
		
	}
	
	public function user_createDo() {
		
		$imie = htmlspecialchars(trim($_POST['imie']));
		$nazwisko = htmlspecialchars(trim($_POST['nazwisko']));
		$email = htmlspecialchars(trim($_POST['email']));
		$pass1 = md5($_POST['pass1']);
		$pass2 = md5($_POST['pass2']);
		$typ = htmlspecialchars(trim($_POST['typ']));
		
		if ($pass1 == $pass2) {
		
			$que = $this->db->query('call CreateUser("'.$email.'","'.$pass1.'","'.$imie.'","'.$nazwisko.'","'.$typ.'")');
			
			
			//print_r($data = $que->fetch(PDO::FETCH_ASSOC));
			
			//$data = $que->fetch(PDO::FETCH_ASSOC);
			
			
			//echo '<pre>';
			//print_r($data);
			//echo '</pre>';
			
			$count = $que->rowCount();
			
			if($count > 0) {
				//Dodany
				return "Dodane";
				//header("Location: /admin/user_create");
				
			} else {
				//error
				return "Niedodane";
				//header("Location: /admin/user_create");
			}
		} else {
			return "Hasła nie pasują do siebie";
			//header("Location: /admin/user_create");
		}
		
	}
	
	/*function GetResult() {
		return $result;
		//header("Location: /admin/user_create");
	}*/
	
	
	
	
	
	function UsrList() {
		$que = $this->db->query('call SelectUser');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$data = $que->fetch(PDO::FETCH_ASSOC);
		return $data;
	}
	
	function UserDel()
	{
		$id = (int)$_POST['id'];
		$que = $this->db->query('call delUser("'.$id.'")');
	}
	
	function UserTypes()
	{
		$id2 = (int)$_POST['id2'];
		$ids2 = (int)$_POST['idst2'];
		$que = $this->db->query('call ChangeUserType("'.$id2.'", "'.$ids2.'")');

	}
	
	function UserchangeBlok()
	{
		$id3 = (int)$_POST['id3'];
		$ids3 = (int)$_POST['idst3'];
		$que = $this->db->query('call ChangeUserBlok("'.$id3.'", "'.$ids3.'")');

	}
	
	
	
	
	
	
	
	
	
	public function getAllMias() {
		$que = $this->db->query('call SelectMiasto');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	
	public function getAllkurs() {
		$que = $this->db->query('call ShowKurs');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	
	public function getDatekurs() {
		$que = $this->db->query('call SelectDateKurs');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	function getKursDate()
	{
		$Datu = $_POST['Datas'];
		$que = $this->db->query('call ShowKursDate("'.$Datu.'")');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//var_dump($data);
        return $data;
	}
	
	
	public function kurs_createDo() {
		
		$miastos = (int)$_POST['miastos'];
		$miastoc = (int)$_POST['miastoc'];
		$data = $_POST['data'];
		$srodtr = (int)$_POST['srodtr'];
		$odwolany = (int)$_POST['odwolany'];
		
		if ($data == '' or $data == NULL) {
			return "Proszę wybrać datę";
		} else {
			if ($miastos != $miastoc) {
			
				$que = $this->db->query('call AddKurs("'.$miastos.'","'.$miastoc.'","'.$data.'","'.$srodtr.'","'.$odwolany.'")');
				
				$count = $que->rowCount();
				
				if($count > 0) {
					//Dodany
					return "Dodane";
				} else {
					//error
					return "Niedodane";
				}
			} else {
				return "Miasta wyjazdu i docelowe nie mogą być takie same";
				//header("Location: /admin/srodtrans_create");
			}
		}
		
	}
	
	function kursOdwolany()
	{
		$id1 = (int)$_POST['id1'];
		$ids1 = (int)$_POST['idst1'];
		$que = $this->db->query('call ChangeStatsKurs("'.$id1.'", "'.$ids1.'")');
		/*$count = $que->rowCount();
			
			if($count > 0) {
				//Dodany
				return "Zmienione";
			} else {
				//error
				return "Niezmienione";
			}*/
	}
	
	
	
	
	
	
	
	
	
	
	public function getAllSTM() {
		$que = $this->db->query('call ShowModel');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	
	public function getAllST() {
		$que = $this->db->query('call ShowSrodTrans');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	
	public function srodtrans_createDo() {
		
		$Id = htmlspecialchars(trim($_POST['id']));
		$bloka = htmlspecialchars(trim($_POST['bloka']));
		
		if ($Id != "" or $bloka != "") {
		
			$que = $this->db->query('call AddSrodTrans("'.$Id.'","'.$bloka.'")');
			
			
			//print_r($data = $que->fetch(PDO::FETCH_ASSOC));
			
			//$data = $que->fetch(PDO::FETCH_ASSOC);
			
			
			//echo '<pre>';
			//print_r($data);
			//echo '</pre>';
			
			$count = $que->rowCount();
			
			if($count > 0) {
				//Dodany
				return "Dodane";
				//header("Location: /admin/srodtrans_create");
				//$this->set('result', 'Dodane');
				//return "Dodane";
				//echo "Dodane";
				
				
			} else {
				//error
				//$this->set('result', 'Niedodane');
				//return "Niedodane";
				return "Niedodane";
				//header("Location: /admin/srodtrans_create");
			}
		} else {
			return "Pola nie mogą być puste !";
			//header("Location: /admin/srodtrans_create");
		}
		
	}
	
	function srodtransDel()
	{
		$id = (int)$_POST['id'];
		$que = $this->db->query('call delSrodTrans("'.$id.'")');
	}
	
	function ChangeStats()
	{
		$id0 = (int)$_POST['id0'];
		$ids0 = (int)$_POST['idst0'];
		$que = $this->db->query('call ChangeStatsST("'.$id0.'", "'.$ids0.'")');
		$count = $que->rowCount();
			
			if($count > 0) {
				//Dodany
				return "Zmienione";
			} else {
				//error
				return "Niezmienione";
			}
	}
	
	/*public function srodtrans_createDoR() {
		return "dd";
		echo "ss";
		$this->set('result', $res);
	}*/
	
	
	public function srodtransmod_createDo() {
		
		$nazwa = htmlspecialchars(trim($_POST['nazwa']));
		$ilmiej = htmlspecialchars(trim($_POST['ilmiej']));
		$rok = htmlspecialchars(trim($_POST['rok']));
		
		if ($nazwa != "" or $ilmiej != "" or $rok != "") {
		
			$que = $this->db->query('call AddModelSrodTrans("'.$nazwa.'","'.$ilmiej.'","'.$rok.'")');
			
			
			//print_r($data = $que->fetch(PDO::FETCH_ASSOC));
			
			//$data = $que->fetch(PDO::FETCH_ASSOC);
			
			
			//echo '<pre>';
			//print_r($data);
			//echo '</pre>';
			
			$count = $que->rowCount();
			
			if($count > 0) {
				//Dodany
				return "Dodane";
				//header("Location: /admin/user_create");
				
			} else {
				//error
				return "Niedodane";
				//header("Location: /admin/user_create");
			}
		} else {
			return "Pola nie mogą być puste !";
			//header("Location: /admin/user_create");
		}
		
	}
	
	
	public function getAllRezer() {
		$que = $this->db->query('call ShowRezerwacje');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	
	public function rezerw_createDo() {
		
		$idus = (int)Session::get('iduser');
		$kurs = (int)$_POST['kurs'];
		$ilosc = (int)$_POST['ilosc'];
		
		if ($ilosc != '' or $ilosc != NULL) {
				
				$que = $this->db->query('call AddRezerwacja('.$idus.','.$kurs.','.$ilosc.')');
				
				$count = $que->rowCount();
				
				if($count > 0) {
					//Dodany
					return "Dodane";
				} else {
					//error
					return "Niedodane";
				}
		} else {
			return "Proszę wybrać ilość miejsc";
		}
		
	}
	
	function getRezerwKursDate()
	{
		$Datu = $_POST['Datas'];
		$Ids = (int)$_POST['IdKurs'];
		$que = $this->db->query('call ShowRezerwacjeIdDate("'.$Datu.'","'.$Ids.'")');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//var_dump($data);
        return $data;
	}
	
	function getKursTimeRez()
	{
		$Datu = $_POST['Datas'];
		$que = $this->db->query('call SelectTimeKursRez("'.$Datu.'")');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//var_dump($data);
        return $data;
	}
	
	
	
	
	
	
	public function getSelectTodayRezerw() {
		$que = $this->db->query('call SelectTodayRezerw()');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	public function getCountTodayKurs() {
		$que = $this->db->query('call SelectTodayDoneKurs()');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	public function getSelectRezerwInter7Day() {
		$que = $this->db->query('call SelectRezerwInter7Day()');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	public function getCountUser($param) {
		$que = $this->db->query('call SelectCountUser("'.$param.'")');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	public function getUserRejestracje($param) {
		$que = $this->db->query('call SelectCountUserRejestracje("'.$param.'")');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	
	
	
	
	
	public function getCountRezerwacje($param) {
		$que = $this->db->query('call SelectCountRezerw("'.$param.'")');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	public function getRezerwa($param) {
		$que = $this->db->query('call SelectCountRezerwacje("'.$param.'")');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	
}

?>