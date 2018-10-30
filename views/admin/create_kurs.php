<div class="divh2">Dodaj kurs</div>

<form method="POST" action="<?php echo URL; ?>admin/kurs_createDo" id="KursCreate">
	<label for="miastos">Miasto wyjazdu: </label>
    		<select name="miastos" class="kumiast">
    		
    		<?php foreach($this->get('miasData') as $key => $value) { 
					echo '<option value="'.$value['idmiasto'].'">'.$value['name'].'</option>';
			} ?>

        	</select>
    			<br />
    <label for="miastoc">Miasto docelowe: </label>
    			<select name="miastoc" class="kumiast">
    		
				<?php foreach($this->get('miasData') as $key => $value) { 
                        echo '<option value="'.$value['idmiasto'].'">'.$value['name'].'</option>';
                } ?>
    
                </select>
                <br />
    <label for="data">Data: </label><input type="text" name="data" class="UsCrIn" id="datetimepicker" /><br />
    <label for="srodtr">Środek transportu: </label><select name="srodtr">
    		
    		<?php foreach($this->get('stData') as $key => $value) { 
				if ($value['blokada']==0) {
					echo '<option value="'.$value['idsrodtrans'].'">'.$value['name'];
					echo '&nbsp;&nbsp;&nbsp;&nbsp;m:'.$value['iloscmiejsc'];
					echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$value['rok'];
					echo '</option>';
				}
			} ?>

        </select><br />
        
    <label for="odwolany">Odwołany: </label><select name="odwolany" class="odwo">
        	<option value="0" selected>Nie</option>
            <option value="1">Tak</option>
        </select>
        <br />
	
    <input name="submit" type="submit" value="Dodaj kurs" class="InputSend" />
</form>

<br />

<div id="Result"></div>
	<?php 
		echo $this->get('result'); 
	?>
<br />

<a href="/admin/kursy" class="aback">&crarr; Powrót</a>