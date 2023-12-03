<?php
include_once("connection.php");


$memberId = isset($_GET['id']) ? $_GET['id'] : 0;


if (isset($_POST["codemem"])) {
    $code = $_POST["codemem"];
    $req = "DELETE FROM `membre` WHERE `membre`.`codemem`= $code LIMIT 1";
    $res = $cx->query($req);

    if ($res && $cx->affected_rows > 0) {
        echo "suppression effectuee avec succes!";
    } else {
        echo "suppression n'est pas effectuee !";
    }
}

include_once("deconnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer Membre</title>
</head>
<body>
    <form action="supprMembre.php?id=<?php echo $memberId; ?>" method="post">
        <table>
            <tr>
                <td><label>code Membre</label></td>
                <td><input type="text" name="codemem" value="<?php echo $memberId; ?>" readonly></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="supprimer"> 
                </td>
                <td>
                    <input type="reset" value="annuler">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
