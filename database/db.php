
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "projet_php";


$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");
?>
