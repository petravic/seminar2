<?php

//Uključivanje potrebnih klasa
define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
require('includes/classes/class.Database.php');
require('includes/classes/class.template.php');

session_start();

if(!isset($_SESSION['CREATED'])) {

	//Inicijalizacija objekata za bazu podataka i html template
	$Database = new Database();
	$template = new template();

	if($_POST){
		if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
				
			$username 		= $Database->sql_escape($_POST['username']);
			$password 		= md5($Database->sql_escape($_POST['password']));
				
			$count = $Database->countquery("SELECT * FROM korisnici WHERE username = '".$username."' AND password = '".$password."';");
			if($count == 1){
				$admin = $Database->countquery("SELECT * FROM korisnici WHERE username = '".$username."' AND password = '".$password."' AND admin = 1;");
				$_SESSION['CREATED'] = time();
				$_SESSION["username"] = $username;
				if($admin == 1){
					$_SESSION["admin"] = 1;
				}
				echo 1;
				die();
			}else{
				echo 0;
				die();
			}
		}else{
			$username 		= $Database->sql_escape($_POST['username']);
			$password 		= md5($Database->sql_escape($_POST['password']));
			
			$count = $Database->countquery("SELECT * FROM korisnici WHERE username = '".$username."' AND password = '".$password."';");
			if($count == 1){
				$admin = $Database->countquery("SELECT * FROM korisnici WHERE username = '".$username."' AND password = '".$password."' AND admin = 1;");
				$_SESSION['CREATED'] = time();
				$_SESSION["username"] = $username;
				if($admin == 1){
					$_SESSION["admin"] = 1;
				}
				die('<script type="text/javascript">window.location=\'index.php\';</script>');
			}else{
				echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
				echo '<script>alert(\'Pogrešno korisničko ime ili lozinka!\');</script>';
				die('<script type="text/javascript">window.location=\'login.php\';</script>');
			}
		}
	}

	$Database->close();

	//Prikazivanje html template
	if(isset($_SESSION['lang']) AND $_SESSION['lang'] == 'en'){
		$template->show('en_login.tpl');
	}else{
		$template->show('login.tpl');
	}
}else{
 	if (time() - $_SESSION['CREATED'] > 3600) {
		session_regenerate_id(true);   
		$_SESSION['CREATED'] = time();
	} 
	die('<script type="text/javascript">window.location=\'index.php\';</script>');
}
?>