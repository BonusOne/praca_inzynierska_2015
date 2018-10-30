<div class="divh2">Dodaj model środka transportu</div>

<form method="POST" action="<?php echo URL; ?>admin/srodtransmod_createDo" id="ModSTCreate">
	<label for="nazwa">Nazwa: </label><input type="text" name="nazwa" class="UsCrIn" /><br />
    <label for="ilmiej">Ilość miejsc: </label><input type="text" name="ilmiej" class="UsCrIn" /><br />
    <label for="rok">Rok: </label><input type="text" name="rok" class="UsCrIn" /><br />
	
    <input name="submit" type="submit" value="Dodaj model" class="InputSend" />
</form>

<br />

<div id="Result"></div>
	<?php 
		echo $this->get('result'); 
	?>
<br />

<a href="/admin/srodtrans" class="aback">&crarr; Powrót</a>