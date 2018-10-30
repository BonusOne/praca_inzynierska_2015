<div class="divh2">Dodaj rezerwacje</div>

<form method="POST" action="<?php echo URL; ?>admin/rezerw_createDo" id="RezerCreate">
	<label for="kurs">Kurs: </label>
    		<select name="kurs" class="kurs">
    		
    		<?php foreach($this->get('kursData') as $key => $value) { 
				if($value['odwolany'] != 1) {
					echo '<option value="'.$value['idkurs'].'">'.$value['name'].'&nbsp;&nbsp;->&nbsp;&nbsp;'.$value['name1'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$value['datetime'].'</option>';
				}
			} ?>

        	</select>
    			<br />
    <label for="ilosc">Ilość miejsc: </label>
    			<input type="text" name="ilosc" class="UsCrIn" /><br />
        
    <input name="submit" type="submit" value="Dodaj rezerwacje" class="InputSend" />
</form>

<br />

<div id="Result"></div>
	<?php 
		echo $this->get('result'); 
	?>
<br />

<a href="/admin/rezerw" class="aback">&crarr; Powrót</a>