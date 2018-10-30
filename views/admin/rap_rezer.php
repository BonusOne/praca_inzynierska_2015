
<div class="divh2">Raporty - Rezerwacje</div>
<div class="RapRezerw">

<div class="PaReOne">
    <div class="text">
    	<span id="CountRezerwacje" style="height: 36px;">
        <img src="/images/loadingru.gif" height="28" />
        </span>
        Rezerwacji na dziś
    </div>
</div>

<div class="PaReTwo">
    <div class="text">
    	<span id="CountRezerwacjePot" style="height: 36px;">
        <img src="/images/loadingru.gif" height="28" />
        </span>
        Potwierdzonych rezerwacji na dziś
    </div>
</div>

<div class="PaReThree">
    <div class="text">
    	<span id="CountRezerwacjeNiePot" style="height: 36px;">
        <img src="/images/loadingru.gif" height="28" />
        </span>
        Niepotwierdzonych rezerwacji na dziś
    </div>
</div>








<div class="clearfix"></div>
<?php 
	$i = 0;
	$DaneChart1='';
	foreach($this->get('RezerwacjeKwartal') as $key => $value) {
		
		$DaneChart1 .= '["'.$value["data"].'", '.$value["ilosc"].']';
		
		if ( count($this->get('RezerwacjeKwartal'))-1>$i++){
		$DaneChart1 .=',';
		}
	};
	//echo $DaneChart1;
	//echo '<pre>';
	//echo json_encode($this->get('Rezerwacje'));
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
          title: 'Rezerwacje z ostatniego kwartalu',
		  
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

        var chart = new google.charts.Bar(document.getElementById('RezerwacjeChartKwartal'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };

</script>
<div id="RezerwacjeChartKwartal" style="width: 98%; height: 550px;color: #fff; background: rgba(000,000,000,0.3); padding: 10px;">
<img src="/images/loadingru.gif" height="28" style="margin-left: 50%; margin-top: 10%;" />
</div>


<div class="clearfix" style="margin-top: 20px;"></div>
<?php 
	$i = 0;
	$DaneChart2='';
	foreach($this->get('RezerwacjeMiesiac') as $key => $value) {
		
		$DaneChart2 .= '["'.$value["data"].'", '.$value["ilosc"].']';
		
		if ( count($this->get('RezerwacjeMiesiac'))-1>$i++){
		$DaneChart2 .=',';
		}
	};
	//echo $DaneChart1;
	//echo '<pre>';
	//echo json_encode($this->get('Rezerwacje'));
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
          title: 'Rezerwacje z ostatniego miesiaca',
		  
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
	foreach($this->get('RezerwacjeTydzien') as $key => $value) {
		
		$DaneChart3 .= '["'.$value["data"].'", '.$value["ilosc"].']';
		
		if ( count($this->get('RezerwacjeTydzien'))-1>$i++){
		$DaneChart3 .=',';
		}
	};
	//echo $DaneChart1;
	//echo '<pre>';
	//echo json_encode($this->get('Rezerwacje'));
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
          title: 'Rezerwacje z ostatniego tygodnia',
		  
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