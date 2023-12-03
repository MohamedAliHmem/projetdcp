<?php
include_once("connection.php");

$memberId = isset($_GET['id']) ? $_GET['id'] : 0;

$req = "SELECT * FROM membre WHERE codemem = $memberId";
$res = $cx->query($req);

if ($res) {
    $l = $res->fetch_array();
} else {
    die("Query failed: " . $cx->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Membre</title>
</head>
<body>

<form action="modifierMembre_action.php" method="post">
    <table>
        <tr>
            <td><label>Code Membre</label></td>
            <td><input type="text" name="codemem" value="<?php echo $l['codemem']; ?>" readonly></td>
        </tr>
        <tr>
            <td><label>Nom</label></td>
            <td><input type="text" name="nom" value="<?php echo $l['nom']; ?>"></td>
        </tr>
        <tr>
            <td><label>Prenom</label></td>
            <td><input type="text" name="prenom" value="<?php echo $l['prenom']; ?>"></td>
        </tr>
        <tr>
            <td>
                <label>classe</label>
            </td>
            <td>
                <input type="text" name="classe" value="<?php echo $l['classe']; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label>adresse</label>
            </td>
            <td>
                <input type="text" name="adresse" value="<?php echo $l['adresse']; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label>Statut</label>
            </td>
            <td>
                <input type="text" name="statut" value="<?php echo $l['statut']; ?>" >
            </td>
        </tr>
        <tr>
            <td>
                <label>Score</label>
            </td>
            <td>
                <input type="text" name="score" value="<?php echo $l['score']; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label>Date de naissance</label>
            </td>
            <td>
                <input type="text" name="date" value="<?php echo $l['date']; ?>">
            </td>
        </tr>
    <tr>
        


        <tr>
            <td>
                <input type="submit" value="Modifier"> 
            </td>
           
        </tr>
        
    </table>
</form>
         <a href="listeMembre.php"><button>anuuler</button></a>

</body>
</html>
