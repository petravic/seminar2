<?php /*%%SmartyHeaderCode:1545015572538de62b9fb8b8-40640218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c098643da1c7b8a0f8462d1a7429babd8debcdae' => 
    array (
      0 => '/vagrant/seminar2/templates/adminpopust.tpl',
      1 => 1401917594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1545015572538de62b9fb8b8-40640218',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539b3b1c9a3612_24793904',
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539b3b1c9a3612_24793904')) {function content_539b3b1c9a3612_24793904($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
	<head>
		<title>Travel | Admin</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/format.js"></script>
		<script src="js/adminpopust.js"></script>
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
								
								<!-- Sidebar -->
									<section>
										<header>
											<h2>Upravljanje</h2>
										</header>
										<ul class="link-list">
											<li><a href="admin.php?page=smjestaj">Dodavanje smještaja</a></li>
											<li><a href="admin.php?page=popust">Upravljanje popustina</a></li>
											<li><a href="admin.php?page=recenzija">Upravljanje recenziama</a></li>
											<li><a href="admin.php?page=korisnici">Upravljanje korisnicima</a></li>
											<li><a href="admin.php?page=poruke">Poruke korisnika</a></li>
										</ul>
									</section>
							</div>
							<div class="9u skel-cell-important">
								
								<!-- Main Content -->
									<section>
										<header>
											<h2>Upravljanje popustima</h2>
										</header>
										<div>
											<table id="tablica">
												<tr><td>#</td><td>Naziv</td><td>Popust</td><td>Bonus cijena</td><td>Datum početka</td><td>Datum završetka</td><td>Obriši</td></tr>
												<?php  $_smarty_tpl->tpl_vars['popust'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['popust']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['popusti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['popust']->key => $_smarty_tpl->tpl_vars['popust']->value) {
$_smarty_tpl->tpl_vars['popust']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['popust']->key;
?>
													<tr><td><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['popust']->value['naziv'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['popust']->value['popust'];?>
%</td><td><?php echo $_smarty_tpl->tpl_vars['popust']->value['minbonus'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['popust']->value['datum'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['popust']->value['dana'];?>
</td><td><button id="<?php echo $_smarty_tpl->tpl_vars['popust']->value['id'];?>
" class="brisanje" type="button">Obriši</button></td></tr>
												<?php } ?>
											</table>
											<div class="kontakt-button">
												<input type="submit" id="novi" value="Novi popust">
											</div>
											<br />
										</div>
										<div id="popust">
											<form action="admin.php?page=popust" method="POST">
												<input name="idsmjestaj" type="text" class="textbox" placeholder="Id smještaja" required><br />
												<input name="popust" type="text" class="textbox" placeholder="Popust(%)" required><br />
												<input name="minbonus" type="text" class="textbox" placeholder="Potrebno bodova" required><br />
												<input name="datum" id="datum" type="text" class="textbox" placeholder="Datum" required><br />
												<input name="dana" type="text" class="textbox" placeholder="Trajanje dana" required><br />
												<div class="kontakt-button">
													<input type="submit" value="Dodaj">
													<input type="button" id="odustani" value="Odustani">
												</div>
											</form>
										</div>
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
