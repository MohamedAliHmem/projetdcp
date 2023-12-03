<?php
header("Location: indextache.php");
$rate = $_POST["rate"];
$tache = $_POST["tache"];

include_once("tache.php");

$c = new Tache();
$c -> insert($rate,$tache);


?>