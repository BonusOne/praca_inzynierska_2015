<tr>
    <th>Miasto wyjazdu</th>
    <th>Miasto docelowe</th>
    <th>Data</th>
    <th>Środek Transportu</th>
    <th>Odwołany</th>
</tr>
<?php  $row = 0 ?>
<?php foreach($this->get('kursDate') as $key => $value) { 
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
} ?>