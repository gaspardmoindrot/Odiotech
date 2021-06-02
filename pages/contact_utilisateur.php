<!doctype html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de contact - Infinite Measure</title>
    <link rel="stylesheet" type='text/css' href="../css/connexion.css">
    <link rel='stylesheet' type='text/css' href='../css/header.css'>
    <link rel='stylesheet' type='text/css' href='../css/footer.css'>
    <link rel='stylesheet' type='text/css' href='../css/contact.css'>

</head>

</html>

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

<!-- FIN HEADER DU SITE-->


<!-- CENTRE DU SITE-->

<div id="bloc1">
    </br>
    </br>
    <h1 style="text-align:center;">Formulaire de contact</h1>
    </br>
    </br>
    <form action="accueil.php" method="post">
        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="mail">e-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="object">Objet :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
    </form>
    </br>
    </br>
</div>

<div id="bloc2">
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    <div class="infocontact">
        <strong>Téléphone :</strong> +33 1 23 45 67 89
        </br></br>
        <strong>E-mail :</strong> infinite.measure@contact.fr
        </br></br>
        <strong>Adresse postale :</strong> 28 rue Notre-Dame des Champs, 75006 Paris
        </br></br>
        <a classe="prendre_rdv" href="prendre_rdv.php">Prendre rendez-vous</a>
        </br></br>
    </div>
<div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>


<!--FIN CENTRE DU SITE-->

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