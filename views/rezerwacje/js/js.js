$(function() {
		   
		   
	$('#RezerCreate').on('change','#datetimepickerS', function() {
		//var dataKurs = $(this).attr('rel');
		var Datas = $('input#datetimepickerS').val();
		//alert(Datas);
		$.post('/rezerwacje/getKursTime', {'Datas': Datas}, function(data) {
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

 });