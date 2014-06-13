<?php /*%%SmartyHeaderCode:1194465020539b360d92d371-45234774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff1f63f8d04ebac6b226dc43c5c1b482446da80c' => 
    array (
      0 => '/vagrant/seminar2/templates/recenzija.tpl',
      1 => 1402681604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1194465020539b360d92d371-45234774',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539b39047bda55_05377132',
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
    'id' => 1,
    'rezervacije' => 1,
  ),
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539b39047bda55_05377132')) {function content_539b39047bda55_05377132($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
	<head>
		<title>Travel | Moj profil</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
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
							<div class="3u">

								<!-- Left Sidebar -->
									<section>
										<header>
											<h2>Bonus bodovi</h2>
										</header>
										<p>
											Broj bodova: <?php echo $_smarty_tpl->tpl_vars['bonus']->value;?>

										</p>
										<p>
											Zadnja poruka:<br />
											<?php echo $_smarty_tpl->tpl_vars['datump']->value;?>

										</p>
										<p>
											Zadnja rezervacija:<br />
											<?php echo $_smarty_tpl->tpl_vars['datumr']->value;?>

										</p>
									</section>
									<section>
										<header>
											<h2>Recenzije</h2>
										</header>
										<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['recenzija']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
											<h3><?php echo $_smarty_tpl->tpl_vars['data']->value['naziv'];?>
</h3><span><?php echo $_smarty_tpl->tpl_vars['data']->value['tekst'];?>
<br/>Ocjena: <?php echo $_smarty_tpl->tpl_vars['data']->value['ocjena'];?>
</span><br />
										<?php } ?>
									</section>
							</div>
							<div class="6u skel-cell-important">

								<!-- Main Content -->
									<section>
										<form method="POST" action="profil.php">
											<input type="hidden" name="idsmjestaj" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
											<textarea id="rectext" name="tekst" maxlength="128" placeholder="Recenzija" required></textarea><br>
											<input type="number" min="1" max="5" name="ocjena" id="ocjena" placeholder="Ocjena" required/><br/>
											<input class="posalji" type="submit" name="trazi" value="Pošalji">
										</form>
									</section>

							</div>
							<div class="3u">
								
								<!-- Right Sidebar -->
									<section>
										<header>
											<h2>Rezervacije</h2>
										</header>
										<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rezervacije']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
											<h3><?php echo $_smarty_tpl->tpl_vars['data']->value['naziv'];?>
</h3>
											<span><?php echo $_smarty_tpl->tpl_vars['data']->value['datumstart'];?>
-<?php echo $_smarty_tpl->tpl_vars['data']->value['datumend'];?>
</span>
											<br/><span>Cijena: <?php echo $_smarty_tpl->tpl_vars['data']->value['cijena'];?>
<br/></span><span>Osoba:<?php echo $_smarty_tpl->tpl_vars['data']->value['osoba'];?>
</span><br />
											<?php if ($_smarty_tpl->tpl_vars['data']->value['recenzija']==1&&$_smarty_tpl->tpl_vars['data']->value['recenzija2']==0) {?>
												<a href="profil.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['idsmjestaj'];?>
" >Napiši recenziju</a>
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
