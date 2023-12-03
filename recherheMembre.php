<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>veuillez selectionner un criterede recherche</h3>
    <form action="rechercheMemb_action.php" method="post">
    <table>
        <tr>
            <td><label>critere</label></td>
            <td><select name="critere" >
                <option value="codemem">codeMembre</option>
                <option value="nom">nom</option>
                <option value="prenom">prenom</option>
                <option value="adresse">adresse</option>
                <option value="classe">classe</option>
                <option value="statut">statut</option>
                <option value="score">score</option>
                <option value="date">date de naissance</option>
            </select></td>
        </tr>
        <tr>
            <td><label>valeur</label></td>
            <td><input type="text" name="valeur"></td>
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