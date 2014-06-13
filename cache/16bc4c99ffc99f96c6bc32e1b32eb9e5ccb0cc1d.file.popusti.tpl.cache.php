<?php /* Smarty version Smarty-3.1.17, created on 2014-06-13 16:36:55
         compiled from "/vagrant/seminar2/templates/popusti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1092050784538e334ac6c858-39207588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16bc4c99ffc99f96c6bc32e1b32eb9e5ccb0cc1d' => 
    array (
      0 => '/vagrant/seminar2/templates/popusti.tpl',
      1 => 1402691739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1092050784538e334ac6c858-39207588',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538e334ae5cd29_82997006',
  'variables' => 
  array (
    'admin' => 1,
    'login' => 1,
    'username' => 1,
    'popusti' => 1,
    'popust' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538e334ae5cd29_82997006')) {function content_538e334ae5cd29_82997006($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
	<head>
		<title>Travel | Specijalne ponude</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/jezik.js"></script>
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
									<?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php if ($_smarty_tpl->tpl_vars[\'admin\']->value==1) {?>/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>

										<a href="admin.php">Admin panel</a>
									<?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php }?>/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>

								</nav>
								<?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php if ($_smarty_tpl->tpl_vars[\'login\']->value==1) {?>/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>

									<div id="username">
										Dobrodošli, <span><?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>
</span> <a href="odjava.php">Odjava</a>
									</div>
								<?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php }?>/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>

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
							<?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php  $_smarty_tpl->tpl_vars[\'popust\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'popust\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'popusti\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'popust\']->key => $_smarty_tpl->tpl_vars[\'popust\']->value) {
$_smarty_tpl->tpl_vars[\'popust\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'index\']->value = $_smarty_tpl->tpl_vars[\'popust\']->key;
?>/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>

							<div class="4u">
								
								<!-- Sidebar -->
									<section>
										<header>
											<h2><?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php echo $_smarty_tpl->tpl_vars[\'popust\']->value[\'naziv\'];?>
/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>
</h2>
										</header>
										<div class="side-section top-side">
											<a href="#" class="bordered-feature-image"><img src="images/pic<?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php echo $_smarty_tpl->tpl_vars[\'popust\']->value[\'idsmjestaj\'];?>
/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>
.jpg" alt="<?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php echo $_smarty_tpl->tpl_vars[\'popust\']->value[\'naziv\'];?>
/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>
" /></a>
											<span>Potrebno bonus bodova: <?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php echo $_smarty_tpl->tpl_vars[\'popust\']->value[\'bonus\'];?>
/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>
</span><br />
											<span>Popust: <?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php echo $_smarty_tpl->tpl_vars[\'popust\']->value[\'popust\'];?>
/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>
%</span><br />
											<span>Vrijedi od <?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php echo $_smarty_tpl->tpl_vars[\'popust\']->value[\'datumstart\'];?>
/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>
 do <?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php echo $_smarty_tpl->tpl_vars[\'popust\']->value[\'datumend\'];?>
/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>
</span><br />
											<a href="rezervacija.php?id=<?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php echo $_smarty_tpl->tpl_vars[\'popust\']->value[\'idsmjestaj\'];?>
/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>
&popust=<?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php echo $_smarty_tpl->tpl_vars[\'popust\']->value[\'id\'];?>
/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>
">Rezerviraj</a>
										</div>
									</section>
							</div>
							<?php echo '/*%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/<?php } ?>/*/%%SmartyNocache:1092050784538e334ac6c858-39207588%%*/';?>

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
