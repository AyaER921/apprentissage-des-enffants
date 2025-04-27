
<?php
// Formulaire d'inscription
// sara CHANOUANE ISITD
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <style>
        body { background-color: violet; font-family: Arial, sans-serif; }
        form { background: #fff; padding: 20px; border-radius: 10px; margin: 50px auto; width: 300px; }
        input { width: 100%; margin: 10px 0; padding: 10px; }
        button { width: 100%; padding: 10px; background: #4CAF50; color: white; border: none; border-radius: 5px; }
    </style>
</head>
<body>
<form action="register_process.php" method="POST">  <h2>Créer un compte</h2>
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="motdepasse" placeholder="Mot de passe" required>
    <button type="submit">S'inscrire</button>
    <p>Déjà un compte ? <a href="login.php">Se connecter ici</a></p>  </form>
</body>
</html>
   
