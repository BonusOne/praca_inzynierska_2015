<?php 

class Kierowca_Model extends Model {
	
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
	
	public function getDatekurs() {
		$que = $this->db->query('call SelectDateKurs');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//$this->db->query('SELECT * FROM srodtrans');
        return $data;
    }
	
	function getKursTime()
	{
		$Datu = $_POST['Datas'];
		$que = $this->db->query('call SelectTimeKurs("'.$Datu.'")');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//var_dump($data);
        return $data;
	}
	
	function getRezerw()
	{
		$Ids = (int)$_POST['Ids'];
		$que = $this->db->query('call ShowRezerwDate("'.$Ids.'")');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		//var_dump($data);
        return $data;
	}
	
	function ChangePotwie()
	{
		$id2 = (int)$_POST['id2'];
		$ids2 = (int)$_POST['idst2'];
		$que = $this->db->query('call ChangePotwierdz("'.$id2.'", "'.$ids2.'")');

	}
	
}

?>