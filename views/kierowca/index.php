
<?php 
/*<a href="/admin/user" class="admUDiv">Użytkownicy</a>
<br />
<a href="/admin/kursy" class="admUDiv">Kursy</a>
<br />
<a href="/admin/srodtrans" class="admUDiv">Środki transportu</a>
<br />
<a href="/admin/rezerw" class="admUDiv">Rezerwacje</a>
<br />
<a href="/admin/raporty" class="admUDiv">Raporty</a>
*/		
?>

<div class="divh2">Panel Kierowcy</div>
	
<form method="POST" action="" id="RezerShow">
	<label for="datakursu">Data kursu: </label>
    		<?php /*<select name="datakurs" class="datakurs" id="dataKursu">
            <?php foreach($this->get('kursDataDate') as $key => $value) { 
					echo '<option value="'.$value['data'].'">'.$value['data'].'</option>';
			} ?>            
            </select>*/ ?>
            <input type="text" name="datakurs" class="UsCrIn" id="datetimepickerS" value="Wybierz datę" />

      <label for="kurs">Kurs: </label>      
    		<select name="kurs" class="kurs" id="kurs">
    		
	       	</select>
    			<br />

    <input value="Pokaż rezerwacje" name="InputSend" id="InputSend" class="InputSend" type="button" />
</form>

<div id="kierowcaRezerwList" style="margin-top: 5px;">
<table cellpadding="5" cellspacing="0" id="ListST">
<tr>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Ilość miejsc</th>
    <th>Potwierdzenie</th>
</tr>
<?php  /*$row = 0 ?>
<?php foreach($this->get('kursData') as $key => $value) { 
		echo '<tr class="'; 
			if($row==0){ echo "row0"; $row=1; } else { echo "row1"; $row=0; } if ($value['odwolany']==1) { echo " red"; }; 
		echo '">';
		echo '<td style="text-align: center;">'.$value['name'].'</td>';
		echo '<td style="text-align: center;">'.$value['name1'].'</td>';
		echo '<td style="text-align: center;">'.$value['datetime'].'</td>';
		echo '<td>'.$value['srtr'].'</td>';
		echo '<td style="text-align: center;" class="changeOdwolany" rel="'.$value['idkurs'].'">';
			echo '<form method="POST" action="" id="changeOdwolanys"><select name="odwo" id="odwo'.$value['idkurs'].'">';
				echo '<option value="0" '; if ($value["odwolany"]==0) { echo 'selected'; }; echo '>Nie</option>';
				echo '<option value="1" '; if ($value["odwolany"]==1) { echo 'selected'; }; echo '>Tak</option>';
			echo '</select></form>';
		echo '</td>';
		echo '</tr>';
} */?>
</table>
</div>