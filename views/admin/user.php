<a href="/admin/user_create" class="admUDiv">
Stwórz nowego użytkownika
</a>

<br /><br />

<div class="divh2">Lista użytkowników</div>

<div id="AdmUsrList">
<table cellpadding="5" cellspacing="0" id="ListST">
<tr>
	<th>ID</th>
    <th>E-mail</th>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Data rejestracji</th>
    <th>Zablokowany</th>
    <th>Typ</th>
    <th></th>
</tr>
<?php  $row = 0 ?>
<?php foreach($this->get('userData') as $key => $value) { 
		echo '<tr class="'; 
			if($row==0){ echo "row0"; $row=1; } else { echo "row1"; $row=0; } if ($value['blokada']==1) { echo " red"; }; 
		echo '">';
		echo '<td style="text-align: center;">'.$value['iduser'].'</td>';
		echo '<td>'.$value['email'].'</td>';
		echo '<td style="text-align: center;">'.$value['imie'].'</td>';
		echo '<td style="text-align: center;">'.$value['nazwisko'].'</td>';
		echo '<td style="text-align: center;">'.$value['datarejestracji'].'</td>';
		echo '<td style="text-align: center;" class="changeBlok" rel="'.$value['iduser'].'">';
			echo '<form method="POST" action="" id="changeBloks"><select name="blokk" id="blokk'.$value['iduser'].'">';
				echo '<option value="0" '; if ($value["blokada"]==0) { echo 'selected'; }; echo '>Nie</option>';
				echo '<option value="1" '; if ($value["blokada"]==1) { echo 'selected'; }; echo '>Tak</option>';
			echo '</select></form>';
		echo '</td>';
		//echo '<td style="text-align: center;">';
		//	if ($value['blokada']==1){ echo '<b>Tak</b>'; } else { echo 'Nie'; }
		//echo '</td>';
		//echo '<td style="text-align: center;">'.$value['type'].'</td>';
		if(Session::get('type') == 1) { 
			echo '<td style="text-align: center;" class="changeType" rel="'.$value['iduser'].'">';
				echo '<form method="POST" action="" id="changeTypes"><select name="typs" id="typs'.$value['iduser'].'">';
					echo '<option value="1" '; if ($value["type"]==1) { echo 'selected'; }; echo '>1</option>';
					echo '<option value="2" '; if ($value["type"]==2) { echo 'selected'; }; echo '>2</option>';
					echo '<option value="3" '; if ($value["type"]==3) { echo 'selected'; }; echo '>3</option>';
				echo '</select></form>';
			echo '</td>';
		} else {
			echo '<td style="text-align: center;">'.$value['type'].'</td>';
		}
		echo '<td style="text-align: center;"> <a href="" class="DelRowUs" rel="'.$value['iduser'].'">X</a> </td>';
		echo '</tr>';
} ?>
</table>
</div>

<br /><br />

<a href="/admin" class="aback">&crarr; Powrót</a>