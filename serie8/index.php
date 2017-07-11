<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Serie 8</title>
  </head>
  <body>
    <?php
      session_start();
    //Exc 01: Faire une page HTML permettant de donner à l'utilisateur :

        //son User Agent
        //son adresse ip
        //le nom du serveur
        echo $_SERVER['HTTP_USER_AGENT'];;
        echo "<br>";
        echo $_SERVER['REMOTE_ADDR'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<hr>";

     ?>


     <!--Exc 02: Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code. Il faudra afficher le contenu de ces variables sur la deuxième page.-->
     <a target="_blank" href="test.php" >click ici!</a>
     <?php
      $_SESSION['nom'] = "Quintero";
      $_SESSION['prenom'] = "Pablo";
      $_SESSION['age'] = 26;
      echo "funciona!";

      ?>
     <hr>

     <!--Exc 03:Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.-->

     <form method="post">
       <label for="login">Login: </label><br>
       <input type="text" name="login"><br>
       <label for="password">Password: </label><br>
       <input type="password" name="password"><br>
       <input type="submit" name="enter">
     </form>

     <?php
     setcookie($_POST['login'],"login", time() + 20);
     setcookie($_POST['password'],"password", time() + 20);
     print_r($_COOKIE);
      ?>


  </body>
</html>
