<?php /* Smarty version Smarty-3.1.17, created on 2014-06-13 16:36:29
         compiled from "/vagrant/seminar2/templates/en_profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:590587976539b551de8e406-70371878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aa9bbd319b9f11b3d4aba2df282d4aecf376bd5' => 
    array (
      0 => '/vagrant/seminar2/templates/en_profil.tpl',
      1 => 1402691683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '590587976539b551de8e406-70371878',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539b551e1c5083_85583621',
  'variables' => 
  array (
    'admin' => 1,
    'login' => 1,
    'username' => 1,
    'bonus' => 1,
    'datump' => 1,
    'datumr' => 1,
    'recenzija' => 1,
    'data' => 1,
    'email' => 1,
    'ime' => 1,
    'prezime' => 1,
    'adresa' => 1,
    'mjesto' => 1,
    'zupanija' => 1,
    'telefon' => 1,
    'oib' => 1,
    'datum' => 1,
    'rezervacije' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539b551e1c5083_85583621')) {function content_539b551e1c5083_85583621($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
	<head>
		<title>Travel | My profile</title>
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
									<a href="index.php">Index</a>
									<a href="smjestaj.php">Accommodation</a>
									<a href="popusti.php">Special offers</a>
									<a href="profil.php">My profile</a>
									<a href="kontakt.php">Contact</a>
									<!-- samo admin ce vidjet link -->
									<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php if ($_smarty_tpl->tpl_vars[\'admin\']->value==1) {?>/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>

										<a href="admin.php">Admin panel</a>
									<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php }?>/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>

								</nav>
								<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php if ($_smarty_tpl->tpl_vars[\'login\']->value==1) {?>/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>

									<div id="username">
										Welcome, <span><?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
</span> <a href="odjava.php">Log out</a>
									</div>
								<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php }?>/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>

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
			</div>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<div class="3u">

								<!-- Left Sidebar -->
									<section>
										<header>
											<h2>Bonus points</h2>
										</header>
										<p>
											Number of points: <?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'bonus\']->value;?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>

										</p>
										<p>
											Last message:<br />
											<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'datump\']->value;?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>

										</p>
										<p>
											Last reservation:<br />
											<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'datumr\']->value;?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>

										</p>
									</section>
									<section>
										<header>
											<h2>Reviews</h2>
										</header>
										<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php  $_smarty_tpl->tpl_vars[\'data\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'data\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'recenzija\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'data\']->key => $_smarty_tpl->tpl_vars[\'data\']->value) {
$_smarty_tpl->tpl_vars[\'data\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'index\']->value = $_smarty_tpl->tpl_vars[\'data\']->key;
?>/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>

											<h3><?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'naziv\'];?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
</h3><span><?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'tekst\'];?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
<br/>Rating: <?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'ocjena\'];?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
</span><br />
										<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php } ?>/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>

									</section>
							</div>
							<div class="6u skel-cell-important">

								<!-- Main Content -->
									<section>
											<h2>Data</h2>
											<h3>Account data</h3>
										<p class="profil-info">
											<span>Username:</span> <?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
<br />
											<span>Email:</span> <?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'email\']->value;?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
<br />
										</p>
										<p class="profil-info">
											<span>Name:</span> <?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'ime\']->value;?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
<br />
											<span>Last name:</span> <?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'prezime\']->value;?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
<br />
											<span>Adress:</span> <?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'adresa\']->value;?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
<br />
											<span>Location:</span> <?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'mjesto\']->value;?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
<br />
											<span>District:</span> <?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'zupanija\']->value;?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
<br />
											<span>Phone:</span> <?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'telefon\']->value;?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
<br />
											<span>OIB:</span> <?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'oib\']->value;?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
<br />
											<span>Date of birth:</span> <?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'datum\']->value;?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
<br />
										</p>
									</section>

							</div>
							<div class="3u">
								
								<!-- Right Sidebar -->
									<section>
										<header>
											<h2>Reservations</h2>
										</header>
										<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php  $_smarty_tpl->tpl_vars[\'data\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'data\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'rezervacije\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'data\']->key => $_smarty_tpl->tpl_vars[\'data\']->value) {
$_smarty_tpl->tpl_vars[\'data\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'index\']->value = $_smarty_tpl->tpl_vars[\'data\']->key;
?>/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>

											<h3><?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'naziv\'];?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
</h3>
											<span><?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'datumstart\'];?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
-<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'datumend\'];?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
</span>
											<br/><span>Price: <?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'cijena\'];?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
<br/></span><span>Person:<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'osoba\'];?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
</span><br />
											<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value[\'recenzija\']==1&&$_smarty_tpl->tpl_vars[\'data\']->value[\'recenzija2\']==0) {?>/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>

												<a href="profil.php?id=<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'idsmjestaj\'];?>
/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>
" >Write a Review</a>
											<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php }?>/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>

										<?php echo '/*%%SmartyNocache:590587976539b551de8e406-70371878%%*/<?php } ?>/*/%%SmartyNocache:590587976539b551de8e406-70371878%%*/';?>

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
