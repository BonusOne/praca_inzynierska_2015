
<div class="divh2">Zmiana hasła</div>

<form id="passwInsert" action="<?php echo URL; ?>panel/xhrInsert" method="post">
	<label for="oldpass">Stare hasło: </label><input name="oldpass" type="password" id="passwOld" />&nbsp;&nbsp;&nbsp;
	<label for="passw">Nowe hasło: </label><input name="passw" type="password" id="passwNew" />
    <input type="submit" name="submit" value="Zmień" class="InputSend" />    
</form>


<?php 
/*
echo	$_SESSION['iduser'];
echo	$_SESSION['email'];
echo	$_SESSION['imie'];
echo	$_SESSION['nazwisko'];
echo	$_SESSION['blokada'];
echo	$_SESSION['type'];
	*/		
?>

<br />
<div class="divh2">Historia rezerwacji</div>



<br />
<div class="divh2">Usuń konto</div>

<form id="deleteUser" action="<?php echo URL; ?>panel/userDelete" method="post">
	<input type="checkbox" name="delUsr" value="delUsr" /><label for="delUsr">&nbsp;Usuń konto</label>&nbsp;
    <input type="submit" name="submit" value="Usuń" class="InputSend" /> 
</form>
