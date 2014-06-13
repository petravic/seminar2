<!DOCTYPE HTML>

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
		<script src="js/jezik.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<style>
			.rezultat{
				border-bottom: none;
			}
			.slika-rez{
				width: 262px;
				height: 160px;
				margin-top: 0px;
				margin-right: 50px;
			}
			.posalji{
				margin-left: 15px;
				font-size: 1.2em;
			}
		</style>
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
							<div class="9u">
								
								<!-- Main Content -->
									<section>
										{foreach $smjestaj as $rezultat}
											<header>
												<h2>{$rezultat.naziv}</h2>
											</header>
											<div class="rezultat">
												<a href="#" class="bordered-feature-image slika-rez"><img src="images/pic{$rezultat.id}.jpg" alt="{$rezultat.naziv}" /></a>
												<p>{$rezultat.tip} {$rezultat.kategorija}</p>
												<p class="rez-raz">{$rezultat.adresa}, {$rezultat.mjesto}</p>
												<p>Osnovnih ležajeva: {$rezultat.lezaja}</p>
												<p class="rez-raz">Pomoćnih ležajeva: {$rezultat.pomlezaja}</p>
												<p>Udaljenost od plaže: {$rezultat.plaza}</p>
												<p class="rez-raz">Udaljenost od centra: {$rezultat.centar}</p>
												<p>Parkiralište {if $rezultat.parking == 1}<img src="images/true.png" alt="true" />{else}<img src="images/false.png" alt="false" />{/if}</p>
												<p>Dozvoljeni kućni ljubimci {if $rezultat.ljubimci == 1}<img src="images/true.png" alt="true" />{else}<img src="images/false.png" alt="false" />{/if}</p>
												<p>Upotreba roštilja {if $rezultat.rostilj == 1}<img src="images/true.png" alt="true" />{else}<img src="images/false.png" alt="false" />{/if}</p>
												<p>Klima {if $rezultat.klima == 1}<img src="images/true.png" alt="true" />{else}<img src="images/false.png" alt="false" />{/if}</p>
												<p>TV {if $rezultat.tv == 1}<img src="images/true.png" alt="true" />{else}<img src="images/false.png" alt="false" />{/if}</p>
												<p>Telefon {if $rezultat.tel == 1}<img src="images/true.png" alt="true" />{else}<img src="images/false.png" alt="false" />{/if}</p>
												<p>Terasa {if $rezultat.terasa == 1}<img src="images/true.png" alt="true" />{else}<img src="images/false.png" alt="false" />{/if}</p>
												<p class="rez-raz">Internet {if $rezultat.internet == 1}<img src="images/true.png" alt="true" />{else}<img src="images/false.png" alt="false" />{/if}</p>
												<p>Kontakt</p>
												<p>{$rezultat.kontakt}</p>
												<p>Email: {$rezultat.email}</p>
												<p class="rez-raz">Telefon: {$rezultat.telefon}</p>
												<p>Noćenje: {$rezultat.nocenje}&euro;</p>
												<a class="posalji" href="rezervacija.php?id={$rezultat.id}">Rezerviraj</a>
											</div>
										{/foreach}
									</section>

							</div>
							<div class="3u">
								
								<!-- Sidebar -->
									<section>
										<header>
											<h2>Najpopularnije</h2>
										</header>
										{foreach $top as $index => $smjestaj}
											{if $index = 0}
											<div class="side-section top-side">
												<a href="smjestaj.php?id={$smjestaj.id}" class="bordered-feature-image"><img src="images/pic{$smjestaj.id}.jpg" alt="{$smjestaj.naziv}" /></a>
												<a href="smjestaj.php?id={$smjestaj.id}" class="side-name">{$smjestaj.naziv}</a>
											</div>
											{else}
											<div class="side-section">
												<a href="smjestaj.php?id={$smjestaj.id}" class="bordered-feature-image"><img src="images/pic{$smjestaj.id}.jpg" alt="{$smjestaj.naziv}" /></a>
												<a href="smjestaj.php?id={$smjestaj.id}" class="side-name">{$smjestaj.naziv}</a>
											</div>
											{/if}
										{/foreach}
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