<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Serie 7</title>
  </head>
  <body>
      <!--Exc 01 et 03: Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.-->
    <form action="user.php" method="get">
       Nom: <input type="text" name="nom"><br />
       Prenom: <input type="text" name="prenom"><br />
       <input type="submit">
     </form>

     <hr />
      <!--Exc 02 et 04: Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.-->
      <form action="user.php" method="post">
         Nom: <input type="text" name="nom"><br />
         Prenom: <input type="text" name="prenom"><br />
         <input type="submit">
       </form>

       <hr />
      <!--Exc 05: Créer un formulaire sur la page index.php avec :

            -Une liste déroulante pour la civilité (Mr ou Mme)
            -Un champ texte pour le nom
            -Un champ texte pour le prénom

          Ce formulaire doit rediriger vers la page index.php. Vous avez le choix de la méthode.-->
          <form action="user.php" method="post">
            <label for="Nom">Nom:</label>
            <input type="text" name="nom"><br />
            <label for="Prenom">Prenom:</label>
            <input type="text" name="prenom"><br>
            <select name="genre">
              <option value="Mr">Homme</option>
              <option value="Mme">Femme</option>
            </select>
            <input type="submit">
          </form>
          <hr>
          <!--Exc 06: Avec le formulaire de l'exercice 5, si des données sont passées en POST ou en GET, le formulaire ne doit plus être affiché. Par contre les données transmises doivent l'être. Si aucune donnée ne sont passées en POST ou GET, le formulaire reste visible. Utiliser qu'une seule page.-->


          <form action="index.php" method="post">
              <label for="Nom">Nom:</label>
              <input type="text" name="nom"><br>
              <label for="Prenom">Prenom:</label>
              <input type="text" name="prenom"><br>
              <select name="genre">
                <option value="empty">Select</option>
                <option value="Mr">Homme</option>
                <option value="Mme">Femme</option>
              </select>
              <input type="submit">
            </form>
            <?php
            if ($_POST = true) {
              echo "test";
          }else {
            echo "Bonjour ".$_POST['genre'].", votre nom est ".$_POST['nom'].", et votre prenom est ".$_POST['prenom'];
          }

            echo "<hr />";
             ?>


  </body>
</html>
