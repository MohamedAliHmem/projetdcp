<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>veuillez selectionner un criterede recherche</h3>
    <form action="rechevenementaction.php" method="post">
    <table>
        <tr>
            <td><label>critere</label></td>
            <td><select name="crit" >
                <option value="codeevent">code evenement</option>
                <option value="nom">nom</option>
                <option value="dated">date debut</option>
                <option value="datef">date fin</option>
                
            </select></td>
        </tr>
        <tr>
            <td><label>valeur</label></td>
            <td><input type="text" name="val"></td>
        </tr>
        <tr>
        
        <td>
            <input type="submit" value="rechercher"> 
        </td>
        <td>
            <input type="reset" value="annuler">
        </td>
    </tr>
    </table>
    </form>
</body>
</html>