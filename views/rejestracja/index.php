<div class="divh2">Rejestracja</div>

<form method="POST" action="<?php echo URL; ?>rejestracja/rejestracjaDo" id="UserCreate">
	<label for="imie">Imię: </label><input type="text" name="imie" class="UsCrIn" /><br />
    <label for="nazwisko">Nazwisko: </label><input type="text" name="nazwisko" class="UsCrIn" /><br />
    <label for="email">Email: </label><input type="email" name="email" class="UsCrIn" /><br />
    <label for="pass1">Hasło: </label><input type="password" name="pass1" class="UsCrIn" /><br />
    <label for="pass2">Powtórz Hasło: </label><input type="password" name="pass2" class="UsCrIn" /><br />

    <input name="submit" type="submit" value="Rejestracja" class="InputSend" />
</form>

<br />

<div id="Result">
	<?php 
		echo $this->get('result'); 
	?>
</div>

