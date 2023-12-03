<?php
header("Location: indextache.php");

$id = $_GET['id'];


include_once("tache.php");

$c = new Tache();
$c -> delete($id);


?>