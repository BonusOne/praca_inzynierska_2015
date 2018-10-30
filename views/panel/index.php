
<div class="divh2">Zmiana hasła</div>

<form id="passwInsert" action="<?php echo URL; ?>panel/xhrInsert" method="post">
	<label for="oldpass">Stare hasło: </label><input name="oldpass" type="password" id="passwOld" />&nbsp;&nbsp;&nbsp;
	<label for="passw">Nowe hasło: </label><input name="passw" type="password" id="passwNew" />
    <input type="submit" name="submit" value="Zmień" class="InputSend" />    
</form>


<?php 
/*
echo	$_SESSION['iduser'];
echo	$_SESSION['email'];
echo	$_SESSION['imie'];
echo	$_SESSION['nazwisko'];
echo	$_SESSION['blokada'];
echo	$_SESSION['type'];
	*/		
?>

<br />
<div class="divh2">Historia rezerwacji</div>

<div id="UsrRezList">
<table cellpadding="5" cellspacing="0" id="ListRez">
<tr>
	<th>LP</th>
    <th>Data Kursu</th>
    <th>Miasto startu</th>
    <th>Miasto docelowe</th>
    <th>Miejsc</th>
    <th>Data rezerwacji</th>
    <th>Kurs Odwołany</th>
</tr>
<?php  $row = 0; $lp = 1; ?>
<?php foreach($this->get('rezData') as $key => $value) { 
		echo '<tr class="'; 
		
			if($row==0){ 
				echo "row0"; $row=1; 
			} else { echo "row1"; $row=0; } 
			
			if ($value['odwolany']==1) {
					   echo " red";
			}; 
			
			if ( $value['data'] >  $value['datakursu']) {
					   if ( $value['potwierdzona']==1 ) {
						   echo " potwierdz";
					   } else {
						   echo " niepoteirdz";
					   }
			}; 			
			
		echo '">';
		echo '<td style="text-align: center;">'.$lp.'</td>';
			$lp++;
		echo '<td style="text-align: center;">'.$value['datakursu'].'</td>';
		echo '<td style="text-align: center; background-color: rgba(000,000,000,0.13);">'.$value['miasto_s'].'</td>';
		echo '<td style="text-align: center; background-color: rgba(000,000,000,0.13);">'.$value['miasto_d'].'</td>';
		echo '<td style="text-align: center;">'.$value['iloscmiejsc'].'</td>';
		echo '<td style="text-align: center;">'.$value['datarezerwacji'].'</td>';
		echo '<td style="text-align: center;">'; 
		if ($value['odwolany']==1) { 
			echo "TAK"; 
		} else { 
			echo "Nie"; 
		};
		echo '</td>';
		echo '</tr>';
} ?>
</table>
</div>

<br />
<div class="divh2">Usuń konto</div>

<form id="deleteUser" action="<?php echo URL; ?>panel/userDelete" method="post">
	<input type="checkbox" name="delUsr" value="delUsr" /><label for="delUsr">&nbsp;Usuń konto</label>&nbsp;
    <input type="submit" name="submit" value="Usuń" class="InputSend" /> 
</form>
