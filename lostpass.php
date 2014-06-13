<?php

//Uključivanje potrebnih klasa
define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
require('includes/classes/class.Database.php');
require('includes/classes/class.template.php');

function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
}

session_start();

if(!isset($_SESSION['CREATED'])) {

	//Inicijalizacija objekata za bazu podataka i html template
	$Database = new Database();
	$template = new template();

	if($_POST){
		if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
			
			if(isset($_POST['username'])){
				$username 		= $Database->sql_escape($_POST['username']);
				
				$count = $Database->countquery("SELECT * FROM korisnici WHERE username = '".$username."';");
				echo $count;
				die();
			}else if(isset($_POST['email'])){
				$email 			= $Database->sql_escape($_POST['email']);
				
				$count = $Database->countquery("SELECT * FROM korisnici WHERE email = '".$email."';");
				echo $count;
				die();
			}
		}else{
			$username 		= $Database->sql_escape($_POST['username']);
			$email 			= $Database->sql_escape($_POST['email']);
			
			$count = $Database->countquery("SELECT * FROM korisnici WHERE username = '".$username."' AND email = '".$email."';");
			if($count == 1){
				$newpass = randomPassword();
				$poruka = 'Ova poruka je automatski generirana. <br />Nova lozinka:'.$newpass.'<br />Lp admin.';
				mail($email, 'Zaboravljena lozinka', $poruka, null, '-fadmin@travel.com');
				$Database->query("UPDATE korisnici SET password = '".md5($newpass)."' WHERE username = '".$username."' AND email = '".$email."';");
				echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
				echo '<script>alert(\'Nova lozinka poslana na email!\');</script>';
				die('<script type="text/javascript">window.location=\'index.php\';</script>');
			}else{
				echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
				echo '<script>alert(\'Pogrešno korisničko ime ili email!\');</script>';
				die('<script type="text/javascript">window.location=\'login.php\';</script>');
			}
		}
	}

	$Database->close();

	//Prikazivanje html template
	if(isset($_SESSION['lang']) AND $_SESSION['lang'] == 'en'){
		$template->show('en_lostpass.tpl');
	}else{
		$template->show('lostpass.tpl');
	}
}else{
 	if (time() - $_SESSION['CREATED'] > 3600) {
		session_regenerate_id(true);   
		$_SESSION['CREATED'] = time();
	} 
	die('<script type="text/javascript">window.location=\'index.php\';</script>');
}
?>