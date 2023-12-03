<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="nouveauMembre.php" method="post"> 
    <table>
        <tr>
            <td><label>codeMembre</label></td>
            <td><input type="text" name="codememb"></td>
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
                <label>prenom</label>
            </td>
            <td>
                <input type="text" name="prenom">
            </td>
        </tr>
        
        <tr>
            <td><label>classe</label></td>
            <td><input type="text" name="classe"></td>
        </tr>
        <tr>
            <td><label>adresse</label></td>
            <td><input type="text" name="adresse"></td>
        </tr>
        <tr>
            <td><label>Status</label></td>
            <td><input type="text" name="statut"></td>
        </tr>
        <tr>
            <td><label>Score</label></td>
            <td><input type="text" name="score"></td>
        </tr>
        <tr>
            <td><label>Date naissance</label></td>
            <td><input type="text" name="date"></td>
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
<?php if(isset($_POST["codememb"])){

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$code=$_POST["codememb"];
$classe=$_POST["classe"];
$adresse=$_POST["adresse"];
$statut=$_POST['statut'];
$score=$_POST['score'];
$date=$_POST['date'];
include_once("connection.php");



$req="insert into membre values ('$code','$nom','$prenom','$classe','$adresse','$statut','$score','$date')";
$res=$cx->query($req);
if($res) echo "Ajout effectue avec succes! ";
else echo "Ajout n'est pas effectue";

include_once("deconnection.php");}
?>