<?php
header("Location: indextache.php");

$id = $_GET['id'];
$tache = $_POST['tache'];
$rate = $_POST['rate'];


include_once("tache.php");

$c = new Tache();
$c -> modifier($rate,$tache,$id);


?>