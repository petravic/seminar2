<?php /* Smarty version Smarty-3.1.17, created on 2014-06-13 15:24:39
         compiled from "/vagrant/seminar2/templates/en_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1283522385539b4fd16f2065-05663811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bfd539f25d1702985f98bd6feeaf79379f15732' => 
    array (
      0 => '/vagrant/seminar2/templates/en_index.tpl',
      1 => 1402687480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1283522385539b4fd16f2065-05663811',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539b4fd19bbec9_70517915',
  'variables' => 
  array (
    'admin' => 1,
    'login' => 1,
    'username' => 1,
    'top' => 1,
    'smjestaj' => 1,
    'recenzije' => 1,
    'recenzija' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539b4fd19bbec9_70517915')) {function content_539b4fd19bbec9_70517915($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
	<head>
		<title>Travel | Index</title>
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
	<body>

		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Logo -->
								<h1><a href="" id="logo">Travel </a></h1>
							
							<!-- Nav -->
								<nav id="nav">
									<a href="index.php">Index</a>
									<a href="smjestaj.php">Accommodation</a>
									<a href="popusti.php">Special offers</a>
									<a href="profil.php">My profile</a>
									<a href="kontakt.php">Contact</a>
									<!-- samo admin ce vidjet link -->
									<?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php if ($_smarty_tpl->tpl_vars[\'admin\']->value==1) {?>/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>

										<a href="admin.php">Admin panel</a>
									<?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php }?>/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>

								</nav>
								<?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php if ($_smarty_tpl->tpl_vars[\'login\']->value==1) {?>/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>

									<div id="username">
										Welcome, <span><?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>
</span> <a href="odjava.php">Log out</a>
									</div>
								<?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php }?>/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>

								<div class="lang">
									<a href="">
										<img src="images/hr.png" class="chg-lng" alt="hrvatski" rel="hr" title="hrvatski" />
									</a>
									<a href="">
										<img src="images/us.png" class="chg-lng" alt="engleski" rel="en" title="engleski" />
									</a>
								</div>
						</div>
					</div>
				</header>
				<div id="banner">
					<div class="container">
						<div class="row">
							<div class="6u">
							
								<!-- Banner Copy -->
									<p>If you want to book your accommodation today click on the button to sign...</p>
									<a href="login.php" class="button-big">Login</a>

							</div>
							<div class="6u">
								
								<!-- Banner Image -->
									<a class="bordered-feature-image"><img src="images/banner.jpg" alt="" /></a>
							
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Features -->
			<div id="features-wrapper">
				<div id="features">
					<div class="container">
						<div class="row">
							<?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php  $_smarty_tpl->tpl_vars[\'smjestaj\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'smjestaj\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'top\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'smjestaj\']->key => $_smarty_tpl->tpl_vars[\'smjestaj\']->value) {
$_smarty_tpl->tpl_vars[\'smjestaj\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'index\']->value = $_smarty_tpl->tpl_vars[\'smjestaj\']->key;
?>/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>

								<div class="3u">
						
									<section>
										<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>
" class="bordered-feature-image"><img src="images/pic<?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>
.jpg" alt="<?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'naziv\'];?>
/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>
" /></a>
										<h2><?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'naziv\'];?>
/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>
</h2>
										<p>
											<?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'opis\'];?>
/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>

										</p>
									</section>

								</div>
							<?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php } ?>/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>

						</div>
					</div>
				</div>
			</div>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<div class="4u">

								<!-- Box #1 -->
									<section>
										<header>
											<h2>Who are we?</h2>
											<h3>What we offer to customers</h3>
										</header>
										<a href="#" class="feature-image"><img src="images/pic05.jpg" alt="" /></a>
										<p>5 years already hold the title of best web application for booking of Accommodations in Croatia.
										We offer the broadest range of apartments and rooms from the Croatian coast.
										</p>
									</section>

							</div>
							<div class="4u">

								<!-- Box #2 -->
									<section>
										<header>
											<h2>Why choose us</h2>
											<h3>What we offer</h3>
										</header>
										<ul class="check-list">
											<li>The widest range of apartments and rooms</li>
											<li>The best accommodation in Croatia</li>
											<li>Fast and accurate booking</li>
											<li>The most secure internet payment</li>
											<li>Best support</li>
										</ul>
									</section>

							</div>
							<div class="4u">
								
								<!-- Box #3 -->
									<section>
										<header>
											<h2>What people think</h2>
											<h3>Latest reviews</h3>
										</header>
										<ul class="quote-list">
											<?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php  $_smarty_tpl->tpl_vars[\'recenzija\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'recenzija\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'recenzije\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'recenzija\']->key => $_smarty_tpl->tpl_vars[\'recenzija\']->value) {
$_smarty_tpl->tpl_vars[\'recenzija\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'index\']->value = $_smarty_tpl->tpl_vars[\'recenzija\']->key;
?>/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>

												
											<li>
												<img src="images/pic<?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php echo $_smarty_tpl->tpl_vars[\'recenzija\']->value[\'id\'];?>
/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>
.jpg" alt="" />
												<p>"<?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php echo $_smarty_tpl->tpl_vars[\'recenzija\']->value[\'tekst\'];?>
/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>
"</p>
												<span><?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php echo $_smarty_tpl->tpl_vars[\'recenzija\']->value[\'ime\'];?>
/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>
 <?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php echo $_smarty_tpl->tpl_vars[\'recenzija\']->value[\'prezime\'];?>
/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>
</span>
											</li>
											<?php echo '/*%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/<?php } ?>/*/%%SmartyNocache:1283522385539b4fd16f2065-05663811%%*/';?>

										</ul>
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
									<h2>Social networks, links, payment, contact</h2>
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
													<li>Address: Stjepana Radića 32</li>
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
										Apartments and rooms and general accommodation provides an opportunity for tourism tailored to each individual and their family. We offer accommodation which are fully-equipped apartments, rooms and houses an additional offer, such as swimming, sailing, diving, surfing, water sports, healthy food, home cooking and more.
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
