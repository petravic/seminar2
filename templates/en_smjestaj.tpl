<!DOCTYPE HTML>

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
									{if $admin == 1}
										<a href="admin.php">Admin panel</a>
									{/if}
								</nav>
								{if $login == 1}
									<div id="username">
										Welcome, <span>{$username}</span> <a href="odjava.php">Log out</a>
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
											<h2>Search</h2>
											<h3>Search for accommodation</h3>
										</header>
										<div class="forma-pretrazivanje">
											<form method="get" action="smjestaj.php">
												<div class="prvi-red">
													<label>Type of accommodation:</label>
													<select id="tip" size="1" name="tip">
														<option selected="" value="0">-- It does not matter --</option>
														<option value="1">Room</option>
														<option value="2">Apartment</option>
													</select>
												</div>
												<div class="prvi-red">
													<label>District:</label>
													<select id="zupanija" size="1" name="zupanija">
														<option selected="" value="0">-- It does not matter --</option>
														<option value="1">Dubrovačko-neretvanska županija</option>
														<option value="2">Istarska županija</option>
														<option value="3">Ličko-senjska županija</option>
														<option value="4">Primorsko-goranska županija</option>
														<option value="5">Splitsko-dalmatinska županija</option>
														<option value="6">Šibensko-kninska županija</option>
														<option value="7">Zadarska županija</option>
													</select>
												</div>
												<div class="prvi-red">
													<label>Minimum category:</label>
													<select id="kategorija" size="1" name="kategorija">
														<option selected="" value="0">-- It does not matter --</option>
														<option value="1">(1) *</option>
														<option value="2">(2) **</option>
														<option value="3">(3) ***</option>
														<option value="4">(4) ****</option>
														<option value="5">(5) *****</option>
													</select>
												</div><br />
												<div class="drugi-red">
													<label>Number of results per page:</label>
													<select id="rez" size="1" name="rez">
														<option selected="" value="10">10</option>
														<option value="15">15</option>
														<option value="25">25</option>
														<option value="50">50</option>
													</select>
												</div>
												<div class="drugi-red">
													<label>Sorted by:</label>
													<select id="sort" size="1" name="sort">
														<option selected="" value="1">Alphabetically A->Z</option>
														<option value="2">Alphabetically Z->A</option>
														<option value="3">Category 1->5</option>
														<option value="4">Category 5->1</option>
													</select>
												</div><br />
												<div class="treci-red">
													<label>Advanced Search</label>
													<input type="checkbox" name="napredno" id="napcheck">
												</div>
												<div id="napredno">
												<br />
												<div class="prvi-red">
													<label>Number of beds (min):</label>
													<select id="lezaja" size="1" name="lezaja">
														<option selected="" value="0">-- It does not matter --</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
													</select>
												</div>
												<div class="prvi-red">
													<label>The maximum distance from the beach:</label>
													<select id="plaza" size="1" name="plaza">
														<option selected="" value="0">-- It does not matter --</option>
														<option value="50">50m</option>
														<option value="100">100m</option>
														<option value="250">250m</option>
														<option value="500">500m</option>
														<option value="1000">1km</option>
														<option value="2000">2km</option>
													</select>
												</div>
												<div class="prvi-red">
													<label>The maximum distance from the center:</label>
													<select id="centar" size="1" name="centar">
														<option selected="" value="0">-- It does not matter --</option>
														<option value="50">50m</option>
														<option value="100">100m</option>
														<option value="250">250m</option>
														<option value="500">500m</option>
														<option value="1000">1km</option>
														<option value="2000">2km</option>
													</select>
												</div>
												<div class="prvi-red">
													<label>Maximum price overnight:</label>
													<select id="nocenje" size="1" name="nocenje">
														<option selected="" value="0">-- It does not matter --</option>
														<option value="30">30e</option>
														<option value="50">50e</option>
														<option value="75">75e</option>
														<option value="100">100e</option>
														<option value="200">200e</option>
														<option value="500">500e</option>
													</select>
												</div><br /><br /><br />
												<div class="prvi-red">
													<input name="parking" type="checkbox">
													<label>Parking</label><br />
													<input name="ljubimci" type="checkbox">
													<label>Pets allowed</label><br />
													<input name="rostilj" type="checkbox">
													<label>Barbecue</label><br />
													<input name="terasa" type="checkbox">
													<label>Terrace</label>
												</div>
												<div class="prvi-red zadnje">
													<input name="klima" type="checkbox">
													<label>Air condition</label><br />
													<input name="tv" type="checkbox">
													<label>TV</label><br />
													<input name="telefon" type="checkbox">
													<label>Phone</label><br />
													<input name="internet" type="checkbox">
													<label>Internet</label>
												</div>
												<br /><br /><br /><br /><br />
												</div>
												<div>
													<input class="posalji" type="submit" name="trazi" value="Send">
												</div>
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
</html>