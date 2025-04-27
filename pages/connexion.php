<?php
// sara CHANOUANE ISITD
session_start();
$conn = new mysqli('localhost', 'root', '', 'projet_php');
if ($conn->connect_error) { die('Erreur de connexion: ' . $conn->connect_error); }

$email = $_POST['email'];
$motdepasse = $_POST['motdepasse'];

$sql = "SELECT * FROM utilisateurs WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($motdepasse, $user['motdepasse'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['prenom'] = $user['prenom'];
        header("Location: index.php");
    } else {
        echo "Mot de passe incorrect.";
    }
} else {
    echo "Utilisateur non trouvé.";
}
$conn->close();
?>
