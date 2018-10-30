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
	
	function UsrListDel()
	{
		$id = $_POST['iduser'];
		$que = $this->db->prepare('DELETE FROM user WHERE iduser = "'.$id.'"');
		$que->execute();
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
	
	
}

?>