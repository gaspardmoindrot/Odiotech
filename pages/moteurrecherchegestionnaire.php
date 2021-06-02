<?php
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=odiotech', 'root', 'root');

    $requsers = $bdd->prepare("SELECT * FROM personne_inscription");
    $requsers->execute();
    $allusers = $requsers->fetchAll();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="../Css/connexion.css">
    <link rel="stylesheet" href="../css/gestion_utilisateurs_faq.css">
    <link rel='stylesheet' type='text/css' href='../css/header.css'>
    <link rel='stylesheet' type='text/css' href='../css/footer.css'>
    <meta charset="UTF-8">
    <title>Page gestion des utilisateurs - Infinite Measure</title>
</head>
<body>

<!--HEADER-->
<header class="header">
    <nav>
        <a class="logo" href="accueil_administrateur.php"><img src="../Image/infinite_measure_logo.png" alt="Logo" width="65px"></a>
        <div class="navigation">
            <a href="moteurrecherchegestionnaire.php">Moteur de recherche</a>
            <a href="profil_administrateur_information.php">Edition du profil</a>
            <a href="faqadministrateur.php">F.A.Q</a>
            <a href="deconnexion.php">Deconnexion</a>
        </div>
    </nav>
</header>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div><?php echo $allusers[0]["nom"]; ?></div>

<!--FOOTER-->
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