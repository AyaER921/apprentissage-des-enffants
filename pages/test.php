<?php
// sara CHANOUANE ISITD
session_start();
if (!isset($_SESSION['prenom'])) {
    header("Location: index.php");
    exit();
}

$questions = array(
    array(
        "question" => "Quelle est la capitale du Canada ?",
        "options" => array("Toronto", "Montréal", "Ottawa", "Vancouver"),
        "reponse" => "Ottawa",
        "info" => array("bonjour" => "Hello")
    ),
    array(
        "question" => "Comment dit-on bonjour au Brésil ?",
        "options" => array("Hola", "Bonjour", "Olá", "Konnichiwa"),
        "reponse" => "Olá",
        "info" => array("capitale" => "Brasilia")
    ),
    array(
        "question" => "Quelle est la capitale du Maroc ?",
        "options" => array("Casablanca", "Marrakech", "Rabat", "Fès"),
        "reponse" => "Rabat",
        "info" => array("bonjour" => "السلام عليكم (As-salamu alaykum)")
    ),
    array(
        "question" => "Dans quel pays la capitale est-elle Berlin ?",
        "options" => array("France", "Allemagne", "Italie", "Espagne"),
        "reponse" => "Allemagne",
        "info" => array("bonjour" => "Guten Tag")
    ),
    array(
        "question" => "Comment dit-on bonjour au Japon ?",
        "options" => array("Nǐ hǎo", "Buongiorno", "Konnichiwa", "Namaste"),
        "reponse" => "Konnichiwa",
        "info" => array("capitale" => "Tokyo")
    ),
    array(
        "question" => "Quelle est la capitale de l'Australie ?",
        "options" => array("Sydney", "Melbourne", "Canberra", "Perth"),
        "reponse" => "Canberra",
        "info" => array("bonjour" => "G'day")
    ),
    array(
        "question" => "Comment dit-on bonjour en Argentine ?",
        "options" => array("Olá", "Bonjour", "Hello", "Hola"),
        "reponse" => "Hola",
        "info" => array("capitale" => "Buenos Aires")
    ),
    array(
        "question" => "Quelle est la capitale de la Chine ?",
        "options" => array("Shanghai", "Hong Kong", "Pékin", "Canton"),
        "reponse" => "Pékin",
        "info" => array("bonjour" => "你好 (Nǐ hǎo)")
    ),
    array(
        "question" => "Dans quel pays dit-on 'Kia Ora' pour bonjour ?",
        "options" => array("Australie", "Fidji", "Nouvelle-Zélande", "Vanuatu"),
        "reponse" => "Nouvelle-Zélande",
        "info" => array("capitale" => "Wellington")
    ),
    array(
        "question" => "Quelle est la capitale de l'Égypte ?",
        "options" => array("Alexandrie", "Louxor", "Le Caire", "Gizeh"),
        "reponse" => "Le Caire",
        "info" => array("bonjour" => "أهلاً وسهلاً (Ahlan wa sahlan)")
    )
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;
    $resultats_detail = array();
    for ($i = 0; $i < count($questions); $i++) {
        $question_key = "question_" . $i;
        $reponse_utilisateur = isset($_POST[$question_key]) ? $_POST[$question_key] : null;
        $est_correcte = ($reponse_utilisateur == $questions[$i]['reponse']);

        if ($est_correcte) {
            $score++;
        } else {
            $resultats_detail[] = array(
                "question" => $questions[$i]['question'],
                "reponse_utilisateur" => $reponse_utilisateur,
                "reponse_correcte" => $questions[$i]['reponse'],
                "info" => $questions[$i]['info'] // Inclure les infos pour l'affichage
            );
        }
    }
    $_SESSION['score_test'] = $score;
    $_SESSION['resultats_detail'] = $resultats_detail;
    header("Location: resultat_test.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test de Connaissances</title>
    <link rel="stylesheet" href="../styles/style.css">
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #ffe0b2; /* Couleur pêche claire */
            margin: 20px;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #f57c00; /* Orange vif */
        }
        .question-container {
            background-color: #fffde7; /* Jaune très clair */
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 12px; /* Bords plus arrondis */
            box-shadow: 5px 5px 10px #bdbdbd; /* Ombre plus douce */
            text-align: left;
        }
        .question {
            font-weight: bold;
            margin-bottom: 10px;
            color: #2e7d32; /* Vert foncé */
        }
        .options label {
            display: block;
            margin-bottom: 8px;
            color: #546e7a; /* Gris bleuté */
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        button[type="submit"] {
            padding: 12px 25px;
            background-color: #f57c00; /* Orange vif */
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.2em;
            cursor: pointer;
            box-shadow: 3px 3px 5px #9e9e9e;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #ff9800; /* Orange un peu plus clair */
        }
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e53935; /* Rouge vif */
            color: white;
            text-decoration: none;
            border-radius: 8px;
            margin-top: 20px;
            font-size: 1em;
            box-shadow: 2px 2px 4px #9e9e9e;
            transition: background-color 0.3s ease;
        }
        .back-button:hover {
            background-color: #f44336; /* Rouge un peu plus clair */
        }
    </style>
</head>
<body>
    <a href="index.php" class="back-button">← Retour à la Carte</a>
    <h1>Testez vos connaissances !</h1>
    <form method="post">
        <?php for ($i = 0; $i < count($questions); $i++) { ?>
            <div class="question-container">
                <p class="question"><?php echo $questions[$i]['question']; ?></p>
                <div class="options">
                    <?php foreach ($questions[$i]['options'] as $option) { ?>
                        <label>
                            <input type="radio" name="question_<?php echo $i; ?>" value="<?php echo $option; ?>"> <?php echo $option; ?>
                        </label>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <button type="submit">Valider mes réponses</button>
    </form>
</body>
</html>