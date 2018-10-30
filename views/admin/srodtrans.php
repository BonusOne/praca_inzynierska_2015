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
	<th>LP</th>
    <th>Nazwa</th>
    <th>Ilość miejsc</th>
    <th>Rok produkcji</th>
    <th>Status</th>
    <th></th>
</tr>
<?php  $row = 0; $lp = 1; ?>
<?php foreach($this->get('stData') as $key => $value) { 
		echo '<tr class="'; 
			if($row==0){ echo "row0"; $row=1; } else { echo "row1"; $row=0; } if ($value['status']==1 or $value['status']==2 or $value['status']==3) { echo " red"; }; 
		echo '">';
		echo '<td style="text-align: center;">'.$lp.'</td>';
			$lp++;
		echo '<td>'.$value['name'].'</td>';
		echo '<td style="text-align: center;">'.$value['iloscmiejsc'].'</td>';
		echo '<td style="text-align: center;">'.$value['rok'].'</td>';
		echo '<td style="text-align: center;" class="changeStatus" rel="'.$value['idsrodtrans'].'">';
			echo '<form method="POST" action="" id="ChangeStats"><select name="stat" id="stat'.$value['idsrodtrans'].'">';
				echo '<option value="0" '; if ($value["status"]==0) { echo 'selected'; }; echo '>Gotowy</option>';
				echo '<option value="1" '; if ($value["status"]==1) { echo 'selected'; }; echo '>W naprawie</option>';
				echo '<option value="2" '; if ($value["status"]==2) { echo 'selected'; }; echo '>Na przeglądzie</option>';
				echo '<option value="3" '; if ($value["status"]==3) { echo 'selected'; }; echo '>Uszkodzony</option>';
			echo '</select></form>';
		echo '</td>';
		echo '<td style="text-align: center;"> <a href="" class="DelRow" rel="'.$value['idsrodtrans'].'">X</a> </td>';
		echo '</tr>';
} ?>
</table>
</div>

<br /><br />

<a href="/admin" class="aback">&crarr; Powrót</a>