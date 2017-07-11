<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Serie 3</title>
</head>
<body>
<?php

//Exc 01

$x = 0;

for ($i=0; $i <= 10 ; $i++) { 
	$x = $i;
	echo "$x\n";
}

echo "<hr>";

//Exc 02

$y = 0;
$z = 50;

for ($i=0; $i <= 20; $i++) { 
	$a = $y * $z;
	$y = $i;
	echo "<b>$a\n</b>";
}

echo "<hr>";

//Exc 03

$g = 100;
$t = 50;

for ($i=100; $i >= 10; $i--) { 
	$b = $g * $t;
	$g = $i;
	echo "$b\n";
}

echo "<hr>";

//Exc 04: Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10.

for ($i=1; $i <= 10 ; $i += $i / 2) { 
	echo "$i\n";
}

echo "<hr>";

//Exc 05: En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. Combien de fois le message s'affiche-il ?

for ($i=1; $i <= 15 ; $i++) { 
	echo "$i\n C'est presque bon\n";
}

echo "<hr>";

//Exc 06: En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. Combien de fois le message s'affiche-il ?

for ($i=20; $i >= 1 ; $i--) { 
	echo "$i\n C'est presque bon\n";
}

echo "<hr>";

//Exc 07: En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. Combien de fois le message s'affiche-il ?

for ($i=0; $i <= 100 ; $i+=15) { 
	echo "$i\n On tient le bon bout.\n";
}

echo "<hr>";

//Exc 08: En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. Combien de fois le message s'affiche-il ?

for ($i=200; $i >= 0 ; $i-=12) { 
	echo "$i\n Enfin !!!!\n";
}

echo "<hr>";


?>
</body>
</html>