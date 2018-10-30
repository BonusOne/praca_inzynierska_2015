<!DOCTYPE html>
<html>
<head>
	<title>SRMŚT - v.1.2</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="/css/jquery-ui.structure.min.css" />
    <link rel="stylesheet" href="/css/jquery-ui.theme.min.css" />
    <link rel="stylesheet" href="/css/jquery.datetimepicker.css" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/js.js"></script>
    <?php
		if (isset($this->js)) {
			foreach ($this->js as $js) {
				echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
			}
		}
		if (isset($this->chartAPI)) {
			if ($this->chartAPI == true) {
				echo '<script type="text/javascript" src="https://www.google.com/jsapi"></script>';
			}
		}
	?>
</head>
    
<body>

    <header><div id="header-in">
    	<div class="he-in-l">
        	<img src="/images/logo.png" alt="PawelBus-Logo" class="logo" />
        </div>
        <div class="he-in-p">
			<?php if (Session::get('loggedIn') == true) : ?>
                <div class="user">
                    Cześć, <?php echo (Session::get('imie')); ?>
                    <?php if(Session::get('type') == 1) : ?>
                    <br /><span class="spanadmin">(Administracja)</span>
                    <?php elseif(Session::get('type') == 2) : ?>
                    <br /><span class="spanadmin">(Obsługa systemu)</span>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="clearfix"></div>
            <div class="nav-rig">
                <?php if (Session::get('loggedIn') == true) : ?>
                    <a href="/panel" id="nav-panel"><img src="/images/Access-Icon.png" alt="Panel"><br />Panel</a>
                    <a href="/panel/logout" id="nav-log"><img src="/images/Key-Icon.png" alt="Wyloguj"><br />Wyloguj</a>
                <?php else : ?>
                	<a href="/rejestracja" id="nav-log"><img src="/images/Register-Icon.png" alt="Wyloguj"><br />Rejestracja</a>
                    <a href="/login" id="nav-log"><img src="/images/Key-Icon.png" alt="Wyloguj"><br />Zaloguj</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div></header>
    <div class="clearfix"></div>
<div id="all">
	<?php 
		
		require 'navigation_admin.php';
		require 'navigation_admin_l.php';
		
	?>
    
    <section id="content">
    	<div id="content-in">