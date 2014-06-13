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
	
	$query = $Database->query("SELECT * FROM smjestaj ORDER BY popularnost DESC LIMIT 0,3");
		
	$i = 0;
	while ($row = $Database->fetch_array($query)) {
		$top[$i]['id']		= $row['id'];
		$top[$i]['naziv']	= $row['naziv'];
		$i++;
	}

	$Database->free_result($query);
		
	$template->assign_vars(array(
		'top'	=>	$top, 
	));
	
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
	
	if(isset($_GET['id'])){
		$id 	= $Database->sql_escape($_GET['id']);
		$popust = isset($_GET['popust']) ? $Database->sql_escape($_GET['popust']) : 0;
		$username = $_SESSION["username"];
		
		if(!empty($id)){
			$userID = $Database->fetchquery("SELECT * FROM korisnici WHERE username = '".$username."'");
			$smjestaj = $Database->fetchquery("SELECT * FROM smjestaj WHERE id = '".$id."'");
			$query = "SELECT * FROM smjestaj WHERE id = '".$id."'";
			$result = $Database->query($query);
			$count = $result->num_rows;
			if($count < 1){
				echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
				echo '<script>alert(\'Nepostojeci smjestaj!\');</script>';
				die('<script type="text/javascript">window.location=\'index.php\';</script>');
			}
			if($popust != 0){
				$query = "SELECT * FROM popusti WHERE id = '".$popust."'";
				$result = $Database->query($query);
				$count = $result->num_rows;
				if($count < 1){
					echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
					echo '<script>alert(\'Nepostojeci popust!\');</script>';
					die('<script type="text/javascript">window.location=\'popusti.php\';</script>');
				}
				$result = $Database->fetchquery("SELECT * FROM popusti WHERE id = '".$popust."'");
				if($userID[0]['bonus'] >= $result[0]['minbonus']){
					$today = strtotime(date("Y-m-d"));
					$tempstart = strtotime($result[0]['datum']);
					$tempend   = $tempstart + ($result[0]['dana'] * 86400);
					if($today  <= $tempend && $today >= $tempstart){
						$popust = $result[0]['popust'];
					}else{
						echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
						echo '<script>alert(\'Popust je istekao ili nije jos počeo!\');</script>';
						die('<script type="text/javascript">window.location=\'popusti.php\';</script>');
					}
				}else{
					echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
					echo '<script>alert(\'Nemate dosta bonus bodova!\');</script>';
					die('<script type="text/javascript">window.location=\'popusti.php\';</script>');
				}
			}
			$query = "SELECT * FROM rezervacije WHERE idsmjestaj  = ".$id.";";
			$result = $Database->query($query);
			$count = $result->num_rows;
			$i = 0;
			if($count >= 1){
				$today = strtotime(date("Y-m-d"));
				while ($row = $Database->fetch_array($result) ) {
					$tempstart = strtotime($row['datum']);
					$tempend   = $tempstart + ($row['dana'] * 86400);
					if($today > $tempstart || $today < $tempend){
						$zauzeto[$i]['datumstart'] = date("d.m.Y.",$tempstart);
						$zauzeto[$i]['datumend'] =  date("d.m.Y.",$tempend);
						$i++;
					}
				}
			}else{
				$zauzeto = "Nema rezervacija.";
			}
			$osoba = $smjestaj[0]['lezaja'] + $smjestaj[0]['pomlezaja'];
			$template->assign_vars(array(
				'idkorisnik'	=> $userID[0]['id'], 
				'idsmjestaj'	=> $id,
				'nocenje'		=> $smjestaj[0]['nocenje'],
				'ime'			=> $smjestaj[0]['naziv'],
				'osobamax'		=> $osoba,
				'zauzeto'		=> $zauzeto,
				'max'			=> $i-1,
				'i'				=> $i,
				'popust'		=> $popust,
			));
			
			$Database->close();
			if(isset($_SESSION['lang']) AND $_SESSION['lang'] == 'en'){
				$template->show('en_rezervacija.tpl');
			}else{
				$template->show('rezervacija.tpl');
			}
		}else{
			echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
			echo '<script>alert(\'Nepostojeci smjestaj!\');</script>';
			die('<script type="text/javascript">window.location=\'index.php\';</script>');
		}
	}else if($_POST){
		$idkorisnik = $Database->sql_escape($_POST['idkorisnik']);
		$idsmjestaj = $Database->sql_escape($_POST['idsmjestaj']);
		$nocenje 	= $Database->sql_escape($_POST['nocenje']);
		$datum 		= $Database->sql_escape($_POST['datum']);
		$dana 		= $Database->sql_escape($_POST['dana']);
		$osoba 		= $Database->sql_escape($_POST['osoba']);
		$popust 	= $Database->sql_escape($_POST['popust']);
		if(!empty($idkorisnik) && !empty($idsmjestaj) && !empty($nocenje) && !empty($datum) && !empty($dana) && !empty($osoba)){
			if(!preg_match('(([1-9]|0[1-9]|[12][0-9]|3[01])[-\.]([1-9]|0[1-9]|1[012])[-\.](19|20)\d\d)', $datum)){
				echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
				echo '<script>alert(\'Pogrešan datum!\');</script>';
				die('<script type="text/javascript">window.location=\'rezervacija.php?id='.$idsmjestaj.'\';</script>');
			}
			$datumstart = strtotime($datum);
			$today = strtotime(date("Y-m-d"));
			if($today > $datumstart){
				echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
				echo '<script>alert(\'Datum je vec prošao!\');</script>';
				die('<script type="text/javascript">window.location=\'rezervacija.php?id='.$idsmjestaj.'\';</script>');
			}
			$datumend 	= $datumstart + ($dana * 86400);
			$query = "SELECT * FROM rezervacije WHERE idsmjestaj  = ".$idsmjestaj.";";
			$result = $Database->query($query);
			$count = $result->num_rows;
			$i = 0;
			if($count >= 1){
				while ($row = $Database->fetch_array($result) ) {
					$tempstart = strtotime($row['datum']);
					$tempend   = $tempstart + ($row['dana'] * 86400);
					if(in_array( $datumstart , range($tempstart , $tempend)) || in_array( $datumend , range($tempstart , $tempend)))
						$i++;
				}
				if($i > 0){
					echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
					echo '<script>alert(\'Smjestaj nije slobodan tih dana!\');</script>';
					die('<script type="text/javascript">window.location=\'rezervacija.php?id='.$idsmjestaj.'\';</script>');
				}
			}
			$smjestaj = $Database->fetchquery("SELECT * FROM smjestaj WHERE id = '".$idsmjestaj."'");
			$maxosoba = $smjestaj[0]['lezaja'] + $smjestaj[0]['pomlezaja'];
			if($osoba > $maxosoba){
				echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
				echo '<script>alert(\'Smjestaj nemoze prihvatiti toliko osoba!\');</script>';
				die('<script type="text/javascript">window.location=\'rezervacija.php?id='.$idsmjestaj.'\';</script>');			
			}
			$cijena = $dana * $smjestaj[0]['nocenje'];
			if($popust != 0){
				$query = "SELECT * FROM popusti WHERE idsmjestaj = '".$idsmjestaj."' AND popust = '".$popust."'";
				$result = $Database->query($query);
				$count = $result->num_rows;
				if($count < 1){
					echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
					echo '<script>alert(\'Nepostojeci popust!\');</script>';
					die('<script type="text/javascript">window.location=\'popusti.php\';</script>');
				}
				$result = $Database->fetchquery("SELECT * FROM popusti WHERE idsmjestaj = '".$idsmjestaj."' AND popust = '".$popust."'");
				$userID = $Database->fetchquery("SELECT * FROM korisnici WHERE id = '".$idkorisnik."'");
				if($userID[0]['bonus'] >= $result[0]['minbonus']){
					$today = strtotime(date("Y-m-d"));
					$tempstart = strtotime($result[0]['datum']);
					$tempend   = $tempstart + ($result[0]['dana'] * 86400);
					if($today  <= $tempend && $today >= $tempstart){
						$popust = $result[0]['popust'];
						$oduzmi = ($popust/100)*$cijena;
						$cijena -= $oduzmi;
						$query = "UPDATE korisnici SET bonus = bonus - ".$result[0]['minbonus']." WHERE id = ".$idkorisnik.";";
						$Database->query($query);
					}else{
						echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
						echo '<script>alert(\'Popust je istekao ili nije jos počeo!\');</script>';
						die('<script type="text/javascript">window.location=\'popusti.php\';</script>');
					}
				}else{
					echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
					echo '<script>alert(\'Nemate dosta bonus bodova!\');</script>';
					die('<script type="text/javascript">window.location=\'popusti.php\';</script>');
				}
			}
			$Database->query("INSERT INTO rezervacije (idsmjestaj, idkorisnik, datum, dana, cijena, osoba) VALUES('".$idsmjestaj."', '".$idkorisnik."', '".date("Y-m-d", $datumstart)."', '".$dana."', '".$cijena."', '".$osoba."');");
			$query = "UPDATE smjestaj SET popularnost = popularnost + ".$dana." WHERE id = ".$idsmjestaj.";";
			$Database->query($query);
			$query = "UPDATE korisnici SET bonus = bonus + ".$cijena." WHERE id = ".$idkorisnik.";";
			$Database->query($query);
			echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
			echo '<script>alert(\'Rezervacija uspiješna!\');</script>';
			die('<script type="text/javascript">window.location=\'index.php\';</script>');	
		}else{
			echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
			echo '<script>alert(\'Pogrešan unos!\');</script>';
			die('<script type="text/javascript">window.location=\'rezervacija.php?id='.$idsmjestaj.'\';</script>');
		}
	}else{
		echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
		echo '<script>alert(\'Niste odabrali smjestaj!\');</script>';
		die('<script type="text/javascript">window.location=\'smjestaj.php\';</script>');
	}
}else{
	echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
	echo '<script>alert(\'Niste prijavljeni!\');</script>';
	die('<script type="text/javascript">window.location=\'login.php\';</script>');
}
?>