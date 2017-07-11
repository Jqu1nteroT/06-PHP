<?php
//Exc 01 et 03: Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET
      echo "Nom: ".$_GET['nom'];
      echo "<br />";
      echo "Prenom: ".$_GET['prenom'] ;
      echo "<br />";

      echo "<hr />";


//Exc 02 et 04: Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST
       echo "Nom: ".$_POST['nom'];
       echo "<br />";
       echo "Prenom: ".$_POST['prenom'] ;
       echo "<br />";

       echo "<hr />";

//Exc 05: Créer un formulaire sur la page index.php avec :

      //-Une liste déroulante pour la civilité (Mr ou Mme)
      //-Un champ texte pour le nom
      //-Un champ texte pour le prénom

    //Ce formulaire doit rediriger vers la page index.php. Vous avez le choix de la méthode.
       echo "Bonjour ".$_POST['genre'].", votre nom est ".$_POST['nom'].", et votre prenom est ".$_POST['prenom'];
       echo "<hr />";
?>
