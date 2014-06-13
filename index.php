<?php

//Ukljuèivanje potrebnih klasa
define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
require('includes/classes/class.Database.php');
require('includes/classes/class.template.php');

session_start();

//Inicijalizacija objekata za bazu podataka i html template
$Database = new Database();
$template = new template();

//Povlacenje podataka iz baze
$query = $Database->query("SELECT * FROM smjestaj ORDER BY popularnost DESC LIMIT 0,4");

//Spremanje podtaka u polje
$i = 0;
while ($row = $Database->fetch_array($query)) {
	$top[$i]['id']		= $row['id'];
	$top[$i]['naziv']	= $row['naziv'];
	$top[$i]['opis']	= $row['opis'];
	$i++;
}

$query = $Database->query("SELECT r.*, k.ime, k.prezime FROM recenzije AS r INNER JOIN korisnici AS k ON r.idkorisnik = k.id WHERE r.ocjena = 5 ORDER BY r.id DESC LIMIT 0,3");

$i = 0;
while ($row = $Database->fetch_array($query)) {
	$recenzija[$i]['id']	= $row['idsmjestaj'];
	$recenzija[$i]['tekst']	= $row['tekst'];
	$recenzija[$i]['ime']	= ucfirst($row['ime']);
	$recenzija[$i]['prezime']	= ucfirst($row['prezime']);
	$i++;
}

$Database->close();

$template->assign_vars(array(
	'top'		=>	$top,
	'recenzije'	=> $recenzija,
));

if(isset($_SESSION['CREATED'])) {
	//Inicijalizacija varijabli za html template
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
	$template->assign_vars(array(
			'username'	=>	'', 
			'login'		=> 0,
			'admin' 	=> 0,
		));
}

//Prikazivanje html template
if(isset($_SESSION['lang']) AND $_SESSION['lang'] == 'en'){
	$template->show('en_index.tpl');
}else{
	$template->show('index.tpl');
}

?>