<a href="/admin/rezerw_create" class="admUDiv">
Dodaj Rezerwacje
</a>

<br /><br />


<div class="divh2">Lista Rezerwacji</div>

<div id="AdmKursList">
<table cellpadding="5" cellspacing="0" id="ListST">
<tr>
    <th>ID</th>
    <th>ID user</th>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>E-mail</th>
    <th>Data</th>
    <th>Miasto wyjazdu</th>
    <th>Miasto docelowe</th>
    <th>Miejsc</th>
</tr>
<?php  $row = 0 ?>
<?php foreach($this->get('rezData') as $key => $value) { 
		echo '<tr class="'; 
			if($row==0){ echo "row0"; $row=1; } else { echo "row1"; $row=0; } ; 
		echo '">';
		echo '<td style="text-align: center;">'.$value['idrezerwacji'].'</td>';
		echo '<td style="text-align: center;">'.$value['iduser'].'</td>';
		echo '<td style="text-align: center;">'.$value['imie'].'</td>';
		echo '<td style="text-align: center;">'.$value['nazwisko'].'</td>';
		echo '<td>'.$value['email'].'</td>';
		echo '<td style="text-align: center;">'.$value['datetime'].'</td>';
		echo '<td style="text-align: center;">'.$value['name'].'</td>';
		echo '<td style="text-align: center;">'.$value['name1'].'</td>';
		echo '<td style="text-align: center;">'.$value['iloscmiejsc'].'</td>';
		echo '</tr>';
} ?>
</table>
</div>

<br /><br />

<a href="/admin" class="aback">&crarr; Powrót</a>