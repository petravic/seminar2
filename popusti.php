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
	
	$query = "SELECT p.*, s.naziv FROM popusti AS p INNER JOIN smjestaj AS s ON p.idsmjestaj = s.id;";
	$result = $Database->query($query);
	$i = 0;
	$today = strtotime(date("Y-m-d"));
	while ($row = $Database->fetch_array($result) ) {
		$tempstart = strtotime($row['datum']);
		$tempend   = $tempstart + ($row['dana'] * 86400);
		if($today < $tempend){
			$popusti[$i]['datumstart'] = date("d.m.Y.",$tempstart);
			$popusti[$i]['datumend'] =  date("d.m.Y.",$tempend);
			$popusti[$i]['idsmjestaj']	= $row['idsmjestaj'];
			$popusti[$i]['naziv'] 		= $row['naziv'];
			$popusti[$i]['popust'] 		= $row['popust'];
			$popusti[$i]['bonus'] 		= $row['minbonus'];
			$popusti[$i]['id'] 			= $row['id'];
			$i++;
		}
	}
	
	$template->assign_vars(array(
		'popusti'	=> $popusti, 
	));
	
}else{
	echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
	echo '<script>alert(\'Niste prijavljeni!\');</script>';
	die('<script type="text/javascript">window.location=\'login.php\';</script>');
}

$Database->close();

//Prikazivanje html template
if(isset($_SESSION['lang']) AND $_SESSION['lang'] == 'en'){
	$template->show('en_popusti.tpl');
}else{
	$template->show('popusti.tpl');
}

?>