<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
<?php include '../header.php'; ?>
    <a href="index.php?nom=nemar&amp;prenom=jean&amp;age=30">Age</a>
<?php
//test si la variable GET existe
if (isset($_GET['age'])){ 
    // elle existe, on l'affiche !!
?>
<p> Age: <?= $_GET['age']; ?> ans.</p>
<?php }else{
    //elle n'existe pas, on le dit !!
?>
<p><?= 'Pas de paramètre Age !!'?></p>
<?php
}
include '../footer.php';
?>
