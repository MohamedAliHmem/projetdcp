<!DOCTYPE html>
<html lang="en">
    
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<?php
$id = $_GET['id'];
?>
<!--<form action="confirmationModif.php?id=<?php echo $id; ?>" method="post">-->
<form action="" method="post">
<table class="table caption-top">
    
    <tbody>
      <tr>
      <?php

$tache = $_GET['tache'];
$rate = $_GET['rate'];
echo "<td><input placeholder='$rate' type='text' name='rate'></td>
<td><input placeholder='$tache' type='text' name='tache'></td>";
?>
       
        
      </tr>
    </tbody>
  </table>
  <input type="submit" value="Modifier" formaction="confirmationModif.php?id=<?php echo $id; ?>">
  <input type="submit" value="Supprimer" formaction="confirmationSupp.php?id=<?php echo $id; ?>">
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</form>
</html>