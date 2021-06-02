<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=odiotech', 'root', 'root'); // nom bdd : bdd, on se connecte à la bdd qui a pour hote localhost + son nom, le user c'est root et mdp root, on actualise, il y a 0 bug
?>

<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>FAQ - Infinite Measure</title>
    <link rel="stylesheet" type='text/css' href="../Css/connexion.css">
    <link rel="stylesheet" href="../css/faqutilisateur.css" type="text/css" />
    <link rel='stylesheet' type='text/css' href='../css/header.css'>
    <link rel='stylesheet' type='text/css' href='../css/footer.css'>
</head>

<body>

<!--HEADER-->

<header class="header">
    <nav>
    <a class="logo" href="accueil_utilisateur.php"><img src="../Image/infinite_measure_logo.png" alt="Logo" width="65px"></a>
    <div class="navigation">
        <a href="profil_utilisateur_information.php">Edition du profil</a>
        <a href="donnees_psychotechniques.php">Résultats</a>
        <a href="contact_utilisateur.php">Page de contact </a>
        <a href="faqutilisateur.php">FAQ</a>
        <a href="deconnexion.php">Deconnexion</a>
    </div>
</nav>
</header>

<!--FOOTER-->

<footer>

    <nav2>
        Site réalisé par&nbsp<a class="acceuilFooter" href="page_de_contact_utilisateur.php"> Odio'tech</a>
        <div class="navigation2">
            <a href="mentionlegales_utilisateur.php">Mentions légales</a>
            <a href="politiquedeconfidentialite_utilisateur.php">Politiques de confidentialité </a>
            <a href="prendre_rdv_utilisateur.php">Nous rencontrer</a>
        </div>
    </nav2>

</footer>

</body>

<section>
    <div class="container">
        <div class="accordion">
            <div class="accordion-item" id="question1">
                <a class="accordion-link" href="#question1">
                    Comment obtenir vos identifiants et mot de passe?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                        Vous obtenez automatiquement vos identifiants et mots de passe lorsque vous les renseignez au moment de l'inscription.
                    </p>
                </div>
            </div>

            <div class="accordion-item" id="question2">
                <a class="accordion-link" href="#question2">
                    Comment faire un test sur votre compte?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                        Après avoir créé votre compte, vous pourrez accéder a votre espace client dans lequel il vous sera proposer une panoplie de test. Vous auriez qu’à sélectionner le test que vous voulez ou bien faire un test complet. On vous recommande vivement de faire un test complet la première fois afin d’évaluer vos compétences.
                    </p>
                </div>
            </div>

            <div class="accordion-item" id="question3">
                <a class="accordion-link" href="#question3">
                    Comment accéder à vos résultats ?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                        C’est très simple, dans la rubrique « espace abonné » vous aurez un onglet « voir mes résultats ». Dans celui-ci sera afficher toutes vos informations et résultats sous forme de graphiques. Il sera également affiché l’évolution de vos réflexes au fil des tests.
                    </p>
                </div>
            </div>


            <div class="accordion-item" id="question4">
                <a class="accordion-link" href="#question4">
                    Qui a accès à mes résultats ?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                        Vous et les gestionnaires avez accès aux résultats de vos tests. Vos données sont utilisées pour réaliser une moyenne afin de permettre à chacun de situer dans la population, mais elles sont anonymisées.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>