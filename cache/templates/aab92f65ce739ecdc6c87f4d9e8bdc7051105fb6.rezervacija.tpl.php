<?php /*%%SmartyHeaderCode:454659995539acd288bb628-52077596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aab92f65ce739ecdc6c87f4d9e8bdc7051105fb6' => 
    array (
      0 => '/vagrant/seminar2/templates/rezervacija.tpl',
      1 => 1402684970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '454659995539acd288bb628-52077596',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539b46fce45659_35168191',
  'variables' => 
  array (
    'admin' => 1,
    'login' => 1,
    'username' => 1,
    'ime' => 1,
    'i' => 1,
    'zauzeto' => 1,
    'index' => 1,
    'max' => 1,
    'datum' => 1,
    'idkorisnik' => 1,
    'idsmjestaj' => 1,
    'nocenje' => 1,
    'popust' => 1,
    'osobamax' => 1,
    'top' => 1,
    'smjestaj' => 1,
  ),
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539b46fce45659_35168191')) {function content_539b46fce45659_35168191($_smarty_tpl) {?><!DOCTYPE HTML>

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
		<script src="js/format.js"></script>
		<script src="js/rezervacija.js"></script>
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
										<header>
											<h2>Rezervacija</h2>
											<h3><?php echo $_smarty_tpl->tpl_vars['ime']->value;?>
</h3>
										</header>
										<div class="forma-pretrazivanje">
											<span id="rezerv">Smjestaj rezerviran: </span><br/>
											<?php if ($_smarty_tpl->tpl_vars['i']->value>0) {?>
												<?php  $_smarty_tpl->tpl_vars['datum'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datum']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['zauzeto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datum']->key => $_smarty_tpl->tpl_vars['datum']->value) {
$_smarty_tpl->tpl_vars['datum']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['datum']->key;
?>
													<?php if ($_smarty_tpl->tpl_vars['index']->value==$_smarty_tpl->tpl_vars['max']->value) {?>
														<p><?php echo $_smarty_tpl->tpl_vars['datum']->value['datumstart'];?>
-<?php echo $_smarty_tpl->tpl_vars['datum']->value['datumend'];?>
</p>
													<?php } else { ?>
														<span><?php echo $_smarty_tpl->tpl_vars['datum']->value['datumstart'];?>
-<?php echo $_smarty_tpl->tpl_vars['datum']->value['datumend'];?>
</span><br />
													<?php }?>
												<?php } ?>
											<?php } else { ?>
												<p><?php echo $_smarty_tpl->tpl_vars['zauzeto']->value;?>
</p>
											<?php }?>
											<form method="POST" action="rezervacija.php">
												<input type="hidden" name="idkorisnik" value="<?php echo $_smarty_tpl->tpl_vars['idkorisnik']->value;?>
"/>
												<input type="hidden" name="idsmjestaj" value="<?php echo $_smarty_tpl->tpl_vars['idsmjestaj']->value;?>
"/>
												<input type="hidden" name="nocenje" id="nocenje" value="<?php echo $_smarty_tpl->tpl_vars['nocenje']->value;?>
"/>
												<input type="hidden" name="popust" id="popust" value="<?php echo $_smarty_tpl->tpl_vars['popust']->value;?>
"/>
												<input type="text" 	name="datum" id="datum" placeholder="Datum dolaska" required/>
												<input type="number" min="3" max="14" name="dana" id="dana" placeholder="Broj dana" required/>
												<input type="number" min="1" max="<?php echo $_smarty_tpl->tpl_vars['osobamax']->value;?>
" name="osoba" id="osoba" placeholder="Broj osoba" required/>
												<br /><span id="cijena"></span><br />
												<input class="posalji" type="submit" name="trazi" value="Pošalji">
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
