$(function() {

	//$.get('admin/GetResult', function(o) {
		//$('#Result');
		//$('#Result').append(o);
		//console.log(o);
		
	//});
	
	$.datepicker.setDefaults( $.datepicker.regional[ "pl" ] );
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
	
	$('.DelRowUs').click( function(){
			delItem = $(this);
			var id = $(this).attr('rel');
			
			$.post('/admin/UserDel', {'id': id}, function(o) {
				//alert("1");
			});
			
			//alert("1");
		});
	
	$('.DelRow').click( function(){
			delItem = $(this);
			var id = $(this).attr('rel');
			
			$.post('/admin/srodtransDel', {'id': id}, function(o) {
				//alert("1");
			});
			
			//alert("1");
		});
	
	$('#datetimepicker').datetimepicker({
		lang:'pl',
		format:'Y-m-d H:i:s'
		});	
	
	$('#nav-adm-rapor').click( function() {
		$('#nav-adm-rapor-in').toggle('medium');
		
		});
	
	$('#AdmSrTrList').on('change','.changeStatus', function() {
		var ids0 = $(this).attr('rel');
		var stat0 = $('select#stat'+ids0).val();
		//alert(ids0 + ' ' + stat0);
		$.post('/admin/ChangeStats', {'id0': ids0, 'idst0': stat0}, function(o) {
				//location.reload();
				$( "#AdmSrTrList" ).load( "/admin/srodtrans #ListST" );
			});
		
		//$(this).html('<option value="0">Gotowy</option><option value="1">W naprawie</option><option value="2">Na przegladzie</option><option value="3">Uszkodzony</option>');
	});
	
	
	

	
	
	$('#AdmKursList').on('change','.changeOdwolany', function() {
		var ids1 = $(this).attr('rel');
		var stat1 = $('select#odwo'+ids1).val();
		
		//alert(ids + ' ' + stat);
		$.post('/admin/kursOdwolany', {'id1': ids1, 'idst1': stat1}, function(o) {
				//location.reload();
				$( "#AdmKursList" ).load( "/admin/kursy #ListST" );
			});
		
		//$(this).html('<option value="0">Gotowy</option><option value="1">W naprawie</option><option value="2">Na przegladzie</option><option value="3">Uszkodzony</option>');
	});
	
	
	$('#RezerwSel').on('change','#datetimepickerS', function() {
		//var dataKurs = $(this).attr('rel');
		var Datas = $('input#datetimepickerS').val();
		//alert(Datas);
		$.post('/admin/getKursTimeRe', {'Datas': Datas}, function(data) {
				//location.reload();
				$( "#Admkurs" ).html( data );
				//alert(data);
			});

	});
	
	$('#RezerwSel').on('click','.RezerSelIn', function() {
		//var dataKurs = $(this).attr('rel');
		var Datas = $('input#datetimepickerS').val();
		var IdKurs = $('select#Admkurs').val();
		//alert(Datas);
		$.post('/admin/getRezerwKursDate', {'Datas': Datas, 'IdKurs': IdKurs}, function(data) {
				//location.reload();
				$( "#ListST" ).html( data );
				//alert(data);
			});

	});
	
	$('#RezerCreate').on('change','#datetimepickerS1', function() {
		//var dataKurs = $(this).attr('rel');
		var Datas = $('input#datetimepickerS1').val();
		//alert(Datas);
		$.post('/rezerwacje/getKursTime', {'Datas': Datas}, function(data) {
				//location.reload();
				$( "#kurs" ).html( data );
				//alert(data);
			});

	});
	
	$('#datetimepickerS1').datetimepicker( {
		lang: 'pl',
		format: 'Y-m-d',
		timepicker: false,
		yearStart: 2014,
		dayOfWeekStart: 1,
		minDate: 0,
		maxDate: '+1970-01-08', 
		formatDate: 'Y-m-d'
		});
	
	
	
	
	
	
	
	/*$('#AdmKurs').on('change','.datakurs', function() {
		//var dataKurs = $(this).attr('rel');
		var Datas = $('select#dataKursu').val();
		//alert(Datas);
		$.post('/admin/getKursDate', {'Datas': Datas}, function(data) {
				//location.reload();
				$( "#ListST" ).html( data );
				//alert(data);
			});

	});*/
	
	$('#AdmKurs').on('change','.datakurs', function() {
		//var dataKurs = $(this).attr('rel');
		var Datas = $('input#datetimepickerS').val();
		//alert(Datas);
		$.post('/admin/getKursDate', {'Datas': Datas}, function(data) {
				//location.reload();
				$( "#ListST" ).html( data );
				//alert(data);
			});

	});
	
	$('#AdmKurs').on('click','#kursyWszystkie', function() {
		//var dataKurs = $(this).attr('rel');
		//var Datas = $('select#dataKursu').val();
		//alert(Datas);
		$.get('/admin/getKursDateAll', function(data) {
				//location.reload();
				$( "#ListST" ).html( data );
				//alert(data);
			});

	});
	
	$('#datetimepickerS').datetimepicker( {
		lang: 'pl',
		format: 'Y-m-d',
		timepicker: false,
		yearStart: 2014,
		dayOfWeekStart: 1
		});	
	
	
	
	
	
	
	$('#AdmUsrList').on('change','.changeType', function() {
		var ids2 = $(this).attr('rel');
		var stat2 = $('select#typs'+ids2).val();
		
		//alert(ids2 + ' ' + stat2);
		$.post('/admin/UserTypes', {'id2': ids2, 'idst2': stat2}, function(o) {
				//location.reload();
				$( "#AdmUsrList" ).load( "/admin/user #ListST" );
			});
		
		//$(this).html('<option value="0">Gotowy</option><option value="1">W naprawie</option><option value="2">Na przegladzie</option><option value="3">Uszkodzony</option>');
	});
	
	$('#AdmUsrList').on('change','.changeBlok', function() {
		var ids3 = $(this).attr('rel');
		var stat3 = $('select#blokk'+ids3).val();
		
		//alert(ids2 + ' ' + stat2);
		$.post('/admin/UserchangeBlok', {'id3': ids3, 'idst3': stat3}, function(o) {
				//location.reload();
				$( "#AdmUsrList" ).load( "/admin/user #ListST" );
			});
		
		//$(this).html('<option value="0">Gotowy</option><option value="1">W naprawie</option><option value="2">Na przegladzie</option><option value="3">Uszkodzony</option>');
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
	
	
	$.get('/admin/rap_CountTodayKurs', function(o) {
		setTimeout(function(){ $('#PaGlTodayKurs').text(o); }, Math.floor(Math.random() * (1500 - 300)) + 300);
	});
	$.get('/admin/rap_SelectTodayRezerw', function(o) {
		setTimeout(function(){ $('#PaGlTodayRez').text(o); }, Math.floor(Math.random() * (1500 - 300)) + 300);
	});
	$.get('/admin/rap_SelectRezerwInter7Day', function(o) {
		setTimeout(function(){ $('#PaGl7days').text(o); }, Math.floor(Math.random() * (1500 - 300)) + 300);
	});
	
	
	$.get('/admin/rap_CountUser', function(o) {
		setTimeout(function(){ $('#CountUser').text(o); }, Math.floor(Math.random() * (1500 - 300)) + 300);
		setTimeout(function(){ $('#PaGlUser').text(o); }, Math.floor(Math.random() * (1500 - 300)) + 300);
	});
	$.get('/admin/rap_CountUserNiezab', function(o) {
		setTimeout(function(){ $('#CountUserNiezab').html(o); }, Math.floor(Math.random() * (1500 - 300)) + 300);
	});
	$.get('/admin/rap_CountUserZab', function(o) {
		setTimeout(function(){ $('#CountUserZab').html(o); }, Math.floor(Math.random() * (1500 - 300)) + 300);
	});
	
	
	$.get('/admin/rap_CountRezerwacjeDzis', function(o) {
		setTimeout(function(){ $('#CountRezerwacje').text(o); }, Math.floor(Math.random() * (1500 - 300)) + 300);
	});
	$.get('/admin/rap_CountRezerwacjeDzisPot', function(o) {
		setTimeout(function(){ $('#CountRezerwacjePot').html(o); }, Math.floor(Math.random() * (1500 - 300)) + 300);
	});
	$.get('/admin/rap_CountRezerwacjeDzisNiePot', function(o) {
		setTimeout(function(){ $('#CountRezerwacjeNiePot').html(o); }, Math.floor(Math.random() * (1500 - 300)) + 300);
	});
	

	
});