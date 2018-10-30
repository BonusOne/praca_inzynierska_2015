
<div class="divh2">Raporty - Użytkownicy</div>
<div class="RapUser">

<div class="PaUsOne">
    <div class="text">
    	<span id="CountUser" style="height: 36px;">
        <img src="/images/loadingru.gif" height="28" />
        </span>
        Wszystkich użytkowników
    </div>
</div>

<div class="PaUsTwo">
    <div class="text">
    	<span id="CountUserNiezab" style="height: 36px;">
        <img src="/images/loadingru.gif" height="28" />
        </span>
        Aktywnych użytkowników
    </div>
</div>

<div class="PaUsThree">
    <div class="text">
    	<span id="CountUserZab" style="height: 36px;">
        <img src="/images/loadingru.gif" height="28" />
        </span>
        Zablokowanych użytkowników
    </div>
</div>








<div class="clearfix"></div>
<?php 
	$i = 0;
	$DaneChart1='';
	foreach($this->get('UserRejestracjeKwartal') as $key => $value) {
		
		$DaneChart1 .= '["'.$value["data"].'", '.$value["ilosc"].']';
		
		if ( count($this->get('UserRejestracjeKwartal'))-1>$i++){
		$DaneChart1 .=',';
		}
	};
	//echo $DaneChart1;
	//echo '<pre>';
	//echo json_encode($this->get('UserRejestracje'));
	//echo '</pre>';
?>
<script type="text/javascript">
	google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawStuff);

      function drawStuff() {
		  
		
		  
        var data = new google.visualization.arrayToDataTable([
          ['Data', 'Ilość'],
          <?php echo $DaneChart1; ?>
        ]);

        var options = {
          title: 'Rejestracje uzytkowników z ostatniego kwartalu',
		  
          legend: { position: 'none', textStyle: { color: '#ffffff' } },
		  colors: ['#a2b4cf'],
		  hAxis: { textStyle: { color: '#ffffff' }, titleTextStyle: { color: '#ffffff' } },
		  titleTextStyle: { color: '#ffffff' },
		  tooltip: { textStyle: { color: '#ffffff' } },
		  vAxis: { textStyle: { color: '#ffffff' }, titleTextStyle: { color: '#ffffff' } },
          axes: {
            x: {
              0: { side: 'bottom', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('RejestracjeChartKwartal'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };

</script>
<div id="RejestracjeChartKwartal" style="width: 98%; height: 550px;color: #fff; background: rgba(000,000,000,0.3); padding: 10px;">
<img src="/images/loadingru.gif" height="28" style="margin-left: 50%; margin-top: 10%;" />
</div>


<div class="clearfix" style="margin-top: 20px;"></div>
<?php 
	$i = 0;
	$DaneChart2='';
	foreach($this->get('UserRejestracjeMiesiac') as $key => $value) {
		
		$DaneChart2 .= '["'.$value["data"].'", '.$value["ilosc"].']';
		
		if ( count($this->get('UserRejestracjeMiesiac'))-1>$i++){
		$DaneChart2 .=',';
		}
	};
	//echo $DaneChart1;
	//echo '<pre>';
	//echo json_encode($this->get('UserRejestracje'));
	//echo '</pre>';
?>
<script type="text/javascript">
	google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawStuff);

      function drawStuff() {
		  
		
		  
        var data = new google.visualization.arrayToDataTable([
          ['Data', 'Ilość'],
          <?php echo $DaneChart2; ?>
        ]);

        var options = {
          title: 'Rejestracje uzytkowników z ostatniego miesiaca',
		  
          legend: { position: 'none', textStyle: { color: '#ffffff' } },
		  colors: ['#a2b4cf'],
		  hAxis: { textStyle: { color: '#ffffff' }, titleTextStyle: { color: '#ffffff' } },
		  titleTextStyle: { color: '#ffffff' },
		  tooltip: { textStyle: { color: '#ffffff' } },
		  vAxis: { textStyle: { color: '#ffffff' }, titleTextStyle: { color: '#ffffff' } },
          axes: {
            x: {
              0: { side: 'bottom', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('RejestracjeChartMiesiac'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };

</script>
<div id="RejestracjeChartMiesiac" style="width: 98%; height: 550px;color: #fff; background: rgba(000,000,000,0.3); padding: 10px;"><img src="/images/loadingru.gif" height="28" style="margin-left: 50%; margin-top: 10%;" /></div>

<div class="clearfix" style="margin-top: 20px;"></div>
<?php 
	$i = 0;
	$DaneChart3='';
	foreach($this->get('UserRejestracjeTydzien') as $key => $value) {
		
		$DaneChart3 .= '["'.$value["data"].'", '.$value["ilosc"].']';
		
		if ( count($this->get('UserRejestracjeTydzien'))-1>$i++){
		$DaneChart3 .=',';
		}
	};
	//echo $DaneChart1;
	//echo '<pre>';
	//echo json_encode($this->get('UserRejestracje'));
	//echo '</pre>';
?>
<script type="text/javascript">
	google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawStuff);

      function drawStuff() {
		  
		
		  
        var data = new google.visualization.arrayToDataTable([
          ['Data', 'Ilość'],
          <?php echo $DaneChart3; ?>
        ]);

        var options = {
          title: 'Rejestracje uzytkowników z ostatniego tygodnia',
		  
          legend: { position: 'none', textStyle: { color: '#ffffff' } },
		  colors: ['#a2b4cf'],
		  hAxis: { textStyle: { color: '#ffffff' }, titleTextStyle: { color: '#ffffff' } },
		  titleTextStyle: { color: '#ffffff' },
		  tooltip: { textStyle: { color: '#ffffff' } },
		  vAxis: { textStyle: { color: '#ffffff' }, titleTextStyle: { color: '#ffffff' } },
          axes: {
            x: {
              0: { side: 'bottom', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('RejestracjeChartTydzien'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };

</script>
<div id="RejestracjeChartTydzien" style="width: 98%; height: 550px;color: #fff; background: rgba(000,000,000,0.3); padding: 10px;"><img src="/images/loadingru.gif" height="28" style="margin-left: 50%; margin-top: 10%;" /></div>

<div class="clearfix"></div>
</div>