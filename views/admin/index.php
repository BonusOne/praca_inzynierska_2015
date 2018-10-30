
<?php 
/*<a href="/admin/user" class="admUDiv">Użytkownicy</a>
<br />
<a href="/admin/kursy" class="admUDiv">Kursy</a>
<br />
<a href="/admin/srodtrans" class="admUDiv">Środki transportu</a>
<br />
<a href="/admin/rezerw" class="admUDiv">Rezerwacje</a>
<br />
<a href="/admin/raporty" class="admUDiv">Raporty</a>
*/		
?>

<div class="divh2">Panel Administracyjny</div>
	
<div class="PaGlOne">
	<div class="imgs"><img src="/images/Dzis-Icon.png" alt="Dzisiejszych rezerwacji"></div>
    <div class="text">
    	<span id="PaGlTodayRez"><img src="/images/loadingru.gif" height="28" /></span>
        Dzisiejszych rezerwacji
    </div>
</div>

<div class="PaGlTwo">
	<div class="imgs"><img src="/images/Kurs-Icon.png" alt="Wykonanych kursów"></div>
    <div class="text">
    	<span id="PaGlTodayKurs"><img src="/images/loadingru.gif" height="28" /></span>
        Wykonanych dziś kursów
    </div>
</div>

<div class="clearfix"></div>

<div class="PaGlThree">
	<div class="imgs"><img src="/images/User-Icon.png" alt="Zarejestrowanych użytkowników"></div>
    <div class="text">
    	<span id="PaGlUser"><img src="/images/loadingru.gif" height="28" /></span>
        Zarejestrowanych użytkowników
    </div>
</div>

<div class="PaGlFour">
<div class="imgs"><img src="/images/Teczka-Icon.png" alt="Rezerwacji na najbliższe 7 dni"></div>
    <div class="text">
    	<span id="PaGl7days"><img src="/images/loadingru.gif" height="28" /></span>
        Rezerwacji na najbliższe 7 dni
    </div>
</div>

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