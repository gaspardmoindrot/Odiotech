<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=odiotech', 'root', 'root'); // nom bdd : bdd, on se connecte à la bdd qui a pour hote localhost + son nom, le user c'est root et mdp root, on actualise, il y a 0 bug

if(isset($_POST['formulaire_inscription'])) { //si l'utilisateur clique sur 'Valider'

    $nom = htmlspecialchars($_POST['nom']); //Pour éviter que du code soit mis dans les cases à remplir (c'est une sécurité)
    $prenom = htmlspecialchars($_POST['prenom']);
    $date_de_naissance = htmlspecialchars($_POST['date_de_naissance']);
    $mail = htmlspecialchars($_POST['email']);
    $mdp = sha1($_POST['mot_de_passe']); //md5,sha1 etc sont des méthodes pour hacher les mdp si qq arrive à pénétrer notre bdd
    $mdp2 = sha1($_POST['mot_de_passe_confirmation']); //idem sauf que c'est pour la confirmation du mdp
    $numero_de_rue = $_POST['numero_de_rue'];
    $nom_de_rue = $_POST['nom_de_rue'];
    $code_postal = $_POST['code_postal'];
    $ville = $_POST['ville'];

    if($mdp == $mdp2) {

        $insertmbr = $bdd->prepare("INSERT INTO personne_inscription(nom, prenom, date_de_naissance, email, mot_de_passe, numero_de_rue, nom_de_rue, code_postal, ville) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"); //on prépare les champs de notre bdd dans phpmyadmin
        $insertmbr->execute(array($nom, $prenom, $date_de_naissance, $mail, $mdp, $numero_de_rue, $nom_de_rue, $code_postal, $ville)); //on excute la préparation par rapport aux variables qu'on a initialis

    }

    else{
        $erreur = "vos mots de passe ne correspondent pas";
    }
}

?>

<!DOCTYPE HTML>
<html>
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/inscription.css">
    <link rel='stylesheet' type='text/css' href='../css/header.css'>
    <link rel='stylesheet' type='text/css' href='../css/footer.css'>
    <title>Page d'inscription - Infinite Measure</title>

</head>

<body>
<!--HEADER-->

<!--EN TÊTE DE NAVIGATION-->


<nav>
    <a class="logo" href="accueil.php"><img src="../Image/infinite_measure_logo.png" alt="Logo" width="65px"></a>
    <div class="navigation">
        <a href="test_accueil.php">Accueil</a>
        <a href="page_de_contact.php">Page de contact </a>
        <a href="connexion.php">Connexion</a>
        <a href="inscription.php">Inscription</a>
    </div>
</nav>


<form id="inscription" class="identification" method="post">

    <label>
        <input name="nom" class="identification2" type="text" placeholder="Nom" required="required"/>
    </label>
    <label>
        <input name="prenom" class="identification2" type="text" placeholder="Prénom" required="required"/>
    </label>
    <label>
        <input name="date_de_naissance" class="identification2" type="date" placeholder="Date de naissance" required="required"/>
    </label>
    <label>
        <input name="email" class="identification2" type="email" placeholder="Adresse email" required="required"/>
    </label>
    <label>
        <input name="mot_de_passe" class="identification2" type="password" placeholder="Mot de passe" required="required"/>
    </label>
    <label>
        <input name="mot_de_passe_confirmation" class="identification2" type="password" placeholder="Confirmez votre mot de passe" required="required"/>
    </label>
    <label>
        <input name="numero_de_rue" class="identification2" type="number" placeholder="Numéro de rue" />
    </label>
    <label>
        <input name="nom_de_rue" class="identification2" type="text" placeholder="Rue" required="required"/>
    </label>
    <label>
        <input name="code_postal" class="identification2" type="number" placeholder="Code postal" required="required"/>
    </label>
    <label>
        <input name="ville" class="identification2" type="text" placeholder="Ville" required="required"/>
    </label>

    <button type="submit" name ="formulaire_inscription" class="valider" onclick="window.location.href='#confirmation';">Valider </button>
</form>
</br></br></br></br></br></br>

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