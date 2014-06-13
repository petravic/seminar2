<?php

//Uključivanje potrebnih klasa
define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
require('includes/classes/class.Database.php');
require('includes/classes/class.template.php');

session_start();

//Inicijalizacija objekata za bazu podataka i html template
$Database = new Database();
$template = new template();

$zupanije = array(
	1 => "Dubrovačko-neretvanska županija",
	2 => "Istarska županija",
	3 => "Ličko-senjska županija",
	4 => "Primorsko-goranska županija",
	5 => "Splitsko-dalmatinska županija",
	6 => "Šibensko-kninska županija",
	7 => "Zadarska županija",
);

if(isset($_SESSION['CREATED'])) {
	if(isset($_SESSION["admin"]) && $_SESSION["admin"] == 1){
		if(isset($_GET['page'])){
			$page = $_GET['page'];
			switch($page){
				case 'smjestaj':
					if($_POST){
						if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
				
							$id 		= $Database->sql_escape($_POST['id']);
				
							$Database->query("DELETE FROM smjestaj WHERE id = '".$id."';");
							echo 1;
							die();	
						}else{
							$tip 		= $Database->sql_escape($_POST['tip']);
							$naziv 		= $Database->sql_escape($_POST['naziv']);
							$mjesto		= $Database->sql_escape($_POST['mjesto']);
							$adresa 	= $Database->sql_escape($_POST['adresa']);
							$zupanija 	= $Database->sql_escape($_POST['zupanija']);
							$plaza 		= $Database->sql_escape($_POST['plaza']);
							$centar 	= $Database->sql_escape($_POST['centar']);
							$kategorija = $Database->sql_escape($_POST['kategorija']);
							$lezaja 	= $Database->sql_escape($_POST['lezaja']);
							$pomlezaja 	= $Database->sql_escape($_POST['pomlezaja']);
							$kontakt 	= $Database->sql_escape($_POST['kontakt']);
							$email 		= $Database->sql_escape($_POST['email']);
							$telefon    = $Database->sql_escape($_POST['telefon']);
							$opis	 	= $Database->sql_escape($_POST['opis']);
							$nocenje 	= $Database->sql_escape($_POST['nocenje']);
							$parking	= isset($_POST['parking']) 	? 1 : 0;
							$ljubimci	= isset($_POST['ljubimci']) ? 1 : 0;
							$rostilj	= isset($_POST['rostilj']) 	? 1 : 0;
							$klima	 	= isset($_POST['klima']) 	? 1 : 0;
							$tv	 		= isset($_POST['tv']) 		? 1 : 0;
							$tel	 	= isset($_POST['tel']) 		? 1 : 0;
							$terasa	 	= isset($_POST['terasa']) 	? 1 : 0;
							$internet	= isset($_POST['internet']) ? 1 : 0;
							
							$Database->query("INSERT INTO smjestaj (tip, naziv, mjesto, adresa, zupanija, plaza, centar, kategorija, lezaja, pomlezaja, kontakt, email, telefon, opis, nocenje, parking, ljubimci, rostilj, klima, tv, tel, terasa, internet) VALUES('".$tip."', '".$naziv."', '".$mjesto."','".$adresa."', '".$zupanije[$zupanija]."','".$plaza."', '".$centar."','".$kategorija."', '".$lezaja."','".$pomlezaja."', '".$kontakt."','".$email."', '".$telefon."','".$opis."', '".$nocenje."', '".$parking."','".$ljubimci."', '".$rostilj."','".$klima."', '".$tv."','".$tel."', '".$terasa."','".$internet."');");
							echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
							echo '<script>alert(\'Smještaj uspiješno dodan!\');</script>';
							die('<script type="text/javascript">window.location=\'admin.php?page=smjestaj\';</script>');
						}
					}else{
						$query = $Database->query("SELECT * FROM smjestaj ORDER BY id ASC;");
						while ($row = $Database->fetch_array($query)) {
							$smjestaji[$row['id']]['tip']		 = $row['tip'];
							$smjestaji[$row['id']]['naziv']		 = $row['naziv'];
							$smjestaji[$row['id']]['kategorija'] = $row['kategorija'];
							$smjestaji[$row['id']]['nocenje']	 = $row['nocenje'];
							$smjestaji[$row['id']]['popularnost']= $row['popularnost'];
							$smjestaji[$row['id']]['mjesto']	 = $row['mjesto'];
						}
						$template->assign_vars(array(
							'username'	=>	$_SESSION["username"], 
							'login'		=> 1,
							'admin'		=> 1,
							'smjestaji'	=> $smjestaji,
						));
						$Database->close();
						$template->show('adminsmjestaj.tpl');
						die();
					}
				break;
				case 'popust':
					if($_POST){
						if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
				
							$id 		= $Database->sql_escape($_POST['id']);
				
							$Database->query("DELETE FROM popusti WHERE id = '".$id."';");
							echo 1;
							die();	
						}else{
							$idsmjestaj 	= $Database->sql_escape($_POST['idsmjestaj']);
							$popust 		= $Database->sql_escape($_POST['popust']);
							$minbonus		= $Database->sql_escape($_POST['minbonus']);
							$datum			= $Database->sql_escape($_POST['datum']);
							$dana			= $Database->sql_escape($_POST['dana']);
							
							if(!preg_match('(([1-9]|0[1-9]|[12][0-9]|3[01])[-\.]([1-9]|0[1-9]|1[012])[-\.](19|20)\d\d)', $datum)){
								echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
								echo '<script>alert(\'Pogrešan datum!\');</script>';
								die('<script type="text/javascript">window.location=\'admin.php?page=popust\';</script>');
							}
							
							$pocetak = date("Y-m-d", strtotime($datum));
							
							$Database->query("INSERT INTO popusti (idsmjestaj, popust, minbonus, datum, dana) VALUES('".$idsmjestaj."','".$popust."','".$minbonus."','".$pocetak."','".$dana."');");
							echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
							echo '<script>alert(\'Popust uspiješno dodan!\');</script>';
							die('<script type="text/javascript">window.location=\'admin.php?page=popust\';</script>');
						}
					}else{
						$query = $Database->query("SELECT p.*, s.naziv FROM popusti AS p INNER JOIN smjestaj AS s ON p.idsmjestaj = s.id  ORDER BY p.datum DESC, p.dana ASC;");
						$i = 1;
						while ($row = $Database->fetch_array($query)) {
							$popusti[$i]['id']		= $row['id'];
							$popusti[$i]['popust']	= $row['popust'];
							$popusti[$i]['minbonus']= $row['minbonus'];
							$popusti[$i]['datum']	= date("d.m.Y.", strtotime($row['datum']));
							$popusti[$i]['dana']	= date("d.m.Y.", (strtotime($row['datum'])+86400*$row['dana']));
							$popusti[$i]['naziv']	= $row['naziv'];
							$i++;
						}
						$template->assign_vars(array(
							'username'	=>	$_SESSION["username"], 
							'login'		=> 1,
							'admin'		=> 1,
							'popusti'	=> $popusti,
						));
						$Database->close();
						$template->show('adminpopust.tpl');
						die();
					}
				break;
				case 'recenzija':
					if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
						$action = $Database->sql_escape($_POST['action']);
						if($action == 1){
							$id = $Database->sql_escape($_POST['id']);
					
							$Database->query("DELETE FROM recenzije WHERE id = '".$id."';");
							echo 1;
							die();
						}else if($action == 2){
							$id 	= $Database->sql_escape($_POST['id']);
							$tekst 	= $Database->sql_escape($_POST['tekst']);
							$ocjena = $Database->sql_escape($_POST['ocjena']);
							
							$Database->query("UPDATE recenzije SET tekst = '".$tekst."', ocjena = '".$ocjena."' WHERE id = '".$id."';");
							echo 2;
							die();
						}else{
							echo 0;
							die();
						}
					}else{
						$query = $Database->query("SELECT r.*, k.username, s.naziv FROM recenzije AS r INNER JOIN smjestaj AS s ON r.idsmjestaj = s.id INNER JOIN korisnici AS k ON r.idkorisnik = k.id ORDER BY r.id ASC;");
						$i = 1;
						while ($row = $Database->fetch_array($query)) {
							$recenzije[$i]['id']		= $row['id'];
							$recenzije[$i]['username']	= $row['username'];
							$recenzije[$i]['naziv']		= $row['naziv'];
							$recenzije[$i]['tekst']		= $row['tekst'];
							$recenzije[$i]['ocjena']	= $row['ocjena'];
							$i++;
						}
						$template->assign_vars(array(
							'username'	=>	$_SESSION["username"], 
							'login'		=> 1,
							'admin'		=> 1,
							'recenzije'	=> $recenzije,
						));
						$Database->close();
						$template->show('adminrecenzija.tpl');
						die();
					}
				break;
				case 'korisnici':
					if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
						$action = $Database->sql_escape($_POST['action']);
						if($action == 1){
							$id = $Database->sql_escape($_POST['id']);
					
							$Database->query("DELETE FROM korisnici WHERE id = '".$id."';");
							echo 1;
							die();
						}else if($action == 2){
							$id = $Database->sql_escape($_POST['id']);
							
							$Database->query("UPDATE korisnici SET admin = 1 WHERE id = '".$id."';");
							echo 2;
							die();
						}else if($action == 3){
							$id = $Database->sql_escape($_POST['id']);
							
							$Database->query("UPDATE korisnici SET admin = 0 WHERE id = '".$id."';");
							echo 3;
							die();
						}else{
							echo 0;
							die();
						}
					}else{
						$query = $Database->query("SELECT * FROM korisnici ORDER BY username ASC;");
						$i = 1;
						while ($row = $Database->fetch_array($query)) {
							$korisnici[$i]['id']		= $row['id'];
							$korisnici[$i]['username']	= $row['username'];
							$korisnici[$i]['email']		= $row['email'];
							$korisnici[$i]['bonus']		= $row['bonus'];
							$korisnici[$i]['admin']		= $row['admin'] == 1 ? 'DA' : 'NE';
							$i++;
						}
						$template->assign_vars(array(
							'username'	=>	$_SESSION["username"], 
							'login'		=> 1,
							'admin'		=> 1,
							'korisnici'	=> $korisnici,
						));
						$Database->close();
						$template->show('adminkorisnici.tpl');
						die();
					}
				break;
				case 'poruke':
					if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
						$id = $Database->sql_escape($_POST['id']);
					
						$Database->query("DELETE FROM kontakt WHERE id = '".$id."';");
						echo 1;
						die();
					}else{
						$query = $Database->query("SELECT p.*, k.username, k.email FROM kontakt as p INNER JOIN korisnici as k ON p.idkorisnik = k.id ORDER BY p.id ASC, p.datum ASC;");
						while ($row = $Database->fetch_array($query)) {
							$poruke[$row['id']]['naslov']	= $row['naslov'];
							$poruke[$row['id']]['tekst']	= $row['tekst'];
							$poruke[$row['id']]['username']	= $row['username'];
							$poruke[$row['id']]['email']	= $row['email'];
							$poruke[$row['id']]['datum']	= $row['datum'];
						}
						$template->assign_vars(array(
							'username'	=>	$_SESSION["username"], 
							'login'		=> 1,
							'admin'		=> 1,
							'poruke'	=> $poruke,
						));
						$Database->close();
						$template->show('adminporuke.tpl');
						die();
					}
				break;
			}
		}
		$template->assign_vars(array(
		'username'	=>	$_SESSION["username"], 
		'login'		=> 1,
		'admin'		=> 1,
		));
		$Database->close();
		//Prikazivanje html template
		$template->show('admin.tpl');
	}else{
		echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
		echo '<script>alert(\'Zabranjen pristup!\');</script>';
		die('<script type="text/javascript">window.location=\'index.php\';</script>');	
	}
}else{
	echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
	echo '<script>alert(\'Niste prijavljeni!\');</script>';
	die('<script type="text/javascript">window.location=\'login.php\';</script>');
}
?>