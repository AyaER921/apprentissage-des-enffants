<?php
require '../database/database.php';
$PDO = Database::getInstance()->getConnection();

$sql = 'SELECT * FROM sources';
$sources = $PDO->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cour métiers</title>
    <link rel="stylesheet" href="../styles/cour_metier.css">
    <link rel="stylesheet" href="../styles/accueil.css">

</head>
<body>


    <header>
        <div>logo</div>
        <button class="hamburger" id="hamburger">&#9776;</button>
    </header>


    <div class="centrer">
    <div class="slider">

            <?php foreach ($sources as $source): ?>
            <div class="slide">
                <img src="../ressources/images/<?= $source['image'] ?>.<?= $source['extension_image'] ?>" 
                    alt="<?= $source['image'] ?>">
                <p><?= htmlspecialchars($source['texte']) ?></p>
                <audio controls >
                    <source src="../ressources/audios/<?= $source['audio'] ?>.<?= $source['extension_audio'] ?>">
                </audio>
            </div>
            <?php endforeach; ?>

                <button class="prev" onclick="changerSlide(-1)">&#10094;</button>
                <button class="next" onclick="changerSlide(1)">&#10095;</button>
    </div>
    </div>


    <div class="menu-slide" id="menu">

        <a href="accueil.php">
            <div class="menu-option">ACCEUIL</div>
        </a>
            
        <a href="page_principale.php">
            <div class="menu-option">PAGE PRINCIPALE</div>
        </a>

        <a href="cours_et_tests.php">
            <div class="menu-option">COURS ET TESTS</div>
        </a>

        <a href="deconnexion.php">
            <div class="menu-option">DECONNEXION</div>
        </a>

    </div> 
    <script src="../scripts/menu.js"></script>
 
    <script src="../scripts/cour_metier.js"></script>
</body>
</html>