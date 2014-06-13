<?php

//Uključivanje potrebnih klasa
define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
require('includes/classes/class.Database.php');
require('includes/classes/class.template.php');

session_start();

//Inicijalizacija objekata za bazu podataka i html template
$Database = new Database();
$template = new template();


if(isset($_SESSION['CREATED'])) {
	
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
	$username = $_SESSION["username"];
	$user = $Database->fetchquery("SELECT * FROM korisnici WHERE username = '".$username."'");
	$id = $user[0]['id'];
	$poruka = $Database->fetchquery("SELECT * FROM kontakt WHERE idkorisnik = '".$id."' ORDER BY datum DESC LIMIT 0, 1;");
	$rezervacija = $Database->fetchquery("SELECT * FROM rezervacije WHERE idkorisnik = '".$id."' ORDER BY datum DESC LIMIT 0, 1;");
	$query = $Database->query("SELECT r.*, s.naziv FROM recenzije AS r INNER JOIN smjestaj AS s ON r.idsmjestaj = s.id WHERE r.idkorisnik = ".$id." ORDER BY r.id DESC LIMIT 0,3");
	$count = $query->num_rows;
	if($count > 0){
		$i = 0;
		while ($row = $Database->fetch_array($query)) {
			$recenzija[$i]['tekst']	= $row['tekst'];
			$recenzija[$i]['naziv']	= $row['naziv'];
			$recenzija[$i]['ocjena']= $row['ocjena'];
			$i++;
		}
	}else{
		$recenzija = "Nema recenzija";
	}
	$query = $Database->query("SELECT r.*, s.naziv FROM rezervacije AS r INNER JOIN smjestaj AS s ON r.idsmjestaj= s.id WHERE r.idkorisnik = ".$id." ORDER BY r.datum DESC");
	$count = $query->num_rows;
	if($count > 0){
		$i = 0;
		while ($row = $Database->fetch_array($query)) {
			$count2 = 0;
			$rezervacije[$i]['naziv']		= $row['naziv'];
			$rezervacije[$i]['idsmjestaj']	= $row['idsmjestaj'];
			$rezervacije[$i]['datumstart']	= date("d.m.Y." ,strtotime($row['datum']));
			$rezervacije[$i]['datumend']	= date("d.m.Y." ,((strtotime($row['datum'])+ ($row['dana'] * 86400))));
			$rezervacije[$i]['cijena']		= $row['cijena'];
			$rezervacije[$i]['osoba']		= $row['osoba'];
			$rezervacije[$i]['recenzija']	= (strtotime(date("Y-m-d"))) > (strtotime($rezervacije[$i]['datumend'])) ? 1 : 0;
			$query2 = $Database->query("SELECT * FROM recenzije WHERE idsmjestaj = ".$row['idsmjestaj'].";");
			$count2 = $query2->num_rows;
			$rezervacije[$i]['recenzija2']	= $count2;
			$i++;
		}
	}else{
		$rezervacije = "Nema rezervacija";
	}
	$template->assign_vars(array(
			'username'	=> $_SESSION["username"], 
			'email'		=> $user[0]['email'],
			'ime' 		=> $user[0]['ime'],
			'prezime' 	=> $user[0]['prezime'],
			'adresa' 	=> $user[0]['adresa'],
			'mjesto' 	=> $user[0]['mjesto'],
			'zupanija' 	=> $user[0]['zupanija'],
			'telefon' 	=> $user[0]['telefon'],
			'oib' 		=> $user[0]['oib'],
			'datum' 	=> date("d.m.Y." ,strtotime($user[0]['datumrodenja'])),
			'bonus'		=> $user[0]['bonus'],
			'datump'	=> date("d.m.Y." ,strtotime($poruka[0]['datum'])),
			'datumr'	=> date("d.m.Y.", strtotime($rezervacija[0]['datum'])),
			'recenzija'	=> $recenzija,
			'rezervacije'=> $rezervacije,
		));
	
	if(isset($_GET['id'])){
		$id = $Database->sql_escape($_GET['id']);
		$query = $Database->query("SELECT * FROM smjestaj WHERE id = ".$id.";");
		$count = $query->num_rows;
		if($count == 1){
			$template->assign_vars(array(
				'id'	=>	$id, 
			));
			if(isset($_SESSION['lang']) AND $_SESSION['lang'] == 'en'){
				$template->show('en_recenzija.tpl');
			}else{
				$template->show('recenzija.tpl');
			}	
			die();
		}else{
			echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
			echo '<script>alert(\'Smještaj ne postoji!\');</script>';
			die('<script type="text/javascript">window.location=\'kontakt.php\';</script>');
		}
	}else if($_POST){
		$idsmjestaj = $Database->sql_escape($_POST['idsmjestaj']);
		$tekst		 = $Database->sql_escape($_POST['tekst']);
		$ocjena		 = $Database->sql_escape($_POST['ocjena']);
		if(!empty($idsmjestaj) && !empty($tekst) && !empty($ocjena)){
			if($ocjena >= 1 && $ocjena <=5){
				$query = $Database->query("SELECT * FROM recenzije WHERE idsmjestaj = ".$idsmjestaj.";");
				$count = $query->num_rows;
				if($count == 0){
					$Database->query("INSERT INTO recenzije (idkorisnik, idsmjestaj, tekst, ocjena) VALUES('".$id."', '".$idsmjestaj."', '".$tekst."', '".$ocjena."');");
					$Database->query("UPDATE smjestaj SET popularnost = popularnost + ".$ocjena.";");
					echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
					echo '<script>alert(\'Recenzija poslana!\');</script>';
					die('<script type="text/javascript">window.location=\'profil.php\';</script>');
				}else{
					echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
					echo '<script>alert(\'Recenzija vec postoji!\');</script>';
					die('<script type="text/javascript">window.location=\'profil.php?id='.$idsmjestaj.'\';</script>');
				}
			}else{
				echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
				echo '<script>alert(\'Ocjena nije valjana!\');</script>';
				die('<script type="text/javascript">window.location=\'profil.php?id='.$idsmjestaj.'\';</script>');
			}
		}else{
			echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
			echo '<script>alert(\'Pogreska kod unosa!\');</script>';
			die('<script type="text/javascript">window.location=\'profil.php?id='.$idsmjestaj.'\';</script>');
		}
	}
	
	
}else{
	echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
	echo '<script>alert(\'Niste prijavljeni!\');</script>';
	die('<script type="text/javascript">window.location=\'login.php\';</script>');
}

$Database->close();

//Prikazivanje html template
if(isset($_SESSION['lang']) AND $_SESSION['lang'] == 'en'){
	$template->show('en_profil.tpl');
}else{
	$template->show('profil.tpl');
}

?>