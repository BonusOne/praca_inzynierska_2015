$(function() {
	
	//$.get('admin/GetResult', function(o) {
		//$('#Result');
		//$('#Result').append(o);
		//console.log(o);
		
	//});
	
	
	/*$.get('/admin/UsrList', function(o) {

		  
		$( "#AdmUsrList" ).append( o );
		
		for (var i = 0; i < o.length; i++)
		{
			$('#AdmUsrList').append('<div>' + o[i].email + '<a class="del" rel="'+o[i].iduser+'" href="#">X</a></div>');
		}
		
		$('.del').live('click', function() {
			delItem = $(this);
			var id = $(this).attr('rel');
			
			$.post('/admin/UsrListDel', {'id': id}, function(o) {
				delItem.parent().remove();
			}, 'json');
			
			return false;
		});
		
	});*/
	
	
	/*$('#AdmUsrList').submit(function() {
		var url = $(this).attr('action');
		var data = $(this).serialize();
		
		$.post(url, data, function(o) {
			$('#AdmUsrList').append('<div>' + o.email + '<a class="del" rel="'+ o.iduser +'" href="#">X</a></div>');		
		}, 'json');
		
		
		return false;
	});*/
	
	$('#datetimepicker').datetimepicker({
		lang:'pl',
		format:'Y-m-d H:i:s'
		});	
	
	
	/*$('#UserCreate').submit(function() {
		var url = $(this).attr('action');
		var data = $(this).serialize();
		
		//$.post(url, data, function(o) {
			//var res = jQuery.parseJSON(result);
			//$("#Result").html(res.thumb);
		//}, 'json');
		
		$.get('/admin/user_createDo', function(o) {
			$( "#Result" ).append( o );
		});
		
		return false;
		
	});*/
	
	
	/*$('#STCreate').submit(function() {
		var url = $(this).attr('action');
		var data = $(this).serialize();
		
		$.post(url, data, function(o) {
			alert( o );
		}, 'json');
		
		$.get('/admin/srodtrans_createDoR', function(o) {
			alert( o );
		});
		history.pushState('data', '', '/admin/srodtrans_create');
		return false;
		
	});*/
	
	
	
	
	/*$('#ModSTCreate').submit(function() {
		var url = $(this).attr('action');
		var data = $(this).serialize();
		
		$.post(url, data, function(o) {
			alert( o );
		}, 'json');
		
		$.get('/admin/srodtransmod_createDo', function(o) {
			alert( o );
		});
		
		return false;
		
	});*/
	
	
});