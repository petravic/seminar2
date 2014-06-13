<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

session_start();
    
if(!isset($_SESSION['CREATED'])) {

	//Uključivanje potrebnih klasa
	define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
	require('includes/classes/class.Database.php');
	require('includes/classes/class.template.php');

	//Inicijalizacija objekata za bazu podataka i html template
	$Database = new Database();
	$template = new template();

	$zupanije = array(
	1 => "Bjelovarsko-bilogorska županija",
	2 => "Brodsko-posavska županija",
	3 => "Dubrovačko-neretvanska županija",
	4 => "Istarska županija",
	5 => "Karlovačka županija",
	6 => "Koprivničko-križevačka županija",
	7 => "Krapinsko-zagorska županija",
	8 => "Ličko-senjska županija",
	9 => "Međimurska županija",
	10 => "Osječko-baranjska županija",
	11 => "Požeško-slavonska županija",
	12 => "Primorsko-goranska županija ",
	13 => "Sisačko-moslavačka županija",
	14 => "Splitsko-dalmatinska županija",
	15 => "Šibensko-kninska županija",
	16 => "Varaždinska županija",
	17 => "Virovitičko-podravska županija",
	18 => "Vukovarsko-srijemska županija",
	19 => "Zadarska županija",
	20 => "Zagrebačka županija",
	21 => "Grad Zagreb",
	);

	if($_POST){
		if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
				
			$username 		= $Database->sql_escape($_POST['username']);
				
			$count = $Database->countquery("SELECT * FROM korisnici WHERE username = '".$username."';");
			echo $count;
			die();	
		}else{
			$username 	= $Database->sql_escape($_POST['username']);
			$password 	= $Database->sql_escape($_POST['password']);
			$email1 	= $Database->sql_escape($_POST['email1']);
			$email2 	= $Database->sql_escape($_POST['email2']);
			$ime 		= $Database->sql_escape($_POST['ime']);
			$prezime 	= $Database->sql_escape($_POST['prezime']);
			$adresa		= $Database->sql_escape($_POST['adresa']);
			$mjesto 	= $Database->sql_escape($_POST['mjesto']);
			$zupanija	= $Database->sql_escape($_POST['zupanija']);
			$telefon	= $Database->sql_escape($_POST['telefon']);
			$oib		= $Database->sql_escape($_POST['oib']);
			$datumrod 	= $Database->sql_escape($_POST['datumrod']);
			
			if(!empty($username) && !empty($password) && !empty($email1) && !empty($email2) && !empty($ime) && !empty($prezime) && !empty($adresa) && !empty($mjesto) && !empty($telefon) && !empty($oib) && !empty($datumrod)){
				echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
				$i = 0;
				if(strlen($username) < 4){
					$i++;
				}else if(strlen($password) < 8){
					$i++;
				}else if($email1 != $email2){
					$i++;
				}else if(strlen($ime) < 3){
					$i++;
				}else if(strlen($prezime) < 3){
					$i++;
				}else if(strlen($adresa) < 4){
					$i++;
				}else if(strlen($mjesto) < 3){
					$i++;
				}else if($zupanija < 1 && $zupanija > 21){
					$i++;
				}else if(strlen($telefon) < 6){
					$i++;
				}else if(strlen($oib) < 11){
					$i++;
				}else if(!preg_match('(([1-9]|0[1-9]|[12][0-9]|3[01])[-\.]([1-9]|0[1-9]|1[012])[-\.](19|20)\d\d)', $datumrod)){
					$i++;
					echo '<script>alert(\'Pogrešan datum!\');</script>';
				}
				$count = $Database->countquery("SELECT * FROM korisnici WHERE username = '".$username."';");
				if($count > 0){
					$i++;
					echo '<script>alert(\'Korisničko ime zauzeto!\');</script>';
				}
				if($i == 0){
					$registracija = date("Y-m-d");
					$rodenje = date("Y-m-d", strtotime($datumrod));
					$Database->query("INSERT INTO korisnici (username, password, email, ime, prezime, adresa, mjesto, zupanija, oib, telefon, datumrodenja, registracija) VALUES('".$username."', '".md5($password)."', '".$email1."', '".$ime."', '".$prezime."', '".$adresa."', '".$mjesto."', '".$zupanije[$zupanija]."', '".$oib."', '".$telefon."', '".$rodenje."', '".$registracija."');");
					$_SESSION['CREATED'] = time();
					$_SESSION["username"] = $username;
					echo '<script>alert(\'Registracija uspiješna!\');</script>';
					die('<script type="text/javascript">window.location=\'index.php\';</script>');
				}else{
					echo '<script>alert(\'Pogrešan unos!\');</script>';
					die('<script type="text/javascript">window.location=\'registracija.php\';</script>');
				}
			}else{
				echo '<script>alert(\'Pogrešan unos!\');</script>';
				die('<script type="text/javascript">window.location=\'registracija.php\';</script>');
			}
		}
	}

	$Database->close();

	//Prikazivanje html template
	if(isset($_SESSION['lang']) AND $_SESSION['lang'] == 'en'){
		$template->show('en_registration.tpl');
	}else{
		$template->show('registration.tpl');
	}
}else{
	die('<script type="text/javascript">window.location=\'index.php\';</script>');
}

?>