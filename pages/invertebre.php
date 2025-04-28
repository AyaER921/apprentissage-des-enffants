<?php 
include '../database/db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Les animaux</title>
    <link href="../styles/style_projet.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="animal-page">
    <h1>Bienvenue au royaume des Invertébrés, où chaque créature a son rôle essentiel ! 🐞</h1>
    <div class="animals-grid">
      <?php
        $result = mysqli_query($conn, "SELECT * FROM animaux WHERE categorie = 'invertébré'");
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="anima">';
            echo '<a href="animal1.php?id=' . $row['id'] . '">';
            echo '<img src="../ressources/images/' . $row['image'] . '" width="200">';
            echo '<h3>' . $row['nom'] . '</h3>';
            echo '</a>';
            echo '<p>' . $row['sous_titre'] . '</p>';
            echo '</div>';
        }
      ?>
    </div>
</body>
</html>