<?php /* Smarty version Smarty-3.1.17, created on 2014-06-12 14:35:12
         compiled from "/vagrant/seminar2/templates/smjestaj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:720255033538e327797d3c6-82165346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a93d543a6637eb19dc7309f575a03c308a8de44' => 
    array (
      0 => '/vagrant/seminar2/templates/smjestaj.tpl',
      1 => 1402598065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '720255033538e327797d3c6-82165346',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538e3277b3ab00_14583268',
  'variables' => 
  array (
    'admin' => 1,
    'login' => 1,
    'username' => 1,
    'top' => 1,
    'smjestaj' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538e3277b3ab00_14583268')) {function content_538e3277b3ab00_14583268($_smarty_tpl) {?><!DOCTYPE HTML>

<html>
	<head>
		<title>Travel | Smještaj</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/smjestaj.js"></script>
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
									<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php if ($_smarty_tpl->tpl_vars[\'admin\']->value==1) {?>/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>

										<a href="admin.php">Admin panel</a>
									<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php }?>/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>

								</nav>
								<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php if ($_smarty_tpl->tpl_vars[\'login\']->value==1) {?>/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>

									<div id="username">
										Dobrodošli, <span><?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>
</span> <a href="odjava.php">Odjava</a>
									</div>
								<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php }?>/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>

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
							<div class="9u">
								
								<!-- Main Content -->
									<section>
										<header>
											<h2>Pretraživanje</h2>
											<h3>Pretrživanje smiještaja</h3>
										</header>
										<div class="forma-pretrazivanje">
											<form method="get" action="smjestaj.php">
												<div class="prvi-red">
													<label>Tip smještaja:</label>
													<select id="tip" size="1" name="tip">
														<option selected="" value="0">-- Nije bitno --</option>
														<option value="1">Soba</option>
														<option value="2">Apartman</option>
													</select>
												</div>
												<div class="prvi-red">
													<label>Županija:</label>
													<select id="zupanija" size="1" name="zupanija">
														<option selected="" value="0">-- Nije bitno --</option>
														<option value="1">Dubrovačko-neretvanska županija</option>
														<option value="2">Istarska županija</option>
														<option value="3">Ličko-senjska županija</option>
														<option value="4">Primorsko-goranska županija</option>
														<option value="5">Splitsko-dalmatinska županija</option>
														<option value="6">Šibensko-kninska županija</option>
														<option value="7">Zadarska županija</option>
													</select>
												</div>
												<div class="prvi-red">
													<label>Minimalna kategorija:</label>
													<select id="kategorija" size="1" name="kategorija">
														<option selected="" value="0">-- Nije bitno --</option>
														<option value="1">(1) *</option>
														<option value="2">(2) **</option>
														<option value="3">(3) ***</option>
														<option value="4">(4) ****</option>
														<option value="5">(5) *****</option>
													</select>
												</div><br />
												<div class="drugi-red">
													<label>Broj rezultata po stranici:</label>
													<select id="rez" size="1" name="rez">
														<option selected="" value="10">10</option>
														<option value="15">15</option>
														<option value="25">25</option>
														<option value="50">50</option>
													</select>
												</div>
												<div class="drugi-red">
													<label>Sortirano po:</label>
													<select id="sort" size="1" name="sort">
														<option selected="" value="1">Abecedno A->Z</option>
														<option value="2">Abecedno Z->A</option>
														<option value="3">Kategoriji 1->5</option>
														<option value="4">Kategoroji 5->1</option>
													</select>
												</div><br />
												<div class="treci-red">
													<label>Napredno pretraživanje</label>
													<input type="checkbox" name="napredno" id="napcheck">
												</div>
												<div id="napredno">
												<br />
												<div class="prvi-red">
													<label>Broj lezaja (minimalno):</label>
													<select id="lezaja" size="1" name="lezaja">
														<option selected="" value="0">-- Nije bitno --</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
													</select>
												</div>
												<div class="prvi-red">
													<label>Maksimalna udaljenosto od plaže:</label>
													<select id="plaza" size="1" name="plaza">
														<option selected="" value="0">-- Nije bitno --</option>
														<option value="50">50m</option>
														<option value="100">100m</option>
														<option value="250">250m</option>
														<option value="500">500m</option>
														<option value="1000">1km</option>
														<option value="2000">2km</option>
													</select>
												</div>
												<div class="prvi-red">
													<label>Maksimalna udaljenosto od centra:</label>
													<select id="centar" size="1" name="centar">
														<option selected="" value="0">-- Nije bitno --</option>
														<option value="50">50m</option>
														<option value="100">100m</option>
														<option value="250">250m</option>
														<option value="500">500m</option>
														<option value="1000">1km</option>
														<option value="2000">2km</option>
													</select>
												</div>
												<div class="prvi-red">
													<label>Maksimalna cijena nocenja:</label>
													<select id="nocenje" size="1" name="nocenje">
														<option selected="" value="0">-- Nije bitno --</option>
														<option value="30">30e</option>
														<option value="50">50e</option>
														<option value="75">75e</option>
														<option value="100">100e</option>
														<option value="200">200e</option>
														<option value="500">500e</option>
													</select>
												</div><br /><br /><br />
												<div class="prvi-red">
													<input name="parking" type="checkbox">
													<label>Parking</label><br />
													<input name="ljubimci" type="checkbox">
													<label>Dozvoljeni kućni ljubimci</label><br />
													<input name="rostilj" type="checkbox">
													<label>Roštilj</label><br />
													<input name="terasa" type="checkbox">
													<label>Terasa</label>
												</div>
												<div class="prvi-red zadnje">
													<input name="klima" type="checkbox">
													<label>Klima</label><br />
													<input name="tv" type="checkbox">
													<label>TV</label><br />
													<input name="telefon" type="checkbox">
													<label>Telefon</label><br />
													<input name="internet" type="checkbox">
													<label>Internet</label>
												</div>
												<br /><br /><br /><br /><br />
												</div>
												<div>
													<input class="posalji" type="submit" name="trazi" value="Pošalji">
												</div>
											</form>
										</div>
									</section>

							</div>
							<div class="3u">
								
								<!-- Sidebar -->
									<section>
										<header>
											<h2>Najpopularnije</h2>
										</header>
										<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php  $_smarty_tpl->tpl_vars[\'smjestaj\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'smjestaj\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'top\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'smjestaj\']->key => $_smarty_tpl->tpl_vars[\'smjestaj\']->value) {
$_smarty_tpl->tpl_vars[\'smjestaj\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'index\']->value = $_smarty_tpl->tpl_vars[\'smjestaj\']->key;
?>/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>

											<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'index\'])) $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable(null,true);if ($_smarty_tpl->tpl_vars[\'index\']->value = 0) {?>/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>

											<div class="side-section top-side">
												<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>
" class="bordered-feature-image"><img src="images/pic<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>
.jpg" alt="<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'naziv\'];?>
/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>
" /></a>
												<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>
" class="side-name"><?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'naziv\'];?>
/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>
</a>
											</div>
											<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php } else { ?>/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>

											<div class="side-section">
												<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>
" class="bordered-feature-image"><img src="images/pic<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>
.jpg" alt="<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'naziv\'];?>
/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>
" /></a>
												<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>
" class="side-name"><?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'naziv\'];?>
/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>
</a>
											</div>
											<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php }?>/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>

										<?php echo '/*%%SmartyNocache:720255033538e327797d3c6-82165346%%*/<?php } ?>/*/%%SmartyNocache:720255033538e327797d3c6-82165346%%*/';?>

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
