<?php 

class Model {
	
	function __construct() {
		$this->db = new Datebase();
	}
	
	public function set($name, $value) {
        $this->$name=$value;
    }
	
}

?>