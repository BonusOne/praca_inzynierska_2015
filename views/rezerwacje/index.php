<div class="divh2">Rezerwacja</div>

<form method="POST" action="<?php echo URL; ?>rezerwacje/rezerw_addDo" id="RezerCreate">
	<label for="datakursu">Data kursu: </label>
    		<?php /*<select name="datakurs" class="datakurs" id="dataKursu">
            <?php foreach($this->get('kursDataDate') as $key => $value) { 
					echo '<option value="'.$value['data'].'">'.$value['data'].'</option>';
			} ?>            
            </select>*/ ?>
            <input type="text" name="datakurs" class="UsCrIn" id="datetimepickerS" value="Wybierz datę" />

      <label for="kurs">Kurs: </label>      
    		<select name="kurs" class="kurs" id="kurs">
    		
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
