<?php
include_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Membres</title>
</head>
<body>

<?php
$req = "SELECT * FROM membre";
$res = $cx->query($req);

echo "<table border='1'>";
echo "<tr>
        <td>Code membre</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Classe</td>
        <td>Adresse</td>
        <td>Statut</td>
        <td>Score</td>
        <td>Date de naissance</td>
        <td>Options</td>
      </tr>";

while ($l = $res->fetch_array()) {
    echo "<tr>
            <td>".$l['codemem']."</td>
            <td>".$l['nom']."</td>
            <td>".$l['prenom']."</td>
            <td>".$l['classe']."</td>
            <td>".$l['adresse']."</td>
            <td>".$l['statut']."</td>
            <td>".$l['score']."</td>
            <td>".$l['date']."</td>
            <td>
                <a href='modifierMembre.php?id=".$l['codemem']."'>Modifier</a>
                <a href='supprMembre.php?id=".$l['codemem']."'>Supprimer</a>
            </td>
          </tr>";
}

echo "</table>";

include_once("deconnection.php");
?>

</body>
</html>
