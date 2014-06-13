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
	0 => "%",
	1 => "Dubrovačko-neretvanska županija",
	2 => "Istarska županija",
	3 => "Ličko-senjska županija",
	4 => "Primorsko-goranska županija",
	5 => "Splitsko-dalmatinska županija",
	6 => "Šibensko-kninska županija",
	7 => "Zadarska županija",
);

$tipovi = array(
	0 => "%",
	1 => "soba",
	2 => "apartman",
);

$sorting = array(
	1 => "naziv ASC",
	2 => "naziv DESC",
	3 => "kategorija ASC",
	4 => "kategorija DESC",
);

$zvojezdice = array(
	1 => "<img width='13' height='13' src='images/star.png'>",
	2 => "<img width='13' height='13' src='images/star.png'><img width='13' height='13' src='images/star.png'>",
	3 => "<img width='13' height='13' src='images/star.png'><img width='13' height='13' src='images/star.png'><img width='13' height='13' src='images/star.png'>",
	4 => "<img width='13' height='13' src='images/star.png'><img width='13' height='13' src='images/star.png'><img width='13' height='13' src='images/star.png'><img width='13' height='13' src='images/star.png'>",
	5 => "<img width='13' height='13' src='images/star.png'><img width='13' height='13' src='images/star.png'><img width='13' height='13' src='images/star.png'><img width='13' height='13' src='images/star.png'><img width='13' height='13' src='images/star.png'>",
);

function provjera($data, $min, $max){
	if($data >= $min && $data <= $max){
		return true;
	}else{
		return false;
	}
}

