<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=odiotech', 'root', 'root'); // nom bdd : bdd, on se connecte à la bdd qui a pour hote localhost + son nom, le user c'est root et mdp root, on actualise, il y a 0 bug

?>

<!DOCTYPE html>
<html
  xmlns="http://www.w3.org/1999/html"
  xmlns="http://www.w3.org/1999/html"
  xmlns="http://www.w3.org/1999/html"
>
  <head>
    <link rel="stylesheet" type='text/css' href="../css/connexion.css">
    <link rel='stylesheet' type='text/css' href='../css/header.css'>
    <link rel='stylesheet' type='text/css' href='../css/footer.css'>
    <link
      rel="stylesheet"
      type="text/css"
      href="../Css/profil_utilisateur_information.css"
    />
    <meta charset="UTF-8" />
    <title>Profil administrateur - Infinite Measure</title>
  </head>

  <body>
  <nav>
    <a class="logo" href="accueil_administrateur.php"><img src="../Image/infinite_measure_logo.png" alt="Logo" width="65px"></a>
    <div class="navigation">
        <a href="moteurrecherchegestionnaire.php">Moteur de recherche</a>
        <a href="profil_administrateur_information.php">Edition du profil</a>
        <a href="faqadministrateur.php">F.A.Q</a>
        <a href="deconnexion.php">Deconnexion</a>
    </div>
  </nav>

    <form class="form_information" method="post">
      <div class="form-container">
        <div class="form-control">
          <label for="name">Nom de famille :</label><br />
          <input type="text" id="name" name="user_name" class="remplissage_text"
          value ="
          <?php if(isset($_SESSION["nom"])){echo $_SESSION["nom"];} ?>" >
        </div>
        <div class="form-control">
          <label for="prenom">Prénom :</label><br />
          <input type="text" id="prenom" name="user_prenom"
          class="remplissage_text" value ="
          <?php if(isset($_SESSION["prenom"])){echo $_SESSION["prenom"];} ?>"/>
        </div>
        <div class="form-control">
          <label for="mail">Adresse mail :</label><br />
          <input type="email" id="mail" name="user_mail"
          class="remplissage_text" value ="<?php if(isset($_SESSION["email"])){echo $_SESSION["email"];} ?>"/>
        </div>
        <div class="form-control">
          <label for="pass">Mot de passe actuel :</label><br />
          <input type="password" name="pass" id="pass" class="remplissage_text"
          value ="<?php if(isset($_SESSION["mot_de_passe"])){echo $_SESSION["mot_de_passe"];} ?>"/>
        </div>
        <div class="form-control">
          <label for="newpass">Nouveau mot de passe :</label><br />
          <!--Permet de mettre des espaces pour aligner avec la zone de texte-->
          <input
            type="password"
            name="newpass"
            id="newpass"
            class="remplissage_other"
          />
        </div>
        <div class="form-control">
          <label for="numero_de_rue">Numéro de rue :</label><br />
          <input type="number" name="numero_de_rue" id="numero_de_rue"
          class="remplissage_text" value ="<?php if(isset($_SESSION["numero_de_rue"])){echo $_SESSION["numero_de_rue"];} ?>"/>
        </div>
        <div class="form-control">
          <label for="nom_de_rue">Rue :</label><br />
          <input type="text" name="nom_de_rue" id="nom_de_rue"
          class="remplissage_text" value = "<?php if(isset($_SESSION["nom_de_rue"])){echo $_SESSION["nom_de_rue"];} ?>"/>
        </div>
        <div class="form-control">
          <label for="code_postal">Code postal :</label><br />
          <input type="number" name="code_postal" id="code_postal"
          class="remplissage_text" value = "<?php if(isset($_SESSION["code_postal"])){echo $_SESSION["code_postal"];} ?>"/>
        </div>
        <div class="form-control">
          <label for="ville">Ville :</label><br />
          <input type="text" name="ville" id="ville" class="remplissage_text"
          value = "<?php if(isset($_SESSION["ville"])){echo $_SESSION["ville"];} ?>"/>
        </div>
        <div class="form-control">
          <label for="date">Date de naissance :</label><br />
          <input type="date" name="date" id="date" class="remplissage_text"
          value ="<?php if(isset($_SESSION["date_de_naissance"])){echo $_SESSION["date_de_naissance"];} ?>"/>
        </div>
        <div class="form-control">
          <input
            name="formsauvegarder"
            type="submit"
            value="Sauvegarder"
            style="color: #484848"
          />
        </div>
      </div>
    </form>
    <footer>

    <nav2>
        Site réalisé par&nbsp<a class="acceuilFooter" href="page_de_contact_administrateur.php"> Odio'tech</a>
        <div class="navigation2">
            <a href="mentionlegales_administrateur.php">Mentions légales</a>
            <a href="politiquedeconfidentialite_administrateur.php">Politiques de confidentialité </a>
        </div>
    </nav2>

    </footer>
  </body>

</html>
