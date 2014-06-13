<?php /*%%SmartyHeaderCode:504902222539b5356df6356-50876378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '526e2335e91eca305aaf975ec86dd87150757c29' => 
    array (
      0 => '/vagrant/seminar2/templates/en_popusti.tpl',
      1 => 1402691678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '504902222539b5356df6356-50876378',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539b60c78af115_08731180',
  'variables' => 
  array (
    'admin' => 1,
    'login' => 1,
    'username' => 1,
    'popusti' => 1,
    'popust' => 1,
  ),
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539b60c78af115_08731180')) {function content_539b60c78af115_08731180($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
	<head>
		<title>Travel | Special offers</title>
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
									<?php if ($_smarty_tpl->tpl_vars['admin']->value==1) {?>
										<a href="admin.php">Admin panel</a>
									<?php }?>
								</nav>
								<?php if ($_smarty_tpl->tpl_vars['login']->value==1) {?>
									<div id="username">
										Welcome, <span><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span> <a href="odjava.php">Log out</a>
									</div>
								<?php }?>
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
							<?php  $_smarty_tpl->tpl_vars['popust'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['popust']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['popusti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['popust']->key => $_smarty_tpl->tpl_vars['popust']->value) {
$_smarty_tpl->tpl_vars['popust']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['popust']->key;
?>
							<div class="4u">
								
								<!-- Sidebar -->
									<section>
										<header>
											<h2><?php echo $_smarty_tpl->tpl_vars['popust']->value['naziv'];?>
</h2>
										</header>
										<div class="side-section top-side">
											<a href="#" class="bordered-feature-image"><img src="images/pic<?php echo $_smarty_tpl->tpl_vars['popust']->value['idsmjestaj'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['popust']->value['naziv'];?>
" /></a>
											<span>Needed bonus points: <?php echo $_smarty_tpl->tpl_vars['popust']->value['bonus'];?>
</span><br />
											<span>Discount: <?php echo $_smarty_tpl->tpl_vars['popust']->value['popust'];?>
%</span><br />
											<span>Valid from <?php echo $_smarty_tpl->tpl_vars['popust']->value['datumstart'];?>
 to <?php echo $_smarty_tpl->tpl_vars['popust']->value['datumend'];?>
</span><br />
											<a href="rezervacija.php?id=<?php echo $_smarty_tpl->tpl_vars['popust']->value['idsmjestaj'];?>
&popust=<?php echo $_smarty_tpl->tpl_vars['popust']->value['id'];?>
">Book</a>
										</div>
									</section>
							</div>
							<?php } ?>
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
