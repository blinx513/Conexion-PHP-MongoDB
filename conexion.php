<?php
	
	require_once __DIR__ . '/vendor/autoload.php';
    $paises = (new MongoDB\Client)->mydb->paises; 
	
?>