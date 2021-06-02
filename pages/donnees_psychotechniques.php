<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="../css/donnees_psychotechniques.css">
    <link rel='stylesheet' type='text/css' href='../css/header.css'>
    <link rel='stylesheet' type='text/css' href='../css/footer.css'>
    <meta charset="UTF-8">
    <title>Données psychotechniques - Infinite Measure</title>
    <script src='https://cdn.plot.ly/plotly-latest.min.js'></script>
</head>


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


<body>
<div id="graph" class="graph">
    Résultats de vos tests proposé par l'équipe Odio'tech
    <br>
    <script>
        var son_casque_inattendu = parseFloat("12");
        var son_rep = parseFloat("15");
        var lum_inattendu_noir = parseFloat("6");
        var lum_inattendu_ext = parseFloat("7");
        var lum_rep_noir = parseFloat("13");
        var lum_rep_ext = parseFloat("6");

        var moyenne = (son_casque_inattendu+son_rep+lum_inattendu_noir+lum_inattendu_ext+lum_rep_noir+lum_rep_ext)/6;
        var score = 200-moyenne*(100/0.2);
        if (moyenne>0.4){
            score = 0;
        }
        var data = [
            {
                type: "indicator",
                value: score,
                delta: { reference: 160 },
                gauge: { axis: { visible: false, range: [0, 100] } },
                domain: { row: 1, column: 1 }
            },

            {
                type: 'bar',
                x: ['son casque inattendu', 'son répété', 'lumière inattendu (1)', 'lumière inattendu (2)', 'lumière répété (1)', 'lumière répété (2)'],
                y: [son_casque_inattendu, son_rep, lum_inattendu_noir, lum_inattendu_ext, lum_rep_noir, lum_rep_ext],
                opacity: 0.6,
                marker: {
                    color: 'rgb(98, 188, 218)'
                },
                domain: { row: 1, column: 1 }
            }
        ];

        var layout = {
            margin: { t: 25, b: 25, l: 50, r: 25 },
            plot_bgcolor:"#333346",
            paper_bgcolor:"#222222",
            font:{
                color: "white"
            },
            grid: { rows: 1, columns: 2, pattern: "independent" },
            xaxis:{
                showticklabels: false,
            },
            yaxis:{
                gridcolor: "white",
                zerolinecolor: "white",
                title: "temps (s) "
            },
            template: {
                data: {
                    indicator: [
                        {
                            title: { text: "Votre score" },
                            mode: "number+gauge"
                        }
                    ]
                }
            }
        };

        Plotly.newPlot('graph', data, layout, {displayModeBar: false});
    </script>
</div>
</body>


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


</html>