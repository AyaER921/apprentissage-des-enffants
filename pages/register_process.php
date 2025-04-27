<?php
// sara chanouane ISITD
$conn = new mysqli('localhost', 'root', '', 'projet_php');
if ($conn->connect_error) {
    die('Erreur de connexion: ' . $conn->connect_error);
}

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);

$sql = "INSERT INTO utilisateurs (prenom, nom, email, motdepasse, score) VALUES ('$prenom', '$nom', '$email', '$motdepasse', 0)";
if ($conn->query($sql) === TRUE) {
    header("Location: login.php");  // MODIFICATION ICI
    exit();                        // ET ICI
} else {
    echo "Erreur: " . $conn->error;
}
$conn->close();
?>