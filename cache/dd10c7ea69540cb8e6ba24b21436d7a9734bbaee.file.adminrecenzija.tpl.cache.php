<?php /* Smarty version Smarty-3.1.17, created on 2014-06-12 07:19:18
         compiled from "/vagrant/seminar2/templates/adminrecenzija.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1248421922538dfdeaa3d693-52532019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd10c7ea69540cb8e6ba24b21436d7a9734bbaee' => 
    array (
      0 => '/vagrant/seminar2/templates/adminrecenzija.tpl',
      1 => 1402571940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1248421922538dfdeaa3d693-52532019',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538dfdeac07193_78185406',
  'variables' => 
  array (
    'admin' => 1,
    'login' => 1,
    'username' => 1,
    'recenzije' => 1,
    'index' => 1,
    'recenzija' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538dfdeac07193_78185406')) {function content_538dfdeac07193_78185406($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
	<head>
		<title>Travel | Admin</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/format.js"></script>
		<script src="js/adminrecenzija.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	</head>
	<body class="subpage">

		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Logo -->
								<h1><a href="" id="logo">Travel </a></h1>
							
							<!-- Nav -->
								<nav id="nav">
									<a href="index.php">Početna</a>
									<a href="smjestaj.php">Smještaj</a>
									<a href="popusti.php">Specijalne ponude</a>
									<a href="profil.php">Moj profil</a>
									<a href="kontakt.php">Kontakt</a>
									<!-- samo admin ce vidjet link -->
									<?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php if ($_smarty_tpl->tpl_vars[\'admin\']->value==1) {?>/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>

										<a href="admin.php">Admin panel</a>
									<?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php }?>/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>

								</nav>
								<?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php if ($_smarty_tpl->tpl_vars[\'login\']->value==1) {?>/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>

									<div id="username">
										Dobrodošli, <span><?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>
</span> <a href="odjava.php">Odjava</a>
									</div>
								<?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php }?>/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>

								<div class="lang">
									<a href="">
										<img src="images/hr.png" alt="hrvatski" title="hrvatski" />
									</a>
									<a href="">
										<img src="images/us.png" alt="engleski" title="engleski" />
									</a>
								</div>
						</div>
					</div>
				</header>
			</div>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<div class="3u">
								
								<!-- Sidebar -->
									<section>
										<header>
											<h2>Upravljanje</h2>
										</header>
										<ul class="link-list">
											<li><a href="admin.php?page=smjestaj">Dodavanje smještaja</a></li>
											<li><a href="admin.php?page=popust">Upravljanje popustina</a></li>
											<li><a href="admin.php?page=recenzija">Upravljanje recenziama</a></li>
											<li><a href="admin.php?page=korisnici">Upravljanje korisnicima</a></li>
											<li><a href="admin.php?page=poruke">Poruke korisnika</a></li>
										</ul>
									</section>
							</div>
							<div class="9u skel-cell-important">
								
								<!-- Main Content -->
									<section>
										<header>
											<h2>Upravljanje recenzijama</h2>
										</header>
										<div>
											<table id="tablica">
												<tr><td>#</td><td>Korisnik</td><td>Smještaj</td><td>Tekst</td><td>Ocjena</td><td>Uredi</td><td>Obriši</td></tr>
												<?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php  $_smarty_tpl->tpl_vars[\'recenzija\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'recenzija\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'recenzije\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'recenzija\']->key => $_smarty_tpl->tpl_vars[\'recenzija\']->value) {
$_smarty_tpl->tpl_vars[\'recenzija\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'index\']->value = $_smarty_tpl->tpl_vars[\'recenzija\']->key;
?>/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>

													<tr><td><?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php echo $_smarty_tpl->tpl_vars[\'index\']->value;?>
/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php echo $_smarty_tpl->tpl_vars[\'recenzija\']->value[\'username\'];?>
/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php echo $_smarty_tpl->tpl_vars[\'recenzija\']->value[\'naziv\'];?>
/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>
</td><td id="<?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php echo $_smarty_tpl->tpl_vars[\'recenzija\']->value[\'id\'];?>
/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>
t"><?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php echo $_smarty_tpl->tpl_vars[\'recenzija\']->value[\'tekst\'];?>
/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>
</td><td id="<?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php echo $_smarty_tpl->tpl_vars[\'recenzija\']->value[\'id\'];?>
/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>
o"><?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php echo $_smarty_tpl->tpl_vars[\'recenzija\']->value[\'ocjena\'];?>
/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>
</td><td><button class='spremi' rel="<?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php echo $_smarty_tpl->tpl_vars[\'recenzija\']->value[\'id\'];?>
/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>
" type='button'>Spremi</button><button class='odustani' rel="<?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php echo $_smarty_tpl->tpl_vars[\'recenzija\']->value[\'id\'];?>
/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>
" type='button'>Odustani</button><button id="<?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php echo $_smarty_tpl->tpl_vars[\'recenzija\']->value[\'id\'];?>
/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>
" class="uredi" type="button">Uredi</button></td><td><button id="<?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php echo $_smarty_tpl->tpl_vars[\'recenzija\']->value[\'id\'];?>
/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>
" class="brisanje" type="button">Obriši</button></td></tr>
												<?php echo '/*%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/<?php } ?>/*/%%SmartyNocache:1248421922538dfdeaa3d693-52532019%%*/';?>

											</table>
											<br />
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<div class="row">
						<div class="8u">
						
							<!-- Links -->
								<section>
									<h2>Drustvene mreže, linkovi, plačanje, kontakt</h2>
									<div>
										<div class="row">
											<div class="3u">
												<ul class="link-list last-child">
													<li><a href="https://www.facebook.com">Facebook</a></li>
													<li><a href="https://twitter.com">Twitter</a></li>
													<li><a href="www.google.com">Google+</a></li>
													<li><a href="www.google.com">Youtube</a></li>
												</ul>
											</div>
											<div class="3u">
												<ul class="link-list last-child">
													<li><a href="www.adriaticseatours.com">Adriatic Sea Tours</a></li>
													<li><a href="www.apartmani-makarska.net">Apartmani Makarska</a></li>
													<li><a href="www.adriaday.com">Adria day</a></li>
													<li><a href="www.slusalica.com">Slusalica</a></li>
												</ul>
											</div>
											<div class="3u">
												<ul class="link-list last-child">
													<li>Visa</li>
													<li>Mastercard</li>
													<li>Maestro</li>
													<li>American</li>
												</ul>
											</div>
											<div class="3u">
												<ul class="link-list last-child">
													<li>Adresa: Stjepana Radića 32</li>
													<li>10000 Zagreb</li>
													<li>Email: info@travel.com </li>
													<li>OIB: 99784461973</li>
													<li>Tel: 098/982-4046</li>
												</ul>
											</div>
										</div>
									</div>
								</section>

						</div>
						<div class="4u">
							
							<!-- Blurb -->
								<section>
									<h2>Info</h2>
									<p>
										Apartmani i sobe te općenito privatni smještaj pruža mogućnost za turizam po mjeri svakog pojedinca i njegove obitelji. Imamo ponudu smještaja u kojoj su odlično opremljeni apartmani , sobe i kuće uz dodatnu ponudu kao što su plivanje , jedrenje , ronjenje , surfanje , daskanje , razni sportovi na vodi, zdrava hrana, domaća kuhinja i drugo.
									</p>
								</section>
						
						</div>
					</div>
				</footer>
			</div>

		<!-- Copyright -->
			<div id="copyright">
				&copy; Travel. All rights reserved. | Design: HTML5 UP
			</div>

	</body>
</html><?php }} ?>
