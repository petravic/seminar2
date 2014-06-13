<!DOCTYPE HTML>
<html>
	<head>
		<title>Travel | Početna</title>
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
									<p>Ako želite već danas rezervirati smještaj kliknite na gumb za prijavu...</p>
									<a href="login.php" class="button-big">Prijava</a>

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
							{foreach $top as $index => $smjestaj}
								<div class="3u">
						
									<section>
										<a href="smjestaj.php?id={$smjestaj.id}" class="bordered-feature-image"><img src="images/pic{$smjestaj.id}.jpg" alt="{$smjestaj.naziv}" /></a>
										<h2>{$smjestaj.naziv}</h2>
										<p>
											{$smjestaj.opis}
										</p>
									</section>

								</div>
							{/foreach}
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
											<h2>Tko smo mi</h2>
											<h3>Šta pružamo korisnicima</h3>
										</header>
										<a href="#" class="feature-image"><img src="images/pic05.jpg" alt="" /></a>
										<p>
											Več 5 godina držimo titulu najbolje web aplikacije za rezervaciju smiještaja u hrvatskoj.
											Pružamo korisnicima najširu ponudu apartmana i soba iz primorskog dijela Hrvatske.
										</p>
									</section>

							</div>
							<div class="4u">

								<!-- Box #2 -->
									<section>
										<header>
											<h2>Žasto izabrati nas</h2>
											<h3>Šta nudimo</h3>
										</header>
										<ul class="check-list">
											<li>Najširu ponudu apartmana i soba</li>
											<li>Najbolji smjestaj u Hrvatskoj</li>
											<li>Brza i precizna rezervacija</li>
											<li>Najsigurnije internet plaćanje</li>
											<li>Najbolja podrška</li>
										</ul>
									</section>

							</div>
							<div class="4u">
								
								<!-- Box #3 -->
									<section>
										<header>
											<h2>Šta ljudi misle</h2>
											<h3>Najnovije recenzije</h3>
										</header>
										<ul class="quote-list">
											{foreach $recenzije as $index => $recenzija}
												
											<li>
												<img src="images/pic{$recenzija.id}.jpg" alt="" />
												<p>"{$recenzija.tekst}"</p>
												<span>{$recenzija.ime} {$recenzija.prezime}</span>
											</li>
											{/foreach}
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