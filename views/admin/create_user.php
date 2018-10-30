<div class="divh2">Dodaj użytkownika</div>

<form method="POST" action="<?php echo URL; ?>admin/user_createDo" id="UserCreate">
	<label for="imie">Imię: </label><input type="text" name="imie" class="UsCrIn" /><br />
    <label for="nazwisko">Nazwisko: </label><input type="text" name="nazwisko" class="UsCrIn" /><br />
    <label for="email">Email: </label><input type="email" name="email" class="UsCrIn" /><br />
    <label for="pass1">Hasło: </label><input type="password" name="pass1" class="UsCrIn" /><br />
    <label for="pass2">Powtórz Hasło: </label><input type="password" name="pass2" class="UsCrIn" /><br />
    <?php if(Session::get('type') == 1) : ?>
    	<label for="type">Typ: </label><select name="typ">
        	<option value="3" selected>3</option>
            <option value="2">2</option>
            <option value="1">1</option>
        </select>
        <br />
    <?php endif; ?>
	
    <input name="submit" type="submit" value="Dodaj użytkownika" class="InputSend" />
</form>

<br />

<div id="Result"></div>
	<?php 
		echo $this->get('result'); 
	?>
<br />

<a href="/admin/user" class="aback">&crarr; Powrót</a>