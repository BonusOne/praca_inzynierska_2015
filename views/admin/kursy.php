<a href="/admin/kurs_create" class="admUDiv">
Dodaj kurs
</a>

<br /><br />


<div class="divh2">Lista kursów</div>

<div id="AdmKursList">
<table cellpadding="5" cellspacing="0" id="ListST">
<tr>
    <th>Miasto wyjazdu</th>
    <th>Miasto docelowe</th>
    <th>Data</th>
    <th>Środek Transportu</th>
    <th>Odwołany</th>
</tr>
<?php  $row = 0 ?>
<?php foreach($this->get('kursData') as $key => $value) { 
		echo '<tr class="'; 
			if($row==0){ echo "row0"; $row=1; } else { echo "row1"; $row=0; } if ($value['odwolany']==1) { echo " red"; }; 
		echo '">';
		echo '<td style="text-align: center;">'.$value['name'].'</td>';
		echo '<td style="text-align: center;">'.$value['name1'].'</td>';
		echo '<td style="text-align: center;">'.$value['datetime'].'</td>';
		echo '<td>'.$value['srtr'].'</td>';
		echo '<td style="text-align: center;">';
			if ($value['odwolany']==1){ echo '<b>Tak</b>'; } else { echo 'Nie'; }
		echo '</td>';
		echo '</tr>';
} ?>
</table>
</div>

<br /><br />

<a href="/admin" class="aback">&crarr; Powrót</a>