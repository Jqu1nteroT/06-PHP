<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Serie 5</title>
</head>
<body>
<?php
/*Exc 01:Créer un tableau mois et l'initialiser avec les valeurs suivantes :

	janvier
	février
	mars
	avril
	mai
	juin
	juillet
	aout
	septembre
	octobre
	novembre
	décembre*/

 $mois = array(
 	"janvier",
	"février",
	"mars",
	"avril",
	"mai",
	"juin",
	"juillet",
	"aout",
	"septembre",
	"octobre",
	"novembre",
	"décembre");

//Exc 02: Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.

echo "$mois[2]";

 echo "<hr>";

//Exc 03: Avec le tableau de l'exercice , afficher la valeur de l'index 5.

echo "$mois[5]";

 echo "<hr>";

//Exc 04: Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.

 $mois[7] = "août";

 echo "$mois[7]";

  echo "<hr>";

 //Exc 05: Créer un tableau associatif avec comme index le numéro des départements de la région Auvergne-Rhône-Alpes et en valeur leur nom.

 $assoc = array(
 	01 => "Ain",
 	03 => "Allier",
 	07 => "Ardèche",
 	15 => "Cantal",
 	26 => "Drôme",
 	38 => "Isère",
 	42 => "Loire",
 	43 => "Puy-de-Dôme",
 	69 => "Rhône",
 	69 => "Métropole de Lyon",
 	73 => "Savoide",
 	74 => "Haute-Savoie",
 	);

//Exc 06: Avec le tableau de l'exercice 5, afficher la valeur de l'index 69.

 echo "$assoc[69]";

  echo "<hr>";

 //Exc 07: Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Metz.


  $assoc[57] = "Metz";

 echo "$assoc[57]";

 echo "<hr>";

 //Exc 08: Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.

 for ($i = 0; $i <= 11; $i++){
 	echo "\n $mois[$i]";
 }

 echo "<hr>";

 //Exc 09: Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.


 foreach ($assoc as $value) {
 	echo "$value \n";
 };

 echo "<hr>";

//Exc 10: Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associées. Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement.

foreach($assoc as $b => $b_value) {
    echo "Le département " . $b_value . ", a le numéro " . $b;
    echo "<br>";
}

 echo "<hr>";


?>
</body>
</html>
