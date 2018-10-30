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
    <label for="ilmiej">Status: </label><select name="bloka" class="blokas">
        	<option value="0" selected>Gotowy</option>
            <option value="1">W naprawie</option>
            <option value="2">Na przeglądzie</option>
            <option value="3">Uszkodzony</option>
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