<?php /*%%SmartyHeaderCode:1321274791539b52a690dd22-16519925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88349f26dfee248a693e1b3ec9725e1123e19517' => 
    array (
      0 => '/vagrant/seminar2/templates/en_lostpass.tpl',
      1 => 1402688151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1321274791539b52a690dd22-16519925',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539b52a6a65c91_47666706',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539b52a6a65c91_47666706')) {function content_539b52a6a65c91_47666706($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<title>Travel | Forgot password</title>
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
	
					<div class="formtitle">Forgot your password
						<a class="bluebutton povratak" href="index.php">BAck</a>
					</div>
					<div class="input">
						<input type="text" name="username" id="username" placeholder="Username"  required/> 
						<span id="bad1" ><img src="images/close.png"/></span><span id="good1"><img src="images/select.png"/> </span>
					</div>
					<div class="input">
						<input type="email" name="email" id="email" placeholder="Email" required/>
						<span id="bad2"><img src="images/close.png"/></span><span id="good2"><img src="images/select.png"/> </span>
					</div>
					<div class="buttons">
						<div>
							<a href="login.php">Login</a><br />
							<a href="registracija.php">Need an account?</a>
						</div>
						<input class="bluebutton" type="submit" value="Send" />
						<div class="clear"> </div>
					</div>
		
				</form>
				<!----------end form----------->
		</div>
		<!----------end member-login----------->
</body>
</html>
<?php }} ?>
