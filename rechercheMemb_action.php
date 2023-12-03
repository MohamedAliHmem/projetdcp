<?php

$cri=$_POST["critere"];
$val=$_POST["valeur"];
include_once("connection.php");


$req = "SELECT * FROM membre WHERE $cri = '$val'";
$res = $cx->query($req);



if ($res && $cx->affected_rows > 0){
    echo "<table border='1'>";
    echo "<tr><td>Code membre</td><td>Nom</td><td>Prenom</td><td>Classe</td><td>Adresse</td><td>Statut</td><td>Score</td><td>Date de naissance</td><td>Option</td></tr>";
    while($l=$res->fetch_array()){
      
      echo "<tr>";
      echo "<td>".$l['codemem']."</td>";
      echo  "<td>".$l['nom']."</td>";
      echo "<td>".$l['prenom']."</td>";
      echo "<td>".$l['classe']."</td>";
      echo "<td>".$l['adresse']."</td>";
      echo "<td>".$l['statut']."</td>";
      echo "<td>".$l['score']."</td>";
      echo "<td>".$l['date']."</td>";
      echo "<td>
                <a href='modifierMembre.php?id=".$l['codemem']."'>Modifier</a>
                <a href='supprMembre.php?id=".$l['codemem']."'>Supprimer</a>
            </td>";
      echo "</tr>";

    }
    echo "</table>";
   }
else {echo "le membre nexiste pas";}

include_once("deconnection.php");
?>