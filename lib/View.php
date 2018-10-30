<?php 

class View {
	
	function __construct() {
		//echo "To jest widok<br />";
	}
	
	public function render($nazwa, $noInclude = false) {
		
		if ($noInclude == true) {
			require 'views/'.$nazwa.'.php';
		} else {		
			require 'views/header.php';
			require 'views/'.$nazwa.'.php';
			require 'views/footer.php';
		}
	}
	
	public function set($name, $value) {
        $this->$name=$value;
    }
	
	public function get($name) {
        return $this->$name;
    }
	
}

?>