<?php /* Smarty version Smarty-3.1.17, created on 2014-06-03 09:03:20
         compiled from "/vagrant/seminar2/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1255006966538dc798851591-31846384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fef6d45faf93313e52561d33acbf75fdbe5ac4a' => 
    array (
      0 => '/vagrant/seminar2/templates/login.tpl',
      1 => 1401730794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1255006966538dc798851591-31846384',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538dc79893d160_69753718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538dc79893d160_69753718')) {function content_538dc79893d160_69753718($_smarty_tpl) {?><!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Travel | Prijava</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<script src="js/login.js"></script>
</head>
<body>
	<!----------start member-login----------->
		<div class="member-login">
			<!----------star form----------->
				<form class="login"  action="login.php" method="POST" >
	
					<div class="formtitle">Prijava
						<a class="bluebutton povratak" href="index.php">Nazad</a>
					</div>
					<div class="input">
						<input type="text" name="username" id="username" placeholder="Korisničko ime"  required/> 
						<span id="bad"><img src="images/close.png"/></span><span id="good"><img src="images/select.png"/> </span>
					</div>
					<div class="input">
						<input type="password" name="password" id="password" placeholder="Lozinka" required/>
						<span id="bad"><img src="images/close.png"/></span><span id="good"><img src="images/select.png"/> </span>
					</div>
					<div class="buttons">
						<div>
							<a href="lostpass.php">Zaboravljena lozinka?</a><br />
							<a href="registracija.php">Nemate korisnički račun?</a>
						</div>
						<input class="bluebutton" type="submit" value="Prijava" />
						<div class="clear"> </div>
					</div>
		
				</form>
				<!----------end form----------->
		</div>
		<!----------end member-login----------->
</body>
</html>
<?php }} ?>
