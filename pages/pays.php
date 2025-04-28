<!DOCTYPE html>
<!-- sara CHANOUANE ISITD -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_GET['pays']; ?></title>
    <link rel="stylesheet" href="../styles/style.css">
    <style>
        body {
            background-color: #f4f4f4; /* Gris clair */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            color: #333; /* Texte sombre */
        }
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #5cb85c; /* Vert Bootstrap */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
            font-size: 1em;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .back-button:hover {
            background-color: #4cae4c;
        }
        .country-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 700px;
            text-align: left;
        }
        h1 {
            color: #337ab7; /* Bleu Bootstrap */
            margin-top: 0;
            border-bottom: 2px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .info-box {
            background-color: #f0ad4e; /* Orange Bootstrap */
            color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
            font-size: 1em;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .info-box strong {
            font-weight: bold;
        }
        .country-container img {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .country-paragraph {
            margin-bottom: 20px;
            line-height: 1.7;
            color: #555;
        }
        .country-paragraph strong {
            font-weight: bold;
            color: #333;
        }
        .action-button {
            display: inline-block;
            padding: 12px 25px;
            background-color: #007bff; /* Bleu vif Bootstrap */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
            font-size: 1em;
            border: none;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .action-button:hover {
            background-color: #0056b3;
        }
        .arabic-text {
            font-size: 1.3em;
            color: #d9534f; /* Rouge Bootstrap */
        }
        audio {
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <a href="continent.php?continent=<?php echo $_GET['continent']; ?>" class="back-button">← Revenir</a>
    <div class="country-container">
        <h1><?php echo $_GET['pays']; ?></h1>
        <?php
        $pays = $_GET['pays'];
        $continent = $_GET['continent'];
        $info = array();

        if ($pays == "Canada") {
            $info = array(
                "habitants" => "Environ 38 millions",
                "langue" => "Anglais, Français",
                "capitale" => "Ottawa",
                "bonjour" => "Hello",
                "audio" => "hello.mp3",
                "paragraphe1" => "Le Canada est un vaste pays d'Amérique du Nord, connu pour ses paysages spectaculaires, ses villes modernes et sa culture diversifiée.",
                "paragraphe2" => "Il possède la plus longue frontière terrestre partagée avec un autre pays, les États-Unis.",
                "bouton1_texte" => "En savoir plus sur le Canada",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Canada"
            );
        } elseif ($pays == "Etats-Unis") {
            $info = array(
                "habitants" => "Environ 331 millions",
                "langue" => "Anglais",
                "capitale" => "Washington D.C.",
                "bonjour" => "Hello",
                "audio" => "hello.mp3",
                "paragraphe1" => "Les États-Unis d'Amérique sont une république constitutionnelle fédérale composée de 50 États, d'un district fédéral et de plusieurs territoires.",
                "paragraphe2" => "C'est la troisième nation la plus peuplée du monde et une puissance économique et culturelle majeure.",
                "bouton1_texte" => "Découvrir les USA",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/%C3%89tats-Unis"
            );
        } elseif ($pays == "Mexique") {
            $info = array(
                "habitants" => "Environ 128 millions",
                "langue" => "Espagnol",
                "capitale" => "Mexico",
                "bonjour" => "Hola",
                "audio" => "hola.mp3",
                "paragraphe1" => "Le Mexique est un pays d'Amérique du Nord, riche en histoire, en culture et en biodiversité.",
                "paragraphe2" => "Il abrite d'anciennes civilisations comme les Mayas et les Aztèques, ainsi que de magnifiques plages et des villes animées.",
                "bouton1_texte" => "Explorer le Mexique",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Mexique"
            );
        } elseif ($pays == "Bresil") {
            $info = array(
                "habitants" => "Environ 212 millions",
                "langue" => "Portugais",
                "capitale" => "Brasilia",
                "bonjour" => "Olá",
                "audio" => "ola.mp3",
                "paragraphe1" => "Le Brésil est le plus grand pays d'Amérique du Sud, célèbre pour sa forêt amazonienne, ses plages magnifiques et son carnaval animé.",
                "paragraphe2" => "Sa culture est un mélange d'influences indigènes, africaines et européennes.",
                "bouton1_texte" => "Voyager au Brésil",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Br%C3%A9sil"
            );
        } elseif ($pays == "Argentine") {
            $info = array(
                "habitants" => "Environ 45 millions",
                "langue" => "Espagnol",
                "capitale" => "Buenos Aires",
                "bonjour" => "Hola",
                "audio" => "hola.mp3",
                "paragraphe1" => "L'Argentine est un pays d'Amérique du Sud connu pour ses paysages variés, allant des montagnes des Andes aux plaines de la Pampa.",
                "paragraphe2" => "Elle est le berceau du tango et est célèbre pour son bœuf et son vin.",
                "bouton1_texte" => "Visiter l'Argentine",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Argentine"
            );
        } elseif ($pays == "Colombie") {
            $info = array(
                "habitants" => "Environ 50 millions",
                "langue" => "Espagnol",
                "capitale" => "Bogota",
                "bonjour" => "Hola",
                "audio" => "hola.mp3",
                "paragraphe1" => "La Colombie est un pays d'Amérique du Sud avec une géographie diversifiée, allant des forêts tropicales amazoniennes aux montagnes des Andes et aux plages caribéennes.",
                "paragraphe2" => "Elle est réputée pour son café, ses fleurs et sa riche culture.",
                "bouton1_texte" => "Découvrir la Colombie",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Colombie"
            );
        } elseif ($pays == "Maroc") {
            $info = array(
                "habitants" => "Environ 37 millions",
                "langue" => "Arabe, Berbère, Français",
                "capitale" => "Rabat",
                "bonjour" => "السلام عليكم <span class='arabic-text'>(As-salamu alaykum)</span>",
                "audio" => "salam.mp3",
                "paragraphe1" => "Le Maroc est un pays d'Afrique du Nord avec une histoire et une culture riches, connu pour ses villes impériales, ses souks animés et ses paysages désertiques.",
                "paragraphe2" => "Son architecture, sa cuisine et ses traditions sont un mélange d'influences arabes, berbères et européennes.",
                "bouton1_texte" => "Explorer le Maroc",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Maroc"
            );
        } elseif ($pays == "Egypte") {
            $info = array(
                "habitants" => "Environ 102 millions",
                "langue" => "Arabe",
                "capitale" => "Le Caire",
                "bonjour" => "أهلاً وسهلاً <span class='arabic-text'>(Ahlan wa sahlan)</span>",
                "audio" => "ahlan_wa_sahlan.mp3",
                "paragraphe1" => "L'Égypte est un pays d'Afrique du Nord-Est célèbre pour sa civilisation ancienne, ses pyramides majestueuses, ses temples et le fleuve Nil.",
                "paragraphe2" => "Son histoire millénaire et son patrimoine culturel fascinent les visiteurs du monde entier.",
                "bouton1_texte" => "Visiter l'Égypte",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/%C3%89gypte"
            );
        } elseif ($pays == "Nigeria") {
            $info = array(
                "habitants" => "Environ 206 millions",
                "langue" => "Anglais, Haoussa, Igbo, Yoruba",
                "capitale" => "Abuja",
                "bonjour" => "Hello",
                "audio" => "hello.mp3",
                "paragraphe1" => "Le Nigeria est le pays le plus peuplé d'Afrique, avec une diversité culturelle et linguistique impressionnante.",
                "paragraphe2" => "Il est riche en ressources naturelles et possède une scène artistique et musicale dynamique.",
                "bouton1_texte" => "Découvrir le Nigeria",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Nigeria"
            );
        } elseif ($pays == "France") {
            $info = array(
                "habitants" => "Environ 65 millions",
                "langue" => "Français",
                "capitale" => "Paris",
                "bonjour" => "Bonjour",
                "audio" => "bonjour.mp3",
                "paragraphe1" => "La France est un pays d'Europe occidentale avec une riche histoire, une culture influente et des monuments emblématiques comme la Tour Eiffel et le Louvre.",
                "paragraphe2" => "Elle est réputée pour sa gastronomie, son vin et sa mode.",
                "bouton1_texte" => "Explorer la France",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/France"
            );
        } elseif ($pays == "Allemagne") {
            $info = array(
                "habitants" => "Environ 83 millions",
                "langue" => "Allemand",
                "capitale" => "Berlin",
                "bonjour" => "Hallo",
                "audio" => "hallo.mp3",
                "paragraphe1" => "L'Allemagne est un pays d'Europe centrale avec une histoire complexe et un rôle majeur dans l'économie et la politique européennes.",
                "paragraphe2" => "Elle est connue pour ses villes dynamiques, ses paysages pittoresques et sa culture de la bière.",
                "bouton1_texte" => "Visiter l'Allemagne",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Allemagne"
            );
        } elseif ($pays == "Italie") {
            $info = array(
                "habitants" => "Environ 60 millions",
                "langue" => "Italien",
                "capitale" => "Rome",
                "bonjour" => "Ciao",
                "audio" => "ciao.mp3",
                "paragraphe1" => "L'Italie est un pays d'Europe du Sud avec une histoire et une culture riches, berceau de l'Empire romain et de la Renaissance.",
                "paragraphe2" => "Elle est célèbre pour son art, son architecture, sa cuisine (pizza, pâtes, gelato) et ses paysages magnifiques.",
                "bouton1_texte" => "Découvrir l'Italie",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Italie"
            );
        } elseif ($pays == "Japon") {
            $info = array(
                "habitants" => "Environ 126 millions",
                "langue" => "Japonais",
                "capitale" => "Tokyo",
                "bonjour" => "こんにちは <span class='arabic-text'>(Konnichiwa)</span>",
                "audio" => "konnichiwa.mp3",
                "paragraphe1" => "Le Japon est un pays insulaire d'Asie de l'Est connu pour sa technologie de pointe, sa culture traditionnelle (samouraïs, geishas, temples), sa cuisine raffinée (sushi, ramen) et ses paysages naturels (montagnes, cerisiers en fleurs).",
                "paragraphe2" => "Il allie modernité et traditions de manière unique.",
                "bouton1_texte" => "Explorer le Japon",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Japon"
            );
        } elseif ($pays == "Chine") {
            $info = array(
                "habitants" => "Environ 1.4 milliards",
                "langue" => "Chinois mandarin",
                "capitale" => "Pékin",
                "bonjour" => "你好 <span class='arabic-text'>(Nǐ hǎo)</span>",
                "audio" => "ni_hao.mp3",
                "paragraphe1" => "La Chine est le pays le plus peuplé du monde, avec une histoire millénaire et une culture riche et diversifiée.",
                "paragraphe2" => "Elle possède des sites historiques emblématiques comme la Grande Muraille et la Cité Interdite, ainsi qu'une économie en plein essor.",
                "bouton1_texte" => "Découvrir la Chine",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Chine"
            );
        } elseif ($pays == "Inde") {
            $info = array(
                "habitants" => "Environ 1.38 milliards",
                "langue" => "Hindi, Anglais + 21 autres langues officielles",
                "capitale" => "New Delhi",
                "bonjour" => "नमस्ते <span class='arabic-text'>(Namaste)</span>",
                "audio" => "namaste.mp3",
                "paragraphe1" => "L'Inde est un pays d'Asie du Sud avec une civilisation ancienne et une diversité culturelle, religieuse et linguistique extraordinaire.",
                "paragraphe2" => "Elle est célèbre pour ses monuments historiques (Taj Mahal), sa cuisine épicée et sa spiritualité.",
                "bouton1_texte" => "Découvrir l'Inde",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Inde"
            );
        } elseif ($pays == "Australie") {
            $info = array(
                "habitants" => "Environ 25 millions",
                "langue" => "Anglais",
                "capitale" => "Canberra",
                "bonjour" => "G'day",
                "audio" => "gday.mp3",
                "paragraphe1" => "L'Australie est un pays et un continent insulaire unique, connu pour sa faune endémique (kangourous, koalas), ses paysages variés (déserts, forêts tropicales, Grande Barrière de Corail) et ses villes côtières dynamiques.",
                "paragraphe2" => "Sa culture est un mélange d'influences indigènes et européennes.",
                "bouton1_texte" => "Explorer l'Australie",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Australie"
            );
        } elseif ($pays == "Nouvelle-Zelande") {
            $info = array(
                "habitants" => "Environ 5 millions",
                "langue" => "Maori, Anglais, Langue des signes néo-zélandaise",
                "capitale" => "Wellington",
                "bonjour" => "Kia Ora",
                "audio" => "kia_ora.mp3",
                "paragraphe1" => "La Nouvelle-Zélande est un pays insulaire d'Océanie, composé de deux îles principales, connu pour ses paysages naturels époustouflants (fjords, montagnes, volcans) et sa culture maorie.",
                "paragraphe2" => "Elle est surnommée 'le pays du long nuage blanc' par les Maoris.",
                "bouton1_texte" => "Visiter la Nouvelle-Zélande",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Nouvelle-Z%C3%A9lande"
            );
        } elseif ($pays == "Fidji") {
            $info = array(
                "habitants" => "Environ 900 000",
                "langue" => "Fidjien, Anglais, Hindi fidjien",
                "capitale" => "Suva",
                "bonjour" => "Bula",
                "audio" => "bula.mp3",
                "paragraphe1" => "Les Fidji sont un archipel mélanésien de plus de 300 îles, réputé pour ses plages de sable blanc, ses eaux turquoise, ses récifs coralliens et sa culture chaleureuse.",
                "paragraphe2" => "Le tourisme est un secteur clé de son économie.",
                "bouton1_texte" => "Découvrir les Fidji",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Fidji"
            );
        } elseif ($pays == "Vanuatu") {
            $info = array(
                "habitants" => "Environ 300 000",
                "langue" => "Bislama, Anglais, Français",
                "capitale" => "Port Vila",
                "bonjour" => "Halo",
                "audio" => "halo.mp3",
                "paragraphe1" => "Vanuatu est un archipel volcanique du Pacifique Sud, connu pour ses paysages accidentés, ses plages, ses sites de plongée et ses traditions culturelles uniques.",
                "paragraphe2" => "Il abrite l'un des volcans les plus accessibles au monde, le mont Yasur.",
                "bouton1_texte" => "Explorer le Vanuatu",
                "bouton1_url" => "https://fr.wikipedia.org/wiki/Vanuatu"
            );
        }

        if (!empty($info)) {
            echo '<div class="info-box">';
            if (!empty($info['habitants'])) {
                echo '<strong>Habitants :</strong> ' . $info['habitants'] . '<br>';
            }
            if (!empty($info['langue'])) {
                echo '<strong>Langue :</strong> ' . $info['langue'];
            }
            echo '</div>';

            if (!empty($info['drapeau'])) {
                echo '<img src="..ressources/images/' . $info['drapeau'] . '" alt="Drapeau de ' . $pays . '">';
            }

            if (!empty($info['capitale'])) {
                echo '<p><strong>Capitale :</strong> ' . $info['capitale'] . '</p>';
            }

            if (!empty($info['bonjour'])) {
                echo '<p><strong>Bonjour :</strong> ' . $info['bonjour'] . '</p>';
            }

            if (!empty($info['audio'])) {
                echo '<audio controls>';
                echo '<source src="../ressources/audios/' . $info['audio'] . '" type="audio/mpeg">';
                echo 'Votre navigateur ne supporte pas l\'élément audio.';
                echo '</audio>';
            }

            if (!empty($info['paragraphe1'])) {
                echo '<p class="country-paragraph"><strong>À propos :</strong> ' . $info['paragraphe1'] . '</p>';
            }

            if (!empty($info['paragraphe2'])) {
                echo '<p class="country-paragraph">' . $info['paragraphe2'] . '</p>';
            }

            if (!empty($info['bouton1_texte']) && !empty($info['bouton1_url'])) {
                echo '<a href="' . $info['bouton1_url'] . '" class="action-button" target="_blank">' . $info['bouton1_texte'] . '</a>';
            }
        } else {
            echo '<p>Informations non disponibles pour ce pays.</p>';
        }
        ?>
    </div>
</body>
</html>
    