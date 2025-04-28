<?php
 session_start();
 
 // Vérifier si la variable 'score' est définie dans la session
 if (isset($_SESSION['score'])) {
     $score = $_SESSION['score'];
 } else {
     // Si 'score' n'est pas défini, on initialise à 0
     $score = 0;
 }
 
 // Récupérer aussi les erreurs
 $erreurs = isset($_SESSION['erreurs']) ? $_SESSION['erreurs'] : [];
 
 session_destroy();
 ?>
 
<head>
    <link href="style_resultat.css" rel="stylesheet">
 <body>
     <h1>Test terminé !</h1>
     <p>Ton score : <?php echo $score; ?> points</p>
 
     <?php if (!empty($erreurs)): ?>
         <h2>Corrections :</h2>
         <ul>
             <?php foreach ($erreurs as $erreur): ?>
                 <li>
                     <strong>Question :</strong> <?php echo htmlspecialchars($erreur['question']); ?><br>
                     <strong>Bonne réponse :</strong> <?php echo htmlspecialchars($erreur['bonne_reponse']); ?>
                 </li><br>
             <?php endforeach; ?>
         </ul>
     <?php else: ?>
         <p>Bravo ! Tu n'as fait aucune erreur ! 🎉</p>
     <?php endif; ?>
 
     <a href="test_animaux.php">Recommencer</a>
 </body>
 </html>