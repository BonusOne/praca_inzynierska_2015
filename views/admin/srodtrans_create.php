<div class="divh2">Dodaj środek transportu</div>

<?php /*foreach($this->get('stData') as $key => $value) { 
	
	echo $value['name'];

} */?>



<form method="POST" action="<?php echo URL; ?>admin/srodtrans_createDo" id="STCreate">
	<label for="nazwa">Model: </label><select name="id">
        	<option value="" selected></option>
            <?php foreach($this->get('stmData') as $key => $value) { 
					echo '<option value="'.$value['idmodel'].'">';
					echo $value['name'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m:'.$value['iloscmiejsc'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$value['rok'];
					echo '</option>';
			} ?>
        </select>
    
    <br />
    <label for="ilmiej">Zablokowany: </label><select name="bloka" class="blokas">
        	<option value="0" selected>0</option>
            <option value="1">1</option>
        </select><br />
	
    <input name="submit" type="submit" value="Dodaj środek transportu" class="InputSend" />
</form>

<br />

<div id="Result"></div>
	<?php 
		echo $this->get('result'); 
	?>
<br />

<a href="/admin/srodtrans" class="aback">&crarr; Powrót</a>