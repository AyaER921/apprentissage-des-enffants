<!DOCTYPE html>
<!-- sara CHANOUANE ISITD -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <style>
        body { background-color: violet; font-family: Arial, sans-serif;  }
        .container{display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0;}
        .form-container {  background: #fff; padding: 20px; border-radius: 10px; width: 300px; text-align: center; }
        input { width: calc(100% - 20px); margin: 10px 0; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        .button { width: 100%; padding: 10px; background: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 1em; }
        h2 { margin-bottom: 20px; }
        p { margin-top: 15px; }
        a { color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>

    <link rel="stylesheet" href="../styles/accueil.css">

</head>
<body>

    <header>
        <div>logo</div>
        <button class="hamburger" id="hamburger">&#9776;</button>
    </header>

    <div class="menu-slide" id="menu">
        <a href="accueil.php">
        <div class="menu-option">ACCEUIL</div>
        </a>

        <a href="login.php">
        <div class="menu-option">CONNEXION</div>
        </a>
    
    </div>


    <div class="container">
        <div class="form-container">
            <h2>Connexion</h2>
            <form action="connexion.php" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="motdepasse" placeholder="Mot de passe" required>
                <button class="button" type="submit">Se connecter</button>
            </form>
            <p>Pas encore de compte ? <a href="register.php">S'inscrire ici</a></p>
        </div>
    </div>

    <script src="../scripts/menu.js"></script>

</body>
</html>