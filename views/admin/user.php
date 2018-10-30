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
    <th>Zablokowany</th>
    <th>Typ</th>
</tr>
<?php  $row = 0 ?>
<?php foreach($this->get('userData') as $key => $value) { 
		echo '<tr class="'; 
			if($row==0){ echo "row0"; $row=1; } else { echo "row1"; $row=0; }; 
		echo '">';
		echo '<td style="text-align: center;">'.$value['iduser'].'</td>';
		echo '<td>'.$value['email'].'</td>';
		echo '<td style="text-align: center;">'.$value['imie'].'</td>';
		echo '<td style="text-align: center;">'.$value['nazwisko'].'</td>';
		echo '<td style="text-align: center;">';
			if ($value['blokada']==1){ echo '<b>Tak</b>'; } else { echo 'Nie'; }
		echo '</td>';
		echo '<td style="text-align: center;">'.$value['type'].'</td>';
		echo '</tr>';
} ?>
</table>
</div>

<br /><br />

<a href="/admin" class="aback">&crarr; Powrót</a>