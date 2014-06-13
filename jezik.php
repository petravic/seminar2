<?php
session_start();

$jezik = $_POST['jezik'];
$_SESSION["lang"] =  $jezik;
echo 1;

?>