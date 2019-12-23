<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex5</title>
    </head>
    <body>
            <?php include '../header.php'; ?>
        <a href="index.php?week=12">Nombre de semaine</a>
<?php
if (isset($_GET['week'])){ 
    // elles existent, on les affichent !!
?>
<p> Nombre de semaine: <?= $_GET['week'] ?></p>
<?php
}else{
    //elles n'existent pas, on le dit !!
?> 
<p> Pas de parametre de semaine !!  </p>
<?php
}
include '../footer.php';
?>
