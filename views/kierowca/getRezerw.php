<tr>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Ilość miejsc</th>
    <th>Potwierdzenie</th>
</tr>
<?php  $row = 0 ?>
<?php foreach($this->get('RezerwDate') as $key => $value) { 
		echo '<tr class="'; 
			if($row==0){ echo "row0"; $row=1; } else { echo "row1"; $row=0; } if ($value['potwierdzona']==2) { echo " red"; }; 
		echo '">';
		echo '<td style="text-align: center;">'.$value['imie'].'</td>';
		echo '<td style="text-align: center;">'.$value['nazwisko'].'</td>';
		echo '<td style="text-align: center;">'.$value['iloscmiejsc'].'</td>';
		echo '<td style="text-align: center;" class="changePotwierdz" rel="'.$value['idrezerwacji'].'">';
			echo '<form method="POST" action="" id="changePotwierdzenie"><select name="potw" id="potw'.$value['idrezerwacji'].'">';
				echo '<option value="0" '; if ($value["potwierdzona"]==0) { echo 'selected'; }; echo '>Oczekuje</option>';
				echo '<option value="1" '; if ($value["potwierdzona"]==1) { echo 'selected'; }; echo '>Potwierdzona</option>';
				echo '<option value="2" '; if ($value["potwierdzona"]==2) { echo 'selected'; }; echo '>Niepotwierdzona</option>';
			echo '</select></form>';
		echo '</td>';
		echo '</tr>';
} ?>