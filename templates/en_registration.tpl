<!DOCTYPE HTML>
<html>
<head>
<title>Travel | Sign up</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<script src="js/format.js"></script>
<script src="js/registracija.js"></script>
</head>
<body>
		<!----------start sign_up----------->
		<div class="sign_up">
			<!----------start form----------->
			<form class="sign" action="registracija.php" method="POST">
				<div class="formtitle">Sign up is free
					<a class="bluebutton povratak" href="index.php">Back</a>
				</div>
				<!----------start top_section----------->
				<div class="top_section">
					<div class="section">
						<div class="input username">
							<input type="text" id="username" name="username" placeholder="Username (min 4 signs)"  required/> <span id="good1"><img src="images/select.png"/> </span> <span id="bad1"><img src="images/close.png"/>
							
						</div>
						<div class="input password">
							<input type="password" id="pass" name="password" placeholder="Password (min 8 signs)" required/> <span id="good2"><img src="images/select.png"/></span> </span> <span id="bad2"><img src="images/close.png"/>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="section">
						<div class="input-sign email">
							<input type="email" id="email1" name="email1" placeholder="Email"  required /> 
						</div>
						<div class="input-sign re-email">
							<input type="email" id="email2" name="email2" placeholder="Repeat email" required />
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----------end top_section----------->
				<!----------start personal Details----------->
				<!----------start bottom-section----------->
				<div class="bottom-section">
					<div class="title">Personal Information</div>
					<!----------start name section----------->
					<div class="section">
						<div class="input-sign details">
							<input type="text" id="ime" name="ime" placeholder="Name" required/>
						</div>
						<div class="input-sign details1">
							<input type="text" id="prezime" name="prezime" placeholder="Last name" required/>
						</div>
						<div class="clear"> </div>
					</div>
					<!----------start mail section----------->
					<div class="section">
						<div class="input-sign details">
							<input type="text" id="adresa" name="adresa" placeholder="Adress" required/> 
						</div>
						<div class="input-sign details1">
							<input type="text" id="mjesto" name="mjesto" placeholder="Location" required/>
						</div>
						<div class="clear"> </div>
					</div>
					<!----------start city section----------->
					<div class="section">
						<div class="input-sign details">
							<select id="zupanija" name="zupanija">
								<option value="0">Select Region</option>
								<option value="1">Bjelovarsko-bilogorska županija</option>
								<option value="2">Brodsko-posavska županija</option>
								<option value="3">Dubrovačko-neretvanska županija</option>
								<option value="4">Istarska županija</option>
								<option value="5">Karlovačka županija</option>
								<option value="6">Koprivničko-križevačka županija</option>
								<option value="7">Krapinsko-zagorska županija</option>
								<option value="8">Ličko-senjska županija</option>
								<option value="9">Međimurska županija</option>
								<option value="10">Osječko-baranjska županija</option>
								<option value="11">Požeško-slavonska županija</option>
								<option value="12">Primorsko-goranska županija</option>
								<option value="13">Sisačko-moslavačka županija</option>
								<option value="14">Splitsko-dalmatinska županija</option>
								<option value="15">Šibensko-kninska županija</option>
								<option value="16">Varaždinska županija</option>
								<option value="17">Virovitičko-podravska županija</option>
								<option value="18">Vukovarsko-srijemska županija</option>
								<option value="19">Zadarska županija</option>
								<option value="20">Zagrebačka županija</option>
								<option value="21">Grad Zagreb</option>
							</select> 
						</div>
						<div class="input-sign details1">
							<input type="text" id="telefon" name="telefon" placeholder="Phone" required/> 
						</div>
						<div class="clear"> </div>
					</div>
					<!----------start Address section----------->
					<div class="section">
						<div class="input-sign details">
							<input type="text" id="oib" name="oib" placeholder="OIB" required/> 
						</div>
						<div class="input-sign details1">
							<input type="text" id="datum" name="datumrod" placeholder="Date of birth" required/> 
						</div>
						<div class="clear"> </div>
					</div>
					<div class="submit">
						<input class="bluebutton submitbotton" type="submit" value="Send" />
					</div>
				</div>
				<!----------end bottom-section----------->
			</form>
			<!----------end form----------->
		</div>		
</body>
</html>
