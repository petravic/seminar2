<?php /*%%SmartyHeaderCode:171198482539abc4c029f04-82757065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5944de2ed30ea322b6a9700041172435e33cf0e0' => 
    array (
      0 => '/vagrant/seminar2/templates/smjestajpregled.tpl',
      1 => 1402652504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171198482539abc4c029f04-82757065',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539b4055e78268_07522374',
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539b4055e78268_07522374')) {function content_539b4055e78268_07522374($_smarty_tpl) {?><!DOCTYPE HTML>

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
		<style>
			.rezultat{
				border-bottom: none;
			}
			.slika-rez{
				width: 262px;
				height: 160px;
				margin-top: 0px;
				margin-right: 50px;
			}
			.posalji{
				margin-left: 15px;
				font-size: 1.2em;
			}
		</style>
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
									<?php if ($_smarty_tpl->tpl_vars['admin']->value==1) {?>
										<a href="admin.php">Admin panel</a>
									<?php }?>
								</nav>
								<?php if ($_smarty_tpl->tpl_vars['login']->value==1) {?>
									<div id="username">
										Dobrodošli, <span><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span> <a href="odjava.php">Odjava</a>
									</div>
								<?php }?>
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
										<?php  $_smarty_tpl->tpl_vars['rezultat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rezultat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['smjestaj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rezultat']->key => $_smarty_tpl->tpl_vars['rezultat']->value) {
$_smarty_tpl->tpl_vars['rezultat']->_loop = true;
?>
											<header>
												<h2><?php echo $_smarty_tpl->tpl_vars['rezultat']->value['naziv'];?>
</h2>
											</header>
											<div class="rezultat">
												<a href="#" class="bordered-feature-image slika-rez"><img src="images/pic<?php echo $_smarty_tpl->tpl_vars['rezultat']->value['id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rezultat']->value['naziv'];?>
" /></a>
												<p><?php echo $_smarty_tpl->tpl_vars['rezultat']->value['tip'];?>
 <?php echo $_smarty_tpl->tpl_vars['rezultat']->value['kategorija'];?>
</p>
												<p class="rez-raz"><?php echo $_smarty_tpl->tpl_vars['rezultat']->value['adresa'];?>
, <?php echo $_smarty_tpl->tpl_vars['rezultat']->value['mjesto'];?>
</p>
												<p>Osnovnih ležajeva: <?php echo $_smarty_tpl->tpl_vars['rezultat']->value['lezaja'];?>
</p>
												<p class="rez-raz">Pomoćnih ležajeva: <?php echo $_smarty_tpl->tpl_vars['rezultat']->value['pomlezaja'];?>
</p>
												<p>Udaljenost od plaže: <?php echo $_smarty_tpl->tpl_vars['rezultat']->value['plaza'];?>
</p>
												<p class="rez-raz">Udaljenost od centra: <?php echo $_smarty_tpl->tpl_vars['rezultat']->value['centar'];?>
</p>
												<p>Parkiralište <?php if ($_smarty_tpl->tpl_vars['rezultat']->value['parking']==1) {?><img src="images/true.png" alt="true" /><?php } else { ?><img src="images/false.png" alt="false" /><?php }?></p>
												<p>Dozvoljeni kućni ljubimci <?php if ($_smarty_tpl->tpl_vars['rezultat']->value['ljubimci']==1) {?><img src="images/true.png" alt="true" /><?php } else { ?><img src="images/false.png" alt="false" /><?php }?></p>
												<p>Upotreba roštilja <?php if ($_smarty_tpl->tpl_vars['rezultat']->value['rostilj']==1) {?><img src="images/true.png" alt="true" /><?php } else { ?><img src="images/false.png" alt="false" /><?php }?></p>
												<p>Klima <?php if ($_smarty_tpl->tpl_vars['rezultat']->value['klima']==1) {?><img src="images/true.png" alt="true" /><?php } else { ?><img src="images/false.png" alt="false" /><?php }?></p>
												<p>TV <?php if ($_smarty_tpl->tpl_vars['rezultat']->value['tv']==1) {?><img src="images/true.png" alt="true" /><?php } else { ?><img src="images/false.png" alt="false" /><?php }?></p>
												<p>Telefon <?php if ($_smarty_tpl->tpl_vars['rezultat']->value['tel']==1) {?><img src="images/true.png" alt="true" /><?php } else { ?><img src="images/false.png" alt="false" /><?php }?></p>
												<p>Terasa <?php if ($_smarty_tpl->tpl_vars['rezultat']->value['terasa']==1) {?><img src="images/true.png" alt="true" /><?php } else { ?><img src="images/false.png" alt="false" /><?php }?></p>
												<p class="rez-raz">Internet <?php if ($_smarty_tpl->tpl_vars['rezultat']->value['internet']==1) {?><img src="images/true.png" alt="true" /><?php } else { ?><img src="images/false.png" alt="false" /><?php }?></p>
												<p>Kontakt</p>
												<p><?php echo $_smarty_tpl->tpl_vars['rezultat']->value['kontakt'];?>
</p>
												<p>Email: <?php echo $_smarty_tpl->tpl_vars['rezultat']->value['email'];?>
</p>
												<p class="rez-raz">Telefon: <?php echo $_smarty_tpl->tpl_vars['rezultat']->value['telefon'];?>
</p>
												<p>Noćenje: <?php echo $_smarty_tpl->tpl_vars['rezultat']->value['nocenje'];?>
&euro;</p>
												<a class="posalji" href="rezervacija.php?id=<?php echo $_smarty_tpl->tpl_vars['rezultat']->value['id'];?>
">Rezerviraj</a>
											</div>
										<?php } ?>
									</section>

							</div>
							<div class="3u">
								
								<!-- Sidebar -->
									<section>
										<header>
											<h2>Najpopularnije</h2>
										</header>
										<?php  $_smarty_tpl->tpl_vars['smjestaj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['smjestaj']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['top']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['smjestaj']->key => $_smarty_tpl->tpl_vars['smjestaj']->value) {
$_smarty_tpl->tpl_vars['smjestaj']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['smjestaj']->key;
?>
											<?php if (!isset($_smarty_tpl->tpl_vars['index'])) $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null,true);if ($_smarty_tpl->tpl_vars['index']->value = 0) {?>
											<div class="side-section top-side">
												<a href="smjestaj.php?id=<?php echo $_smarty_tpl->tpl_vars['smjestaj']->value['id'];?>
" class="bordered-feature-image"><img src="images/pic<?php echo $_smarty_tpl->tpl_vars['smjestaj']->value['id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['smjestaj']->value['naziv'];?>
" /></a>
												<a href="smjestaj.php?id=<?php echo $_smarty_tpl->tpl_vars['smjestaj']->value['id'];?>
" class="side-name"><?php echo $_smarty_tpl->tpl_vars['smjestaj']->value['naziv'];?>
</a>
											</div>
											<?php } else { ?>
											<div class="side-section">
												<a href="smjestaj.php?id=<?php echo $_smarty_tpl->tpl_vars['smjestaj']->value['id'];?>
" class="bordered-feature-image"><img src="images/pic<?php echo $_smarty_tpl->tpl_vars['smjestaj']->value['id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['smjestaj']->value['naziv'];?>
" /></a>
												<a href="smjestaj.php?id=<?php echo $_smarty_tpl->tpl_vars['smjestaj']->value['id'];?>
" class="side-name"><?php echo $_smarty_tpl->tpl_vars['smjestaj']->value['naziv'];?>
</a>
											</div>
											<?php }?>
										<?php } ?>
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
