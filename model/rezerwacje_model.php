<?php 

class Rezerwacje_Model extends Model {
	
	function __construct() {
		parent::__construct();
		
		
	}
	
	
	public function getAllkurs() {
		$que = $this->db->query('call ShowKurs');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	
	public function rezerw_addDo() {
		
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