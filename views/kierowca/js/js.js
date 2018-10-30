$(function() {
		   
	$('nav').hide();
	$('#content').css('width','100%');
	
	$('#RezerShow').on('change','#datetimepickerS', function() {
		//var dataKurs = $(this).attr('rel');
		var Datas = $('input#datetimepickerS').val();
		//alert(Datas);
		$.post('/kierowca/getKursTime', {'Datas': Datas}, function(data) {
				//location.reload();
				$( "#kurs" ).html( data );
				//alert(data);
			});

	});
	
	$('#datetimepickerS').datetimepicker( {
		lang: 'pl',
		format: 'Y-m-d',
		timepicker: false,
		yearStart: 2014,
		dayOfWeekStart: 1,
		minDate: 0,
		maxDate: '+1970-01-08', formatDate:'Y-m-d'
		});
	
	
	$('#RezerShow').on('click','#InputSend', function() {
		var ids = $('select#kurs').val();
		//alert(Datas);
		$.post('/kierowca/getRezerw', {'Ids': ids}, function(data) {
				//location.reload();
				$( "#ListST" ).html( data );
				//alert(data);
			});

	});
	
	$('#kierowcaRezerwList').on('change','.changePotwierdz', function() {
		var ids2 = $(this).attr('rel');
		var stat2 = $('select#potw'+ids2).val();
		
		//alert(ids2 + ' ' + stat2);
		$.post('/kierowca/ChangePotwie', {'id2': ids2, 'idst2': stat2}, function(o) {
				//location.reload();
				//$( "#kierowcaRezerwList" ).load( "/kierowca #ListST" );
				var ids = $('select#kurs').val();
				$.post('/kierowca/getRezerw', {'Ids': ids}, function(data) {
					//location.reload();
					$( "#ListST" ).html( data );
					//alert(data);
				});
			});
		
		//$(this).html('<option value="0">Gotowy</option><option value="1">W naprawie</option><option value="2">Na przegladzie</option><option value="3">Uszkodzony</option>');
	});
	
	
 });