<?php
// sara CHANOUANE ISITD
session_start();
if (!isset($_SESSION['prenom']) || !isset($_SESSION['score_test'])) {
    header("Location: index.php");
    exit();
}

$score = $_SESSION['score_test'];
$prenom = $_SESSION['prenom'];
$score_sur_100 = $score * 10; // Calcul du score sur 100

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet_php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mise à jour du score dans la base de données (incrémentation du score brut)
$sql = "UPDATE utilisateurs SET score = score + ? WHERE prenom = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $score, $prenom);

if ($stmt->execute()) {
    $message_base_de_donnees = "Votre score a été enregistré.";
} else {
    $message_base_de_donnees = "Erreur lors de l'enregistrement du score : " . $conn->error;
}

$stmt->close();
$conn->close();

$resultats_detail = isset($_SESSION['resultats_detail']) ? $_SESSION['resultats_detail'] : array();

unset($_SESSION['score_test']);
unset($_SESSION['resultats_detail']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultats du Test</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #c8e6c9; /* Vert clair */
            margin: 20px;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #388e3c; /* Vert foncé */
        }
        .result-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 5px 5px 10px #bdbdbd;
            margin-bottom: 20px;
        }
        .score {
            font-size: 2.5em;
            font-weight: bold;
            color: #388e3c;
            margin-bottom: 15px;
        }
        .score-total {
            font-size: 1.5em;
            color: #777;
            margin-bottom: 10px;
        }
        .message {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 10px;
        }
        .correction-container {
            background-color: #ffebee; /* Rouge pâle */
            padding: 20px;
            border-radius: 12px;
            margin-top: 20px;
            text-align: left;
            border: 1px solid #e57373; /* Rouge plus soutenu pour la bordure */
        }
        .correction-container h2 {
            color: #d32f2f; /* Rouge vif */
            margin-top: 0;
            margin-bottom: 15px;
        }
        .question-correction {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px dashed #e57373;
        }
        .question-correction:last-child {
            border-bottom: none;
        }
        .question-label {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }
        .user-answer {
            font-style: italic;
            color: #757575;
            margin-bottom: 5px;
        }
        .correct-answer {
            font-weight: bold;
            color: #388e3c;
        }
        .info-correct {
            font-style: italic;
            color: #1976d2;
        }
        .back-button {
            display: inline-block;
            padding: 12px 25px;
            background-color: #f44336; /* Rouge vif */
            color: white;
            text-decoration: none;
            border-radius: 10px;
            margin-top: 20px;
            font-size: 1.1em;
            box-shadow: 3px 3px 5px #e57373;
            transition: background-color 0.3s ease;
        }
        .back-button:hover {
            background-color: #e53935; /* Rouge un peu plus foncé */
        }
    </style>
</head>
<body>
    <a href="index.php" class="back-button">← Retour à la Carte</a>
    <h1>Résultats du Test !</h1>
    <div class="result-container">
        <p class="message">Félicitations, <?php echo htmlspecialchars($prenom); ?> !</p>
        <p class="score"><?php echo $score_sur_100; ?></p>
        <p class="score-total">sur 100</p>
        <p class="message"><?php echo $message_base_de_donnees; ?></p>
    </div>

    <?php if (!empty($resultats_detail)) { ?>
        <div class="correction-container">
            <h2>Correction des réponses :</h2>
            <?php foreach ($resultats_detail as $resultat) { ?>
                <div class="question-correction">
                    <p class="question-label">Question : <?php echo htmlspecialchars($resultat['question']); ?></p>
                    <p class="user-answer">Votre réponse : <span style="font-weight: bold;"><?php echo htmlspecialchars($resultat['reponse_utilisateur'] ?: 'Non répondu'); ?></span></p>
                    <p class="correct-answer">Réponse correcte : <?php echo htmlspecialchars($resultat['reponse_correcte']); ?></p>
                    <?php if (isset($resultat['info']['bonjour'])) { ?>
                        <p class="info-correct">Bonjour dans ce pays : <span style="font-weight: bold;"><?php echo htmlspecialchars($resultat['info']['bonjour']); ?></span></p>
                    <?php } elseif (isset($resultat['info']['capitale'])) { ?>
                        <p class="info-correct">Capitale de ce pays : <span style="font-weight: bold;"><?php echo htmlspecialchars($resultat['info']['capitale']); ?></span></p>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="correction-container">
            <h2>Bravo !</h2>
            <p class="message">Vous avez obtenu un score parfait de 100 sur 100.</p>
        </div>
    <?php } ?>
</body>
</html>