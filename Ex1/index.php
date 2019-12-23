<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex1</title>
    </head>
    <body>
<?php include '../header.php'; ?>
       <a href="index.php?lastname=Nemare&firstname=Jean">Nom</a>
 <?php
if (isset($_GET['lastname']) && isset($_GET['firstname'])){ 
    // elles existent, on les affichent !!
?>
<p> Nom: <?= $_GET['firstname'] ?></p>
<p> Prenom: <?= $_GET['lastname'] ?></p>
<?php
}else{
    //elles n'existent pas, on le dit !!
?> 
<p> Pas de parametre Nom / Prenom !!  </p>
<?php
}
include '../footer.php';
?>

