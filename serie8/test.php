<?php
session_start();
echo $_SESSION['nom'];echo $_COOKIE['login'];
echo "<br />";
echo $_SESSION['prenom'];
echo "<br />";
echo $_SESSION['age'];
echo "<hr />";
print_r($_COOKIE);
if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
  echo $_COOKIE['login'];
  echo $_COOKIE['password'];
}

 ?>
