<!DOCTYPE html>
<!-- sara CHANOUANE ISITD -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Continent</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #fff59d;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center; /* Centrer le contenu */
        }
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4dd0e1;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            margin: 10px;
            font-size: 1em;
            box-shadow: 2px 2px 4px #888888;
        }
        .back-button:hover {
            background-color: #80deea;
        }
        h1 {
            color: #d84315;
            margin-top: 20px;
        }
        .pays-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .pays-container a {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 15px;
            text-decoration: none;
            color: #333;
            background-color: #fff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 3px 3px 5px #888888;
            transition: transform 0.2s;
        }
        .pays-container a:hover {
            transform: scale(1.05);
        }
        .pays-container img {
            width: 80px;
            height: auto;
            border: 2px solid #ccc;
            border-radius: 5px;
            margin-bottom: 5px;
        }
        .pays-container p {
            margin: 5px 0;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <a href="index.php" class="back-button">← Revenir à la Carte</a>
    <?php
    $continent = $_GET['continent'];
    echo "<h1>Choisis un pays d' " . $continent . "</h1>";

    $pays = array();
    if ($continent == "North America") {
        $pays = array(
            array("nom" => "Canada", "drapeau" => "canada.png"),
            array("nom" => "Etats-Unis", "drapeau" => "etats-unis.png"),
            array("nom" => "Mexique", "drapeau" => "mexique.png")
        );
    } elseif ($continent == "AMRICA") {
        $pays = array(
            array("nom" => "Bresil", "drapeau" => "bresil.png"),
            array("nom" => "Argentine", "drapeau" => "argentine.png"),
            array("nom" => "Colombie", "drapeau" => "colombie.png")
        );
    } elseif ($continent == "Africa") {
        $pays = array(
            array("nom" => "Maroc", "drapeau" => "maroc.png"),
            array("nom" => "Egypte", "drapeau" => "egypte.png"),
            array("nom" => "Nigeria", "drapeau" => "nigeria.png")
        );
    } elseif ($continent == "Europe") {
        $pays = array(
            array("nom" => "France", "drapeau" => "france.png"),
            array("nom" => "Allemagne", "drapeau" => "allemagne.png"),
            array("nom" => "Italie", "drapeau" => "italie.png")
        );
    } elseif ($continent == "Asia") {
        $pays = array(
            array("nom" => "Japon", "drapeau" => "japon.png"),
            array("nom" => "Chine", "drapeau" => "chine.png"),
            array("nom" => "Inde", "drapeau" => "inde.png")
        );
    } elseif ($continent == "Australie") {
        $pays = array(
            array("nom" => "Australie", "drapeau" => "australie.png"),
            array("nom" => "Nouvelle-Zelande", "drapeau" => "nouvelle-zelande.png"),
            array("nom" => "Vanuatu", "drapeau" => "vanuatu.png")
        );
    }
    ?>

    <div class="pays-container">
        <?php foreach ($pays as $p) { ?>
            <a href="pays.php?continent=<?php echo $continent; ?>&pays=<?php echo $p['nom']; ?>">
                <img src="images/<?php echo $p['drapeau']; ?>" alt="<?php echo $p['nom']; ?>">
                <p><?php echo $p['nom']; ?></p>
            </a>
        <?php } ?>
    </div>
</body>
</html>