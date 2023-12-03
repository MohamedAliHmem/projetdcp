<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="nouveauevenement.php" method="post"> 
    <table>
        <tr>
            <td><label>code Evenement</label></td>
            <td><input type="text" name="codeevent"></td>
        </tr>
        
        <tr>
            <td>
                <label>nom</label>
            </td>
            <td>
                <input type="text" name="nom">
            </td>
        </tr>
        <tr>
            <td>
                <label>date debut</label>
            </td>
            <td>
                <input type="text" name="dated">
            </td>
        </tr>
        
        <tr>
            <td><label>date fin</label></td>
            <td><input type="text" name="datef"></td>
        </tr>
        
        <tr>    
        <td>
                <input type="submit" value="enregistrer"> 
            </td>
            <td>
                <input type="reset" value="annuler">
            </td>
        </tr>
    </table>
   </form>
</body>
</html>


<?php if (isset($_POST["codeevent"])){
$codeevent=$_POST["codeevent"];
$nom=$_POST["nom"];
$dated=$_POST["dated"];
$datef=$_POST["datef"];
include_once("connection.php");
$req="insert into evenement values ($codeevent,'$nom','$dated','$datef')";
$res=$cx->query($req);

if($res) echo "ok";
else echo "impo";
}
include_once("deconnection.php");
?>