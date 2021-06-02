<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=odiotech', 'root', 'root'); // nom bdd : bdd, on se connecte à la bdd qui a pour hote localhost + son nom, le user c'est root et mdp root, on actualise, il y a 0 bug

    if(isset($_POST['formulaire_connexion'])) { //si l'utilisateur clique sur 'Connexion'

        $emailconnect = htmlspecialchars($_POST['email']);
        $mdpconnect = sha1($_POST['mot_de_passe']);
        $emailgestionnaire = 'gestionnaire@site.fr';
        $emailadministrateur = 'administrateur@site.fr';

    if (!empty($emailconnect) AND !empty($mdpconnect)) {

        $requser = $bdd->prepare("SELECT * FROM personne_inscription WHERE email = ? AND mot_de_passe = ?");
        $requser->execute(array($emailconnect, $mdpconnect));
        $userexist = $requser->rowCount(); //ca va compter le nombre de colonnes qui existent avec les informations qui ont été mises

        if($userexist == 1){

            $userinfo = $requser->fetch();
            $_SESSION['userinfototal'] = $userinfo;
            $_SESSION['email'] = $userinfo ['email'];
            $_SESSION['mot_de_passe'] = $userinfo ['mot_de_passe'];
            $_SESSION['prenom'] = $userinfo ['prenom'];
            $_SESSION['nom'] = $userinfo ['nom'];
            $_SESSION['date_de_naissance'] = $userinfo ['date_de_naissance'];
            $_SESSION['numero_de_rue'] = $userinfo ['numero_de_rue'];
            $_SESSION['nom_de_rue'] = $userinfo ['nom_de_rue'];
            $_SESSION['code_postal'] = $userinfo ['code_postal'];
            $_SESSION['ville'] = $userinfo ['ville'];

            if($_SESSION['email'] == $emailgestionnaire){
                echo '<script language="Javascript">
                    window.location.replace("accueil_gestionnaire.php");
                </script>';
            }

            elseif($_SESSION['email'] == $emailadministrateur){

                echo '<script language="Javascript">
                    window.location.replace("accueil_administrateur.php");
                </script>';
            }

            else {

                echo '<script language="Javascript">
                    window.location.replace("accueil_utilisateur.php");
                </script>';

            }
        }

    else{
        echo $erreur = "Vous avez rentré un mauvais mail ou mot de passe";
        }
    }

    else{
        $erreur = "tous les champs doivent être complétés";
        }
    }

?>

<!DOCTYPE HTML>
<html>

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Css/connexion.css">
    <link rel='stylesheet' type='text/css' href='../Css/header.css'>
    <link rel='stylesheet' type='text/css' href='../Css/footer.css'>
    <title>Page de connexion - Infinite Measure</title>
</head>

<body>

<!--HEADER-->

<nav>
    <a class="logo" href="accueil.php"><img src="../Image/infinite_measure_logo.png" alt="Logo" width="65px"></a>
    <div class="navigation">
        <a href="accueil.php">Accueil</a>
        <a href="contact.php">Page de contact </a>
        <a href="connexion.php">Connexion</a>
        <a href="inscription.php">Inscription</a>
    </div>
</nav>


<div class="fond">
    <form  id="connexion" class="connexion" method="post">
        <label>
            <button type="submit" name ="formulaire_connexion" class="connexion1">Connexion</button>
            <input type="button" class="motdepasseoublie" onclick="window.location.href='#mdp_oublie';" value="Mot de passe oublié">

        </label>

        <label>
            <input type='text' name='email' class="identification" placeholder="Adresse email" required="required">
        </label>

        <label>
            <input type="password" name="mot_de_passe" class="identification" placeholder="Mot de passe" required="required">
        </label>


    </form>

    <!--FOOTER-->

    <footer>

    <nav2>
        Site réalisé par&nbsp<a class="acceuilFooter" href="page_de_contact.php"> Odio'tech</a>
        <div class="navigation2">
            <a href="mentionlegales.php">Mentions légales</a>
            <a href="politiquedeconfidentialite.php">Politiques de confidentialité </a>
            <a href="prendre_rdv.php">Nous rencontrer</a>
        </div>
    </nav2>

    </footer>

</body>
</html>
