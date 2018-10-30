<?php 

class Login_Model extends Model {
	
	function __construct() {
		parent::__construct();
	}
	
	public function loginDo() {
		
		$login = htmlspecialchars(trim($_POST['login']));
		$pass = md5($_POST['pass']);
		
		$que = $this->db->query('call LoginUser("'.$login.'","'.$pass.'")');
		
		//print_r($data = $que->fetch(PDO::FETCH_ASSOC));
		
		$data = $que->fetch(PDO::FETCH_ASSOC);
		
		
		//echo '<pre>';
		//print_r($data);
		//echo '</pre>';
		
		$count = $que->rowCount();
		
		if($count > 0) {
			//login
			Session::init();
			Session::set('iduser', $data['iduser']);
			Session::set('email', $data['email']);
			Session::set('imie', $data['imie']);
			Session::set('nazwisko', $data['nazwisko']);
			Session::set('blokada', $data['blokada']);
			Session::set('type', $data['type']);
			Session::set('loggedIn', true);	
			
			/*$_SESSION['iduser'] = $data['iduser'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['imie'] = $data['imie'];
			$_SESSION['nazwisko'] = $data['nazwisko'];
			$_SESSION['blokada'] = $data['blokada'];
			$_SESSION['type'] = $data['type'];*/
			
			header("Location: /panel");
			
		} else {
			//error
			header("Location: /login");
		}
		
	}
	
}

?>