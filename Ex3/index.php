<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex3</title>
    </head>
    <body>
        <?php include '../header.php'; ?>
        <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Dates</a>
<?php
if (isset($_GET['startDate']) && isset($_GET['endDate'])){ 
    // elles existent, on les affichent !!
?>
<p> Nom: <?= $_GET['startDate'] ?></p>
<p> Prenom: <?= $_GET['endDate'] ?></p>
<?php
}else{
    //elles n'existent pas, on le dit !!
?> 
<p> Pas de parametre de date !!  </p>
<?php
}
include '../footer.php';
?>
 