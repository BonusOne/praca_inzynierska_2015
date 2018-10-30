<?php 

class Rejestracja_Model extends Model {
	
	function __construct() {
		parent::__construct();
		
		Session::init();
		$logged = Session::get('loggedIn');
		
		if($logged == true) {
			//Session::destroy();
			header("Location: /index");
			exit;
		}
	}
	
	public function rejestracjaDo() {
		
		$imie = htmlspecialchars(trim($_POST['imie']));
		$nazwisko = htmlspecialchars(trim($_POST['nazwisko']));
		$email = htmlspecialchars(trim($_POST['email']));
		$pass1 = md5($_POST['pass1']);
		$pass2 = md5($_POST['pass2']);
		
		if ($pass1 == $pass2) {
		
			$que = $this->db->query('call CreateUser("'.$email.'","'.$pass1.'","'.$imie.'","'.$nazwisko.'","3")');
			
			
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
				return "Ten adres e-mail został już użyty";
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
	
	
}

?>