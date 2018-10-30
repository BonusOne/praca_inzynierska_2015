$(function() {
	
	$('#passwInsert').submit(function() {
		var url = $(this).attr('action');
		var data = $(this).serialize();
		
		$.post(url, data, function(o) {
			
		});
		
		return false;
		
	});
	
});

/*function checkChange(n) {
		if (n == 1) 
			$('#resultInsert').innerHTML("Hasło zostało zmienone");
		else 
			$('#resultInsert').innerHTML("Hasło nie zostało zmienone");
}*/

