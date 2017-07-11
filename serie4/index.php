<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Serie 4</title>
</head>
<body>
<?php
//Exc 01: Faire une fonction qui retourne true.

function returnTrue(){
	return true;
}

echo returnTrue();

echo "<hr>";

//Exc 02: Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.

function chaineChar(){
	echo "Hello Word!";
}

chaineChar();

echo "<hr>";

//Exc 03: Faire une fonction qui prend en paramètre deux chaines de caractères et qui retourne la concaténation de ces deux chaines.

function deuxChar($x, $y){
	$x = "C'est un";
	$y = "concatenation";	
	echo "$x\n $y";
}

deuxChar();

echo "<hr>";

//Exc 04: Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

	//Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
	//Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
	//Les deux nombres sont identiques si les deux nombres sont égaux

function deuxNum($a,$b){
	$a = 34;
	$b = 35;

	if ($a > $b) {
			echo "Le premier nombre est plus grand";	
		}elseif($a<$b){
			echo "Le premier nombre est plus petit";
		}else{
			echo "Les deux nombres sont identiques";
		}
}

deuxNum();

echo"<hr>";

//Exc 05: Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui retourne la concaténation de ces deux paramètres.

function nomChain($c,$d){
	$c = 26;
	$d = "Est mon age!!";

	echo "$c\n $d";
}

nomChain();

echo "<hr>";

//Exc 06: Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit retourner une chaine de la forme : "Bonjour" + nom + prenom + ",tu as" + age + "ans".

function troisPara($nom, $prenom, $age){
	echo "Bonjour\n $nom \n $prenom ,\n tu as $age ans";
}

troisPara("pablo","quintero",26);

echo "<hr>";

/*Exc 07: Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :

	Homme
	Femme

La fonction doit renvoyer en fonction des paramètres :

	Vous êtes un homme et vous êtes majeur
	Vous êtes un homme et vous êtes mineur
	Vous êtes une femme et vous êtes majeur
	Vous êtes une femme et vous êtes mineur

Gérer tous les cas.*/

function deuxPara($j, $p){

	if ($j === "homme" && $p >= 18){
			echo "Vous etes un homme et vous etes majeur";
		}elseif ($j === "femme" && $p >= 18) {
			echo "Vous etes un femme et vous etes majeur";
		}elseif ($j === "homme" && $p < 18) {
			echo "Vous etes un homme et vous etes mineur";
		}elseif($j === "femme" && $p < 18){
			echo "Vous etes un femme et vous etes mineur";
		}
	}

deuxPara("femme",35);

echo "<hr>";

//Exc 08: Faire une fonction qui prend en paramètre trois nombres et qui retourne la somme de ces nombres. Tous les paramètres doivent avoir une valeur par défaut.

function sumTroi($a1, $a2, $a3){
	$a1 = 25;
	$a2 = 13;
	$a3 = 30;

	$w = $a1 + $a2 + $a3;

	echo "le plus c'est:\n $w";
}

sumTroi();

?>
</body>
</html>