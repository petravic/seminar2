<!DOCTYPE HTML>
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
		<script src="js/adminsmjestaj.js"></script>
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
									{if $admin == 1}
										<a href="admin.php">Admin panel</a>
									{/if}
								</nav>
								{if $login == 1}
									<div id="username">
										Dobrodošli, <span>{$username}</span> <a href="odjava.php">Odjava</a>
									</div>
								{/if}
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
											<h2>Dodavanje smještaja</h2>
											<div>
												<table id="tablica">
													<tr><td>Id</td><td>Tip</td><td>Naziv</td><td>Mjesto</td><td>Kategorija</td><td>Cijena noćenja</td><td>Popularnost</td><td>Obriši</td></tr>
													{foreach $smjestaji as $index => $smjestaj}
														<tr><td>{$index}</td><td>{$smjestaj.tip}</td><td>{$smjestaj.naziv}</td><td>{$smjestaj.mjesto}</td><td>{$smjestaj.kategorija}</td><td>{$smjestaj.nocenje}</td><td>{$smjestaj.popularnost}</td><td><button id="{$index}" class="brisanje" type="button">Obriši</button></td></tr>
													{/foreach}
												</table>
												<div class="kontakt-button">
													<input type="submit" id="novi" value="Dodaj smještaj">
												</div>
												<br />
											</div>
											<div id="dodaj">
												<form action="admin.php?page=smjestaj" method="POST">
													<select id="tip" name="tip">
														<option value="apartman">Apartman</option>
														<option value="soba">Soba</option>
													</select> <br />
													<input name="naziv" type="text" class="textbox" placeholder="Naziv" required><br />
													<input name="mjesto" type="text" class="textbox" placeholder="Mjesto" required><br />
													<input name="adresa" type="text" class="textbox" placeholder="Adresa" required><br />
													<select id="zupanija" name="zupanija">
														<option value="1">Dubrovačko-neretvanska županija</option>
														<option value="2">Istarska županija</option>
														<option value="3">Ličko-senjska županija</option>
														<option value="4">Primorsko-goranska županija</option>
														<option value="5">Splitsko-dalmatinska županija</option>
														<option value="6">Šibensko-kninska županija</option>
														<option value="7">Zadarska županija</option>
													</select> <br />
													<input name="plaza" type="text" class="textbox" placeholder="Udaljenost plaže(m)" required><br />
													<input name="centar" type="text" class="textbox" placeholder="Udaljenost do centra(m)" required><br />
													<input name="kategorija" type="text" class="textbox" placeholder="Kategorija (1-5)" required><br />
													<input name="lezaja" type="text" class="textbox" placeholder="Broj lezaja" required><br />
													<input name="pomlezaja" type="text" class="textbox" placeholder="Broj pomoćnih ležaja" required><br />
													<input name="kontakt" type="text" class="textbox" placeholder="Kontakt" required><br />
													<input name="email" type="email" class="textbox" placeholder="Email" required><br />
													<input name="telefon" type="text" class="textbox" placeholder="Broj telefona" required><br />
													<textarea name="opis" id="opis" placeholder="Opis" required></textarea><br />
													<input name="nocenje" type="text" class="textbox" placeholder="Cijena noćenja" required><br />
													<label>Parking</label>
													<input name="parking" type="checkbox"><br />
													<label>Dozvoljeni ljubimci</label>
													<input name="ljubimci" type="checkbox"><br />
													<label>Upotreba roštilja</label>
													<input name="rostilj" type="checkbox"><br />
													<label>Klima</label>
													<input name="klima" type="checkbox"><br />
													<label>Tv</label>
													<input name="tv" type="checkbox"><br />
													<label>Telefon</label>
													<input name="tel" type="checkbox"><br />
													<label>Terasa</label>
													<input name="terasa" type="checkbox"><br />
													<label>Internet</label>
													<input name="internet" type="checkbox"><br />
													<div class="kontakt-button">
														<input type="submit" value="Dodaj">
														<input type="button" id="odustani" value="Odustani">
													</div>
												</form>
											</div>
										</header>
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
</html>