function dodaj($data, $name){
	if($data == true){
		return "&".$name."=1";
	}
}

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
	
	if(isset($_GET['trazi'])){
		$tip 			= $Database->sql_escape($_GET['tip']);
		$zupanija 		= $Database->sql_escape($_GET['zupanija']);
		$kategorija 	= $_GET['kategorija'] == 0 ? 1 : $Database->sql_escape($_GET['kategorija']);
		$poc			= isset($_GET['poc']) ? $_GET['poc'] : 1;
		$rez 			= $Database->sql_escape($_GET['rez']);
		$sort 			= $Database->sql_escape($_GET['sort']);
		$napredno 		= isset($_GET['napredno']) 	? 1 : 0;
		if($napredno == 1){
			$lezaja 		= $_GET['lezaja'] == 0 ? 1 : $Database->sql_escape($_GET['lezaja']);
			$plaza 			= $_GET['plaza'] == 0 ? 0 : $Database->sql_escape($_GET['plaza']);
			$centar 		= $_GET['centar'] == 0 ? 0 : $Database->sql_escape($_GET['centar']);
			$nocenje 		= $_GET['nocenje'] == 0 ? 10 : $Database->sql_escape($_GET['nocenje']);
			if(provjera($tip, 0, 2) && provjera($zupanija, 0, 7) && provjera($kategorija, 0, 5) && provjera($rez, 10, 50) && provjera($sort, 1, 4) && provjera($lezaja, 1, 10) && provjera($plaza, 0, 100000) && provjera($centar, 0, 100000) && provjera($nocenje, 10, 2000)){
				$query = "SELECT * FROM smjestaj WHERE tip LIKE '".$tipovi[$tip]."' AND zupanija LIKE '".$zupanije[$zupanija]."' AND kategorija >= ".$kategorija." AND lezaja >= ".$lezaja." AND plaza >= ".$plaza." AND centar >= ".$centar." AND nocenje >= ".$nocenje." ";
				isset($_GET['parking']) 	? $query .= "AND parking = 1 " : 0;
				isset($_GET['ljubimci']) 	? $query .= "AND ljubimci = 1 " : 0;
				isset($_GET['rostilj'])	 	? $query .= "AND rostilj = 1 " : 0;
				isset($_GET['terasa']) 		? $query .= "AND terasa = 1 " : 0;
				isset($_GET['klima']) 		? $query .= "AND klima = 1 " : 0;
				isset($_GET['tv']) 			? $query .= "AND tv = 1 " : 0;
				isset($_GET['telefon']) 	? $query .= "AND tel = 1 " : 0;
				isset($_GET['internet']) 	? $query .= "AND internet = 1 " : 0;
				$query .= "ORDER BY ".$sorting[$sort].";";
				$result = $Database->query($query);
				$count = 1;
				$i = $result->num_rows;
				$stranice = array();
				$start = 1;
				$end = (int)$rez;
				$j = 0;
				$stranice[0]['poc'] = $start;
				if($end < $i){
					$stranice[0]['kraj'] = $end;
					$j++;
				}else
					$stranice[0]['kraj'] = $i;
				do{
					if(($end +1) <= $i){
						$start = $end + 1;
						if(($end + $rez) <= $i)
							$end += $rez;
						else{
							$end = $i;
						}
						$stranice[$j]['poc'] = $start;
						$stranice[$j]['kraj'] = $end;
					}else
						break;
					$j++;
				}while(1);
				while ($row = $Database->fetch_array($result) ) {
						$smjestaj[$count]['id']			= $row['id'];
						$smjestaj[$count]['tip']		= $row['tip'] == 'apartman' ? 'Apartman' : 'Soba';
						$smjestaj[$count]['naziv']		= $row['naziv'];
						$smjestaj[$count]['mjesto']		= $row['mjesto'];
						$smjestaj[$count]['plaza']		= $row['plaza'] < 1000 ? $row['plaza'].' m' : ($row['plaza']/1000).' km';
						$smjestaj[$count]['centar']		= $row['centar'] < 1000 ? $row['centar'].' m' : ($row['centar']/1000).' km';
						$smjestaj[$count]['kategorija']	= $zvojezdice[$row['kategorija']];
						$smjestaj[$count]['lezaja']		= $row['lezaja'];
						$smjestaj[$count]['pomlezaja']	= $row['pomlezaja'];
						$smjestaj[$count]['nocenje']	= $row['nocenje'];
						$smjestaj[$count]['info1']		= $row['parking'] == 1 ? 'Parking' : '';
						isset($smjestaj[$count]['info1']) ? ($smjestaj[$count]['info1'] .= $row['rostilj'] == 1 ? ', roštilj' : '') : ($smjestaj[$count]['info1'] = $row['rostilj'] == 1 ? 'Roštilj' : '');
						isset($smjestaj[$count]['info1']) ? ($smjestaj[$count]['info1']	.= $row['ljubimci'] == 1 ? ', kućni ljubimci dozvoljeni' : '') : ($smjestaj[$count]['info1'] = $row['ljubimci'] == 1 ? 'Kućni ljubimci dozvoljeni' : '');
						$smjestaj[$count]['info2']		= $row['klima'] == 1 ? 'klima' : '';
						isset($smjestaj[$count]['info2']) ? ($smjestaj[$count]['info2'] .= $row['tv'] == 1 ? ', TV' : '') : ($smjestaj[$count]['info2'] = $row['tv'] == 1 ? 'TV' : '');
						isset($smjestaj[$count]['info2']) ? ($smjestaj[$count]['info2'] .= $row['tel'] == 1 ? ', telefon' : '') : ($smjestaj[$count]['info2'] = $row['tel'] == 1 ? 'telefon' : '');
						isset($smjestaj[$count]['info2']) ? ($smjestaj[$count]['info2'] .= $row['terasa'] == 1 ? ', terasa' : '') : ($smjestaj[$count]['info2'] = $row['terasa'] == 1 ? 'terasa' : '');
						isset($smjestaj[$count]['info2']) ? ($smjestaj[$count]['info2'] .= $row['internet'] == 1 ? ', internet' : '') : ($smjestaj[$count]['info2'] = $row['tel'] == 1 ? 'internet' : '');
					$count++;
				}
				$dodatno = "";
				$dodatno .= dodaj(isset($_GET['parking']), 'parking');
				$dodatno .= dodaj(isset($_GET['ljubimci']), 'ljubimci');
				$dodatno .= dodaj(isset($_GET['rostilj']), 'rostilj');
				$dodatno .= dodaj(isset($_GET['terasa']), 'terasa');
				$dodatno .= dodaj(isset($_GET['klima']), 'klima');
				$dodatno .= dodaj(isset($_GET['tv']), 'tv');
				$dodatno .= dodaj(isset($_GET['tel']), 'tel');
				$dodatno .= dodaj(isset($_GET['internet']), 'internet');
				$template->assign_vars(array(
					'smjestaj'	=> $smjestaj,
					'count'		=> $i,
					'poc'		=> $poc,
					'stranice'	=> $stranice,
					'tip' 		=> $tip,
					'zupanija' 	=> $zupanija,
					'kategorija'=> $Database->sql_escape($_GET['kategorija']),
					'rez' 		=> $rez,
					'sort' 		=> $sort,
					'j'			=> $j-1,
					'lezaja'	=> $lezaja,
					'plaza'		=> $plaza,
					'centar'	=> $centar,
					'nocenje'	=> $nocenje,
					'napredno'	=> $napredno,
					'dodatno'	=> $dodatno,
				));
				if(isset($_SESSION['lang']) AND $_SESSION['lang'] == 'en'){
					$template->show('en_smjestajpretrazi.tpl');
				}else{
					$template->show('smjestajpretrazi.tpl');
				}
				die();
			}else{
				echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
				echo '<script>alert(\'Greška pretraživanja!\');</script>';
				die('<script type="text/javascript">window.location=\'smjestaj.php\';</script>');
			}
		}else{
			if(provjera($tip, 0, 2) && provjera($zupanija, 0, 7) && provjera($kategorija, 0, 5) && provjera($rez, 10, 50) && provjera($sort, 1, 4)){
				$query = "SELECT * FROM smjestaj WHERE tip LIKE '".$tipovi[$tip]."' AND zupanija LIKE '".$zupanije[$zupanija]."' AND kategorija >= ".$kategorija." ORDER BY ".$sorting[$sort].";";
				$result = $Database->query($query);
				$count = 1;
				$i = $result->num_rows;
				$stranice = array();
				$start = 1;
				$end = (int)$rez;
				$j = 1;
				$stranice[0]['poc'] = $start;
				$stranice[0]['kraj'] = $end;
				do{
					if(($end +1) <= $i){
						$start = $end + 1;
						if(($end + $rez) <= $i)
							$end += $rez;
						else{
							$end = $i;
						}
						$stranice[$j]['poc'] = $start;
						$stranice[$j]['kraj'] = $end;
					}else
						break;
					$j++;
				}while(1);
				while ($row = $Database->fetch_array($result) ) {
						$smjestaj[$count]['id']			= $row['id'];
						$smjestaj[$count]['tip']		= $row['tip'] == 'apartman' ? 'Apartman' : 'Soba';
						$smjestaj[$count]['naziv']		= $row['naziv'];
						$smjestaj[$count]['mjesto']		= $row['mjesto'];
						$smjestaj[$count]['plaza']		= $row['plaza'] < 1000 ? $row['plaza'].' m' : ($row['plaza']/1000).' km';
						$smjestaj[$count]['centar']		= $row['centar'] < 1000 ? $row['centar'].' m' : ($row['centar']/1000).' km';
						$smjestaj[$count]['kategorija']	= $zvojezdice[$row['kategorija']];
						$smjestaj[$count]['lezaja']		= $row['lezaja'];
						$smjestaj[$count]['pomlezaja']	= $row['pomlezaja'];
						$smjestaj[$count]['nocenje']	= $row['nocenje'];
						$smjestaj[$count]['info1']		= $row['parking'] == 1 ? 'Parking' : '';
						isset($smjestaj[$count]['info1']) ? ($smjestaj[$count]['info1'] .= $row['rostilj'] == 1 ? ', roštilj' : '') : ($smjestaj[$count]['info1'] = $row['rostilj'] == 1 ? 'Roštilj' : '');
						isset($smjestaj[$count]['info1']) ? ($smjestaj[$count]['info1']	.= $row['ljubimci'] == 1 ? ', kućni ljubimci dozvoljeni' : '') : ($smjestaj[$count]['info1'] = $row['ljubimci'] == 1 ? 'Kućni ljubimci dozvoljeni' : '');
						$smjestaj[$count]['info2']		= $row['klima'] == 1 ? 'klima' : '';
						isset($smjestaj[$count]['info2']) ? ($smjestaj[$count]['info2'] .= $row['tv'] == 1 ? ', TV' : '') : ($smjestaj[$count]['info2'] = $row['tv'] == 1 ? 'TV' : '');
						isset($smjestaj[$count]['info2']) ? ($smjestaj[$count]['info2'] .= $row['tel'] == 1 ? ', telefon' : '') : ($smjestaj[$count]['info2'] = $row['tel'] == 1 ? 'telefon' : '');
						isset($smjestaj[$count]['info2']) ? ($smjestaj[$count]['info2'] .= $row['terasa'] == 1 ? ', terasa' : '') : ($smjestaj[$count]['info2'] = $row['terasa'] == 1 ? 'terasa' : '');
						isset($smjestaj[$count]['info2']) ? ($smjestaj[$count]['info2'] .= $row['internet'] == 1 ? ', internet' : '') : ($smjestaj[$count]['info2'] = $row['tel'] == 1 ? 'internet' : '');
					$count++;
				}
				$template->assign_vars(array(
					'smjestaj'	=>	$smjestaj,
					'count'		=> $i,
					'poc'		=> $poc,
					'stranice'	=> $stranice,
					'tip' 		=> $tip,
					'zupanija' 	=> $zupanija,
					'kategorija'=> $Database->sql_escape($_GET['kategorija']),
					'rez' 		=> $rez,
					'sort' 		=> $sort,
					'j'			=> $j-1,
					'napredno'	=> $napredno,
				));
				if(isset($_SESSION['lang']) AND $_SESSION['lang'] == 'en'){
					$template->show('en_smjestajpretrazi.tpl');
				}else{
					$template->show('smjestajpretrazi.tpl');
				}
				die();
			}else{
				echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
				echo '<script>alert(\'Greška pretraživanja!\');</script>';
				die('<script type="text/javascript">window.location=\'smjestaj.php\';</script>');
			}
		}
	}elseif(isset($_GET['id'])){
	
		$id = $Database->sql_escape($_GET['id']);
		
		$query = "SELECT * FROM smjestaj WHERE id = ".$id.";";
		
		$result = $Database->query($query);
		
		$i = 1;
		
		while ($row = $Database->fetch_array($result) ) {
			$smjestaj[$i]['id']			= $row['id'];
			$smjestaj[$i]['tip']		= $row['tip'] == 'apartman' ? 'Apartman' : 'Soba';
			$smjestaj[$i]['naziv']		= $row['naziv'];
			$smjestaj[$i]['mjesto']		= $row['mjesto'];
			$smjestaj[$i]['adresa']		= $row['adresa'];
			$smjestaj[$i]['plaza']		= $row['plaza'] < 1000 ? $row['plaza'].' m' : ($row['plaza']/1000).' km';
			$smjestaj[$i]['centar']		= $row['centar'] < 1000 ? $row['centar'].' m' : ($row['centar']/1000).' km';
			$smjestaj[$i]['kategorija']	= $zvojezdice[$row['kategorija']];
			$smjestaj[$i]['lezaja']		= $row['lezaja'];
			$smjestaj[$i]['pomlezaja']	= $row['pomlezaja'];
			$smjestaj[$i]['nocenje']	= $row['nocenje'];
			$smjestaj[$i]['parking']	= $row['parking'];
			$smjestaj[$i]['rostilj']  	= $row['rostilj'];
			$smjestaj[$i]['ljubimci'] 	= $row['ljubimci'];
			$smjestaj[$i]['klima']		= $row['klima'];
			$smjestaj[$i]['tv']			= $row['tv'];
			$smjestaj[$i]['tel']		= $row['tel'];
			$smjestaj[$i]['terasa']		= $row['terasa'];
			$smjestaj[$i]['internet']	= $row['internet'];
			$smjestaj[$i]['kontakt']	= $row['kontakt'];
			$smjestaj[$i]['email']		= $row['email'];
			$smjestaj[$i]['telefon']	= $row['telefon'];
			$i++;
		}
		
		$query = "UPDATE smjestaj SET popularnost = popularnost +1 WHERE id = ".$id.";";
		$Database->query($query);
		
		$template->assign_vars(array(
			'smjestaj'	=>	$smjestaj,
		));
		if(isset($_SESSION['lang']) AND $_SESSION['lang'] == 'en'){
			$template->show('en_smjestajpregled.tpl');
		}else{
			$template->show('smjestajpregled.tpl');
		}
		die();
	}
	
	$Database->close();

	//Prikazivanje html template
	if(isset($_SESSION['lang']) AND $_SESSION['lang'] == 'en'){
		$template->show('en_smjestaj.tpl');
	}else{
		$template->show('smjestaj.tpl');
	}
}else{
	echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
	echo '<script>alert(\'Niste prijavljeni!\');</script>';
	die('<script type="text/javascript">window.location=\'login.php\';</script>');
}

?>