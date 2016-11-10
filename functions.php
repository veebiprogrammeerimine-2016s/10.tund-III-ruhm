<?php 
	// functions.php
	require("/home/romil/config.php");
	
	// et saab kasutada $_SESSION muutujaid
	// kõigis failides mis on selle failiga seotud
	session_start(); 
	
	/* ÜHENDUS */
	$database = "if16_romil";
	$mysqli = new mysqli($serverHost, $serverUsername,  $serverPassword, $database);

	
?>