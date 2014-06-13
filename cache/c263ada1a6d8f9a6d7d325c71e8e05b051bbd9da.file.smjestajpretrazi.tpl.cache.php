<?php /* Smarty version Smarty-3.1.17, created on 2014-06-13 04:57:35
         compiled from "/vagrant/seminar2/templates/smjestajpretrazi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1498451751538f5d3cb56433-89357441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c263ada1a6d8f9a6d7d325c71e8e05b051bbd9da' => 
    array (
      0 => '/vagrant/seminar2/templates/smjestajpretrazi.tpl',
      1 => 1402649851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1498451751538f5d3cb56433-89357441',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538f5d3cdeda77_25374982',
  'variables' => 
  array (
    'admin' => 1,
    'login' => 1,
    'username' => 1,
    'count' => 1,
    'stranice' => 1,
    'napredno' => 1,
    'poc' => 1,
    'index' => 1,
    'tip' => 1,
    'zupanija' => 1,
    'kategorija' => 1,
    'rez' => 1,
    'sort' => 1,
    'lezaja' => 1,
    'plaza' => 1,
    'centar' => 1,
    'nocenje' => 1,
    'dodatno' => 1,
    'stranica' => 1,
    'j' => 1,
    'smjestaj' => 1,
    'rezultat' => 1,
    'top' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538f5d3cdeda77_25374982')) {function content_538f5d3cdeda77_25374982($_smarty_tpl) {?><!DOCTYPE HTML>

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
									<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php if ($_smarty_tpl->tpl_vars[\'admin\']->value==1) {?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

										<a href="admin.php">Admin panel</a>
									<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php }?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

								</nav>
								<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php if ($_smarty_tpl->tpl_vars[\'login\']->value==1) {?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

									<div id="username">
										Dobrodošli, <span><?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
</span> <a href="odjava.php">Odjava</a>
									</div>
								<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php }?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

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
											<h3>Ukupno pronađeno rezultata: <?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'count\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
</h3>
										</header>
										<div class="stranice">
											<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php  $_smarty_tpl->tpl_vars[\'stranica\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'stranica\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'stranice\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'stranica\']->key => $_smarty_tpl->tpl_vars[\'stranica\']->value) {
$_smarty_tpl->tpl_vars[\'stranica\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'index\']->value = $_smarty_tpl->tpl_vars[\'stranica\']->key;
?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

												<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php if ($_smarty_tpl->tpl_vars[\'napredno\']->value==1) {?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

													<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php if ($_smarty_tpl->tpl_vars[\'poc\']->value>1&&$_smarty_tpl->tpl_vars[\'index\']->value==0) {?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

													<a href="smjestaj.php?tip=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'tip\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&zupanija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'zupanija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&kategorija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'kategorija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&rez=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&sort=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'sort\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&poc=1&trazi=Pošalji&napredno=1&lezaja=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'lezaja\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&plaza=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'plaza\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&centar=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'centar\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&nocenje=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'nocenje\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'dodatno\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
" class="ch-str strelice" style="color:black;"><<</a>
													<a href="smjestaj.php?tip=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'tip\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&zupanija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'zupanija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&kategorija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'kategorija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&rez=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&sort=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'sort\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&poc=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'poc\']->value-$_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&trazi=Pošalji&napredno=1&lezaja=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'lezaja\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&plaza=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'plaza\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&centar=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'centar\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&nocenje=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'nocenje\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'dodatno\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
" class="ch-str strelice" style="color:black;"><</a>
													<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php }?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

													<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php if ($_smarty_tpl->tpl_vars[\'stranica\']->value[\'poc\']==$_smarty_tpl->tpl_vars[\'poc\']->value) {?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

													<span class="active"><?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'stranica\']->value[\'poc\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
-<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'stranica\']->value[\'kraj\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
</span>
													<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php } else { ?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

													<a href="smjestaj.php?tip=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'tip\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&zupanija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'zupanija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&kategorija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'kategorija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&rez=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&sort=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'sort\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&poc=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'stranica\']->value[\'poc\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&trazi=Pošalji&napredno=1&lezaja=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'lezaja\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&plaza=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'plaza\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&centar=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'centar\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&nocenje=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'nocenje\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'dodatno\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
" class="ch-str" style="color:black;"><?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'stranica\']->value[\'poc\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
-<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'stranica\']->value[\'kraj\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
</a>
													<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php }?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

													<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php if ($_smarty_tpl->tpl_vars[\'index\']->value==$_smarty_tpl->tpl_vars[\'j\']->value&&$_smarty_tpl->tpl_vars[\'j\']->value!=0&&($_smarty_tpl->tpl_vars[\'poc\']->value+$_smarty_tpl->tpl_vars[\'rez\']->value)<=$_smarty_tpl->tpl_vars[\'count\']->value) {?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

													<a href="smjestaj.php?tip=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'tip\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&zupanija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'zupanija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&kategorija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'kategorija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&rez=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&sort=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'sort\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&poc=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'poc\']->value+$_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&trazi=Pošalji&napredno=1&lezaja=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'lezaja\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&plaza=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'plaza\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&centar=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'centar\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&nocenje=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'nocenje\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'dodatno\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
" class="ch-str strelice" style="color:black;">></a>
													<a href="smjestaj.php?tip=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'tip\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&zupanija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'zupanija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&kategorija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'kategorija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&rez=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&sort=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'sort\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&poc=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo ($_smarty_tpl->tpl_vars[\'count\']->value/$_smarty_tpl->tpl_vars[\'rez\']->value)*$_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&trazi=Pošalji&napredno=1&lezaja=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'lezaja\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&plaza=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'plaza\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&centar=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'centar\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&nocenje=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'nocenje\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'dodatno\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
" class="ch-str strelice" style="color:black;">>></a>
													<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php }?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

												<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php } else { ?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

													<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php if ($_smarty_tpl->tpl_vars[\'poc\']->value>1&&$_smarty_tpl->tpl_vars[\'index\']->value==0) {?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

													<a href="smjestaj.php?tip=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'tip\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&zupanija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'zupanija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&kategorija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'kategorija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&rez=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&sort=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'sort\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&poc=1&trazi=Pošalji" class="ch-str strelice" style="color:black;"><<</a>
													<a href="smjestaj.php?tip=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'tip\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&zupanija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'zupanija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&kategorija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'kategorija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&rez=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&sort=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'sort\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&poc=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'poc\']->value-$_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&trazi=Pošalji" class="ch-str strelice" style="color:black;"><</a>
													<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php }?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

													<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php if ($_smarty_tpl->tpl_vars[\'stranica\']->value[\'poc\']==$_smarty_tpl->tpl_vars[\'poc\']->value) {?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

													<span class="active"><?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'stranica\']->value[\'poc\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
-<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'stranica\']->value[\'kraj\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
</span>
													<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php } else { ?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

													<a href="smjestaj.php?tip=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'tip\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&zupanija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'zupanija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&kategorija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'kategorija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&rez=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&sort=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'sort\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&poc=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'stranica\']->value[\'poc\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&trazi=Pošalji" class="ch-str" style="color:black;"><?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'stranica\']->value[\'poc\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
-<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'stranica\']->value[\'kraj\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
</a>
													<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php }?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

													<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php if ($_smarty_tpl->tpl_vars[\'index\']->value==$_smarty_tpl->tpl_vars[\'j\']->value&&$_smarty_tpl->tpl_vars[\'j\']->value!=0&&($_smarty_tpl->tpl_vars[\'poc\']->value+$_smarty_tpl->tpl_vars[\'rez\']->value)<=$_smarty_tpl->tpl_vars[\'count\']->value) {?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

													<a href="smjestaj.php?tip=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'tip\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&zupanija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'zupanija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&kategorija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'kategorija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&rez=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&sort=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'sort\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&poc=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'poc\']->value+$_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&trazi=Pošalji" class="ch-str strelice" style="color:black;">></a>
													<a href="smjestaj.php?tip=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'tip\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&zupanija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'zupanija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&kategorija=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'kategorija\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&rez=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&sort=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'sort\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&poc=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo ($_smarty_tpl->tpl_vars[\'count\']->value/$_smarty_tpl->tpl_vars[\'rez\']->value)*$_smarty_tpl->tpl_vars[\'rez\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&trazi=Pošalji" class="ch-str strelice" style="color:black;">>></a>
													<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php }?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

												<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php }?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

											<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php } ?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

										</div>
										<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php  $_smarty_tpl->tpl_vars[\'rezultat\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'rezultat\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'smjestaj\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'rezultat\']->key => $_smarty_tpl->tpl_vars[\'rezultat\']->value) {
$_smarty_tpl->tpl_vars[\'rezultat\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'index\']->value = $_smarty_tpl->tpl_vars[\'rezultat\']->key;
?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

											<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php if ($_smarty_tpl->tpl_vars[\'index\']->value>=$_smarty_tpl->tpl_vars[\'poc\']->value&&$_smarty_tpl->tpl_vars[\'index\']->value<=($_smarty_tpl->tpl_vars[\'poc\']->value-1+$_smarty_tpl->tpl_vars[\'rez\']->value)) {?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

											<div class="rezultat">
												<span class="broj"><?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'index\']->value;?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
.</span>
												<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'id\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
" class="side-name naslov-rez"><?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'naziv\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
</a>
												<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'id\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
" class="bordered-feature-image slika-rez"><img src="images/pic<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'id\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
.jpg" alt="<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'naziv\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
" /></a>
												<p><?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'tip\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
 <?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'kategorija\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
</p>
												<p><?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'mjesto\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
, <?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'plaza\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
 od plaže, <?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'centar\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
 od centra</p>
												<p><?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'info1\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
</p>
												<p>Ležajeva: <?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'lezaja\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
+<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'pomlezaja\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
, <?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'info2\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
</p>
												<p>Noćenje: <?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'rezultat\']->value[\'nocenje\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
&euro;</p>
											</div>
											<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php }?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

										<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php } ?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

									</section>

							</div>
							<div class="3u">
								
								<!-- Sidebar -->
									<section>
										<header>
											<h2>Najpopularnije</h2>
										</header>
										<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php  $_smarty_tpl->tpl_vars[\'smjestaj\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'smjestaj\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'top\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'smjestaj\']->key => $_smarty_tpl->tpl_vars[\'smjestaj\']->value) {
$_smarty_tpl->tpl_vars[\'smjestaj\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'index\']->value = $_smarty_tpl->tpl_vars[\'smjestaj\']->key;
?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

											<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'index\'])) $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable(null,true);if ($_smarty_tpl->tpl_vars[\'index\']->value = 0) {?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

											<div class="side-section top-side">
												<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
" class="bordered-feature-image"><img src="images/pic<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
.jpg" alt="<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'naziv\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
" /></a>
												<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
" class="side-name"><?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'naziv\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
</a>
											</div>
											<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php } else { ?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

											<div class="side-section">
												<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
" class="bordered-feature-image"><img src="images/pic<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
.jpg" alt="<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'naziv\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
" /></a>
												<a href="smjestaj.php?id=<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'id\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
" class="side-name"><?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php echo $_smarty_tpl->tpl_vars[\'smjestaj\']->value[\'naziv\'];?>
/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>
</a>
											</div>
											<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php }?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

										<?php echo '/*%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/<?php } ?>/*/%%SmartyNocache:1498451751538f5d3cb56433-89357441%%*/';?>

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
