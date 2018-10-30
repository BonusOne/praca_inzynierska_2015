<div class="divh2">Logowanie</div>

<form action="<?php echo URL; ?>login/loginDo" method="POST" id="LoginForm">
	<div class="LoginFormLab"><label for="login">Login: </label></div><input type="text" name="login" class="LoginFormInpu" />
    <div class="LoginFormLab"><label for="pass">Haslo: </label></div><input type="password" name="pass" class="LoginFormInpu" />
    
    <input type="submit" name="submit" value="Zaloguj" class="LoginInp" />
</form>
