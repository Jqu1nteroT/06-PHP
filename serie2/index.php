<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Serie 2</title>
</head>
<body>
	
<?php

//Exc 01

$age = 18;

if ($age >= 18){
		echo "Vous etes majeur";
	}else{
		echo "Vous etes mineur";
	}

echo "<hr>";

//Exc 02

$IsEasy = true;

if($IsEasy === true){
		echo "C'est facile!!";
	}else{
		echo "C'est Difficile !!";
	}

echo "<hr>";

//Exc 03

$age = 20;
$genre = "femme";

if ($age >= 18){
	if ($genre === "homme") {
		echo "Vous etes un homme et vous etes majeur";
	}else{
		echo "Vous etes un femme et vous etes majeur";
	}
}elseif ($age < 18) {
	if ($genre === "homme") {
		echo "Vous etes un homme et vous etes mineur";
	}else{
		echo "Vous etes un femme et vous etes mineur";
	}
}

echo "<hr>";

//Exc 04

$magnitude = 7;

switch ($magnitude) {
	case 1:
		echo "Micro-séisme impossible à ressentir.";
		break;
	case 2:
		echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
		break;
	case 3:
		echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
		break;
	case 4:
		echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
		break;
	case 5:
		echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
		break;
	case 6:
		echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
		break;
	case 7:
		echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
		break;
	case 8:
		echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
		break;
	case 9:
		echo "Séisme capable de tout détruire sur une très vaste zone.";
		break;
	default:
		echo "Il n'y a pas seisme!!";
		break;
}

echo "<hr>";

//Exc 05

$maVariable = "jwjw";

if ($maVariable != "homme") {
	echo "C'est une développeuse !!!";
}else{
	echo "C'est un développeur !!!";
}

echo "<hr>";

//Exc 06

$monAge = 19;

if ($monAge >= 18) {
	echo "Tu es majeur";
}else{
	echo "Tu n'es pas majeur";
}

echo "<hr>";

//Exc 07

$maVariable = false;

if ($maVariable == false) {
	echo "c'est pas bon !!!";
}else{
	echo "c'est ok !!";
}

echo "<hr>";

//Exc 08

$maVariable = true;

if ($maVariable == false) {
	echo "c'est pas bon !!!";
}else{
	echo "c'est ok !!";
}

?>
</body>
</html>
