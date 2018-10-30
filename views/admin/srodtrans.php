<a href="/admin/srodtrans_create" class="admUDiv">
Dodaj środek transportu
</a>

<br /><br />

<a href="/admin/srodtransmod_create" class="admUDiv">
Dodaj model środka transportu
</a>

<br /><br />


<div class="divh2">Lista środków transportu</div>

<div id="AdmSrTrList">
<table cellpadding="5" cellspacing="0" id="ListST">
<tr>
	<th>ID</th>
    <th>Nazwa</th>
    <th>Ilość miejsc</th>
    <th>Rok produkcji</th>
    <th>Zablokowany</th>
</tr>
<?php  $row = 0 ?>
<?php foreach($this->get('stData') as $key => $value) { 
		echo '<tr class="'; 
			if($row==0){ echo "row0"; $row=1; } else { echo "row1"; $row=0; } if ($value['blokada']==1) { echo " red"; }; 
		echo '">';
		echo '<td style="text-align: center;">'.$value['idsrodtrans'].'</td>';
		echo '<td>'.$value['name'].'</td>';
		echo '<td style="text-align: center;">'.$value['iloscmiejsc'].'</td>';
		echo '<td style="text-align: center;">'.$value['rok'].'</td>';
		echo '<td style="text-align: center;">';
			if ($value['blokada']==1){ echo '<b>Tak</b>'; } else { echo 'Nie'; }
		echo '</td>';
		echo '</tr>';
} ?>
</table>
</div>

<br /><br />

<a href="/admin" class="aback">&crarr; Powrót</a>