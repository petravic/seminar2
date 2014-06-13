<?php /*%%SmartyHeaderCode:193147588539b521058d8f5-41182343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9b77ddbde70e1c1f76439f6f765dc65b3bfc94e' => 
    array (
      0 => '/vagrant/seminar2/templates/en_login.tpl',
      1 => 1402688163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193147588539b521058d8f5-41182343',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539b52a331ba29_88174967',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539b52a331ba29_88174967')) {function content_539b52a331ba29_88174967($_smarty_tpl) {?><!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Travel | Login</title>
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
	
					<div class="formtitle">Login
						<a class="bluebutton povratak" href="index.php">Back</a>
					</div>
					<div class="input">
						<input type="text" name="username" id="username" placeholder="Username"  required/> 
						<span id="bad"><img src="images/close.png"/></span><span id="good"><img src="images/select.png"/> </span>
					</div>
					<div class="input">
						<input type="password" name="password" id="password" placeholder="Password" required/>
						<span id="bad"><img src="images/close.png"/></span><span id="good"><img src="images/select.png"/> </span>
					</div>
					<div class="buttons">
						<div>
							<a href="lostpass.php">Forgot your password?</a><br />
							<a href="registracija.php">Need an account?</a>
						</div>
						<input class="bluebutton" type="submit" value="Login" />
						<div class="clear"> </div>
					</div>
		
				</form>
				<!----------end form----------->
		</div>
		<!----------end member-login----------->
</body>
</html>
<?php }} ?>
