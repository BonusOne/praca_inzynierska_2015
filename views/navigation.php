    <nav>
    	<div id="nav-in">
            <ul>
                <a href="/index" id="nav-glowna"><li>Strona główna</li></a>
                <a href="/rezerwacje" id="nav-rezer"><li>Rezerwacje</li></a>
                <a href="/onas" id="nav-onas"><li>O nas</li></a>
                <a href="/kontakt" id="nav-kontakt"><li>Kontakt</li></a>
                <?php if (Session::get('loggedIn') == true) : ?>
                    <?php if (Session::get('type') == 2 or Session::get('type') == 1) { ?>
                        <a href="/admin" id="nav-admin"><li>Administracja</li></a>
                    <?php } ?>
                <?php endif; ?>
            </ul>
        </div>
    </nav>