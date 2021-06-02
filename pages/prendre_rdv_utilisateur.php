<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="../css/prendre_rdv.css">
    <link rel='stylesheet' type='text/css' href='../css/header.css'>
    <link rel='stylesheet' type='text/css' href='../css/footer.css'>
    <meta charset="UTF-8">
    <title>Prendre RDV - Infinite Measure</title>
</head>
<body>

<!--HEADER-->
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
<br/>
<br/>


<!--Formualaire prise de rdv-->

<div class="bloc_rdv">

<section id="prendrerdv">
    <div>
        <div>
            <div class="rdv_title">
                <h2>Prendre un rendez-vous</h2>
                <br>
                <h3> En ligne rapidement</h3>
            </div>

            <form action="accueil.php" method="post" class="formulaire">
                <input placeholder="Nom de famille" name="name" type="text" required="">
                <input placeholder="Adresse mail" name="email" type="email" required="">
                <input placeholder="Numéro de contact" name="number" type="text" required="">
                <input name="Date" type="date" required="" class="date">
                <input placeholder="Veuillez entrer l'horaire souhaité" name="time" type="text">
                <br/>
                <button type="submit">Prendre le rendez-vous</button>
            </form>
        </div>
    
</div>
</div>
    <!-- FIN Formualaire prise de rdv-->

</section>

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
</html>
