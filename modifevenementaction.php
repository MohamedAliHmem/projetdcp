<?php 

$codeevent=$_POST["codeevent"];
$nom = $_POST["nom"];
$dated = $_POST["dated"];
$datef=$_POST["datef"];


include_once("connection.php");
$req = "UPDATE evenement SET codeevent='$codeevent', nom='$nom', dated='$dated',datef='$datef' WHERE codeevent=$codeevent";
$res=$cx->query($req);

if($res) echo "modification effectuee avec succes<br>";
else echo"modification n est pa effectuee<br>";
include_once("deconnection.php");


?>
<a href="listeevenement.php">
    <button>return</button>
</a>