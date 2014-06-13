<?php

//Ukljuèivanje potrebnih klasa
define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
require('includes/classes/class.Database.php');
require('includes/classes/class.template.php');

session_start();

//Inicijalizacija objekata za bazu podataka i html template
$Database = new Database();
$template = new template();


if(isset($_SESSION['CREATED'])) {
	
	if($_POST){
		$naslov = $Database->sql_escape($_POST['naslov']);
		$tekst 	= $Database->sql_escape($_POST['tekst']);
		$username = $_SESSION["username"];
		
		if(!empty($naslov) && !empty($tekst)){
			$userID = $Database->fetchquery("SELECT id FROM korisnici WHERE username = '".$username."'");
			$Database->query("INSERT INTO kontakt (idkorisnik, naslov, tekst, datum) VALUES('".$userID[0]['id']."', '".$naslov."', '".$tekst."', '".date("Y-m-d")."');");
			echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
			echo '<script>alert(\'Poruka poslana!\');</script>';
			die('<script type="text/javascript">window.location=\'kontakt.php\';</script>');
		}else{
			echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
			echo '<script>alert(\'Nemozete poslati praznu poruku!\');</script>';
			die('<script type="text/javascript">window.location=\'kontakt.php\';</script>');
		}
	}
	
	if(isset($_SESSION["admin"]) && $_SESSION["admin"] == 1){
		$template->assign_vars(array(
		'username'	=>	$_SESSION["username"], 
		'login'		=> 1,
		'admin'		=> 1,
		));
	}else{
		$template->assign_vars(array(
			'username'	=>	$_SESSION["username"], 
			'login'		=> 1,
			'admin' 	=> 0,
		));
	}
	
}else{
	echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
	echo '<script>alert(\'Niste prijavljeni!\');</script>';
	die('<script type="text/javascript">window.location=\'login.php\';</script>');
}

$Database->close();

//Prikazivanje html template
if(isset($_SESSION['lang']) AND $_SESSION['lang'] == 'en'){
	$template->show('en_kontakt.tpl');
}else{
	$template->show('kontakt.tpl');
}

?>