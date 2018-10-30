<?php 

class Panel_Model extends Model {
	
	function __construct() {
		parent::__construct();
		
	}
	
	function xhrInsert() {
		$oldpass = $_POST['oldpass'];
		$pass = $_POST['passw'];
		$ids = $_SESSION['iduser'];
		
		$que = $this->db->query('call UserChangePass("'.$ids.'","'.$pass.'","'.$oldpass.'")');
		
		$count = $que->rowCount();
		
		if($count > 0) {
			//save
			$msg = "Haslo zostalo zmienone";
			echo '<script type="text/javascript"> alert("'.$msg.'"); </script>';		
		} else {
			//don't save
			$msg = "Haslo nie zostalo zmienone";
			echo '<script type="text/javascript"> alert("'.$msg.'"); </script>';		
		}
	}
	
	public function userDelete() {
		
		$idusr = Session::get('iduser');
		
		$que = $this->db->query('call DeleteUser("'.$idusr.'")');
		
		$count = $que->rowCount();
		
		if($count > 0) {
			Session::destroy();
			header("Location: /login");
			exit;
		} else {
			//nie udalo sie
		}
		
	}
	
}

?>