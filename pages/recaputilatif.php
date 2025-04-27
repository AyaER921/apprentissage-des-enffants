<!--Erroubaai Aya-->

<?php
    $max_score = $_GET['max_score'];
    $score_total = $_GET['score_total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récaputilatif</title>
    <link rel="stylesheet" href="../styles/recaputilatif.css">
</head>
<body>

    <div class="block">
        <p class="message">fin du test!!!</p>

        <p>Votre score: <?= htmlspecialchars($score_total) ?></p>
        <p>Votre dernier Max score: <?= htmlspecialchars($max_score) ?></p>
        <a href="cours_et_tests.php">
            <button class="menu-option">Terminer</button>
        </a>
    </div>
</body>
</html>