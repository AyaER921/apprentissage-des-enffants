<?php 
include '../database/db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Les oiseaux</title>
    <link href="style_projet.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="animal-page">
    <h1>Bienvenue chez les Oiseaux ! 🐦</h1>
    <div class="animals-grid">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM animaux WHERE categorie = 'oiseau'");
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="anima">';
            echo '<a href="animal1.php?id=' . $row['id'] . '">';
            echo '<img src="../ressources/images/' . $row['image'] . '" width="200">';
            echo '<h3>' . $row['nom'] . '</h3>';
            echo '</a>';
            echo '<p>' . $row['description'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
