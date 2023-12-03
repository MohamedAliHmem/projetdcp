<?php
$cri=$_POST["crit"];
$val=$_POST["val"];
include_once("connection.php");
$req = "SELECT * FROM evenement WHERE $cri = '$val'";
$res = $cx->query($req);



if ($res->num_rows > 0) {
   $l=$res->fetch_array();
    echo "<table border='1'>";
    echo "<tr><th>code evenement</th><th>nom evenement</th><th>date debut</th><th>date fin</th><th>Option</th></tr>";
    echo "<tr>"; 
    echo "<td>".$l['codeevent']."</td>";
     echo "<td>".$l['nom']."</td>";
     echo "<td>".$l['dated']."</td>";
     echo "<td>".$l['datef']."</td>";
     echo "<td>
    <a href='modifevenement.php?id=".$l['codeevent']."'>Modifier</a>
    <a href='suppevenement.php?id=".$l['codeevent']."'>Supprimer</a>
    </td>";
    echo "</tr>";
    echo "</table>";
} else {
    echo "l evenement n existe pas";
}
include_once("deconnection.php");
?>
