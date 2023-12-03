<?php
include_once("connection.php");

$memberId = isset($_GET['id']) ? $_GET['id'] : 0;

$req = "SELECT * FROM evenement WHERE codeevent = $memberId";
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
    <title>Document</title>
</head>
<body>
    <form action="modifevenementaction.php" method="post">
<table>
        <tr>
            <td><label>code evenement</label></td>
            <td><input type="text" name="codeevent" value="<?php echo $l['codeevent']; ?>"readonly ></td>
        </tr>
        <tr>
            <td>
                <label>nom</label>
            </td>
            <td>
                <input type="text" name="nom" value="<?php echo $l['nom']; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label>date debut</label>
            </td>
            <td>
                <input type="text" name="dated" value="<?php echo $l['dated']; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label>date fin</label>
            </td>
            <td>
                <input type="text" name="datef" value="<?php echo $l['datef']; ?>">
            </td>
        </tr>
       
    <tr>
        
        <td>
            <input type="submit" value="modifier"> 
        </td>
       
    </tr>
</table>
    </form>
    <a href="listeevenement.php"><button>annuler</button></a>
    <p> on doit avoir la liste et le crud des taches ici </p>
</body>

    
</html>








