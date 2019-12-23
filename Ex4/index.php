<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex4</title>
    </head>
    <body>
        <?php include '../header.php'; ?>
        <a href="index.php?language=PHP&server=LAMP">Langage et serveur</a>
<?php
if (isset($_GET['language']) && isset($_GET['server'])){ 
    // elles existent, on les affichent !!
?>
<p> Langage: <?= $_GET['language'] ?></p>
<p> Serveur: <?= $_GET['server'] ?></p>
<?php
}else{
    //elles n'existent pas, on le dit !!
?> 
<p> Pas de parametre de langage et serveur.  </p>
<?php
}
include '../footer.php';
?>
