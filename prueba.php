<?php

require_once __DIR__ . '/vendor/autoload.php';

$pais= $_POST["cnt"];
$ciudad= $_POST["cty"];

$collection = (new MongoDB\Client)->mydb->paises;

$insertOneResult = $collection->insertOne([
    'country' => $pais,
    'city' => $ciudad,
    
]);

header("Location:index.php");
//printf("Se insertó %d documento(s)\n", $insertOneResult->getInsertedCount());



var_dump($insertOneResult->getInsertedId());

?>