<<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex6</title>
    </head>
    <body>
        <?php include '../header.php'; ?>
        <a href="index.php?building=12&room=101">adresse</a>
<?php
if (isset($_GET['building']) && isset($_GET['room'])){ 
    // elles existent, on les affichent !!
?>
<p> Batiment: <?= $_GET['building'] ?></p>
<p> Chambre: <?= $_GET['room'] ?></p>
<?php
}else{
    //elles n'existent pas, on le dit !!
?> 
<p> Pas de parametre d'adresse : batiment et chambre.</p>
<?php
}
include '../footer.php';
?>

