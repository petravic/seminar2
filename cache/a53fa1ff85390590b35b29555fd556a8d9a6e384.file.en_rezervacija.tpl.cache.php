<?php /* Smarty version Smarty-3.1.17, created on 2014-06-13 16:12:27
         compiled from "/vagrant/seminar2/templates/en_rezervacija.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2083970653539b5b2b193527-35829602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a53fa1ff85390590b35b29555fd556a8d9a6e384' => 
    array (
      0 => '/vagrant/seminar2/templates/en_rezervacija.tpl',
      1 => 1402690336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2083970653539b5b2b193527-35829602',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539b5b2b2f0796_26813612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539b5b2b2f0796_26813612')) {function content_539b5b2b2f0796_26813612($_smarty_tpl) {?><!DOCTYPE HTML>

<html>
	<head>
		<title>Travel | Accommodation</title>
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
									<a href="index.php">Index</a>
									<a href="smjestaj.php">Accommodation</a>
									<a href="popusti.php">Special offers</a>
									<a href="profil.php">My profile</a>
									<a href="kontakt.php">Contact</a>
									<!-- samo admin ce vidjet link -->
									<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php if ($_smarty_tpl->tpl_vars[\'admin\']->value==1) {?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

										<a href="admin.php">Admin panel</a>
									<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php }?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

								</nav>
								<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php if ($_smarty_tpl->tpl_vars[\'login\']->value==1) {?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

									<div id="username">
										Welcome, <span><?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
</span> <a href="odjava.php">Log out</a>
									</div>
								<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php }?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

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
							<div class="9u">
								
								<!-- Main Content -->
									<section>
										<header>
											<h2>Reservation</h2>
											<h3><?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'ime\']->value;?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
</h3>
										</header>
										<div class="forma-pretrazivanje">
											<span id="rezerv">Accommodation reserved: </span><br/>
											<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php if ($_smarty_tpl->tpl_vars[\'i\']->value>0) {?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

												<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php  $_smarty_tpl->tpl_vars[\'datum\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'datum\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'zauzeto\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'datum\']->key => $_smarty_tpl->tpl_vars[\'datum\']->value) {
$_smarty_tpl->tpl_vars[\'datum\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'index\']->value = $_smarty_tpl->tpl_vars[\'datum\']->key;
?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

													<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php if ($_smarty_tpl->tpl_vars[\'index\']->value==$_smarty_tpl->tpl_vars[\'max\']->value) {?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

														<p><?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'datum\']->value[\'datumstart\'];?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
-<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'datum\']->value[\'datumend\'];?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
</p>
													<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php } else { ?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

														<span><?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'datum\']->value[\'datumstart\'];?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
-<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'datum\']->value[\'datumend\'];?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
</span><br />
													<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php }?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

												<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php } ?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

											<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php } else { ?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

												<p><?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'zauzeto\']->value;?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
</p>
											<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php }?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

											<form method="POST" action="rezervacija.php">
												<input type="hidden" name="idkorisnik" value="<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'idkorisnik\']->value;?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
"/>
												<input type="hidden" name="idsmjestaj" value="<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'idsmjestaj\']->value;?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
"/>
												<input type="hidden" name="nocenje" id="nocenje" value="<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'nocenje\']->value;?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
"/>
												<input type="hidden" name="popust" id="popust" value="<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'popust\']->value;?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
"/>
												<input type="text" 	name="datum" id="datum" placeholder="Date of arrival" required/>
												<input type="number" min="3" max="14" name="dana" id="dana" placeholder="Number of days" required/>
												<input type="number" min="1" max="<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'osobamax\']->value;?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
" name="osoba" id="osoba" placeholder="Number of persons" required/>
												<br /><span id="cijena"></span><br />
												<input class="posalji" type="submit" name="trazi" value="Send">
											</form>
										</div>
									</section>

							</div>
							<div class="3u">
								
								<!-- Sidebar -->
									<section>
										<header>
											<h2>Most Popular</h2>
										</header>
										<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php  $_smarty_tpl->tpl_vars[\'smjestaj\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'smjestaj\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'top\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'smjestaj\']->key => $_smarty_tpl->tpl_vars[\'smjestaj\']->value) {
$_smarty_tpl->tpl_vars[\'smjestaj\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'index\']->value = $_smarty_tpl->tpl_vars[\'smjestaj\']->key;
?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

											<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'index\'])) $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable(null,true);if ($_smarty_tpl->tpl_vars[\'index\']->value = 0) {?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

											<div class="side-section top-side">
												<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
" class="bordered-feature-image"><img src="images/pic<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
.jpg" alt="<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'naziv\'];?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
" /></a>
												<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
" class="side-name"><?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'naziv\'];?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
</a>
											</div>
											<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php } else { ?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

											<div class="side-section">
												<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
" class="bordered-feature-image"><img src="images/pic<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
.jpg" alt="<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'naziv\'];?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
" /></a>
												<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
" class="side-name"><?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'naziv\'];?>
/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>
</a>
											</div>
											<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php }?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

										<?php echo '/*%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/<?php } ?>/*/%%SmartyNocache:2083970653539b5b2b193527-35829602%%*/';?>

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
