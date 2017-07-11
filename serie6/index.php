<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Serie 6</title>
  </head>
  <body>
  <?php
  //Exc 01: Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean

  print_r($_GET);
  echo "<hr>";
  ?>
<?php

//Exc 02: Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean

if (isset($_GET['age'])) {
  echo $_GET['age'];
}else {
  echo "n'existe pas!";
}
  echo "<hr>";
 ?>

 <?php
 //Exc 03: Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016

 echo "Date de debut: ".$_GET[dateDebut]." Date de fin: ".$_GET[dateFin];

  echo "<hr>";

 ?>

<?php
//Exc 04: Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?langage=PHP&serveur=LAMP

echo "Langage: ".$_GET['langage']." Serveur: ".$_GET['serveur'];
echo "<hr>";

 ?>

 <?php
//Exc 05: Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?semaine=12

echo "Semaine: ".$_GET['semaine'];
echo "<hr>";

  ?>

<?php
//Exc 06: Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?batiment=12&salle=101

echo "Batiment: ".$_GET['batiment']." Salle: ".$_GET['salle'];
echo "<hr>";

 ?>

  </body>
</html>
