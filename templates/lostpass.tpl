<!DOCTYPE HTML>
<html>
<head>
<title>Travel | Zaboravljena lozinka</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<script src="js/lost.js"></script>
</head>
<body>
	<!----------start member-login----------->
		<div class="member-login">
			<!----------star form----------->
				<form class="login"  action="lostpass.php" method="POST" >
	
					<div class="formtitle">Zaboravljena lozinka
						<a class="bluebutton povratak" href="index.php">Nazad</a>
					</div>
					<div class="input">
						<input type="text" name="username" id="username" placeholder="Korisničko ime"  required/> 
						<span id="bad1" ><img src="images/close.png"/></span><span id="good1"><img src="images/select.png"/> </span>
					</div>
					<div class="input">
						<input type="email" name="email" id="email" placeholder="Email" required/>
						<span id="bad2"><img src="images/close.png"/></span><span id="good2"><img src="images/select.png"/> </span>
					</div>
					<div class="buttons">
						<div>
							<a href="login.php">Prijava</a><br />
							<a href="registracija.php">Nemate korisnički račun?</a>
						</div>
						<input class="bluebutton" type="submit" value="Pošalji" />
						<div class="clear"> </div>
					</div>
		
				</form>
				<!----------end form----------->
		</div>
		<!----------end member-login----------->
</body>
</html>
