<?php

include_once("connection.php");
$req="SELECT * FROM evenement";
$res=$cx->query($req);

echo "<table border='1'>";
echo "<tr><th>Code evenement</th><th>nom</th><th>date debut</th><th>date fin</th><th>Option</th></tr>";
while($l=$res->fetch_array()){
    echo "<tr>";
    echo "<td>".$l["codeevent"]."</td>";
    echo "<td>".$l["nom"]."</td>";
    echo "<td>".$l["dated"]."</td>";
    echo "<td>".$l["datef"]."</td>";
    echo "<td>
    <a href='modifevenement.php?id=".$l['codeevent']."'>Modifier</a>
    <a href='suppevenement.php?id=".$l['codeevent']."'>Supprimer</a>
    <a href='consulterevenement.php?id=".$l['codeevent']."'>Consulter</a>
    </td>";
    echo "</tr>";
}
echo "</table>";
include_once("deconnection.php");
?>