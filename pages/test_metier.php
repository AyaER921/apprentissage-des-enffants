<!-- Erroubaai Aya-->


<?php
require '../database/database.php';
$pdo = Database::getInstance()->getConnection();
session_start();
$id_utilisateur = $_SESSION['user_id'];

$requeteQuestions = 'SELECT * FROM questions INNER JOIN sources on id_r = id';
$questions = $pdo->query($requeteQuestions)->fetchAll(PDO::FETCH_ASSOC);

//dernière qst enregistrée
$requeteRepenseUtilisateur = 'SELECT * FROM repense WHERE id_utilisateur = :id_utilisateur';
$repenseUtilisateurStmt = $pdo->prepare($requeteRepenseUtilisateur);
$repenseUtilisateurStmt->execute(['id_utilisateur' => $id_utilisateur]);

$repenseUtilisateur = $repenseUtilisateurStmt->fetch(PDO::FETCH_ASSOC);

$MAX_SCORE = 10;
$DERNIERE_QUESTION_ID = 10;
$score_q = $MAX_SCORE;
$score_total = 0;
$id_question_courante = 1;

$score_test;
$estDernierQuestion = false;

// si on a déjà une repense on recupère ses données
if($repenseUtilisateur !== false) {
    $id_question_courante = $repenseUtilisateur['id_q_courante'];
    $score_total = $repenseUtilisateur['score_actuel'];
}

//si on a une reponse envoyée
if(isset($_GET['id_q']) && isset($_GET['score_total'])) {
    $id_question_courante = $_GET['id_q'];
    $score_total = $_GET['score_total'];

    if($repenseUtilisateur !== false) {
        $dernier_max_score = $repenseUtilisateur["dernier_score"];

        // si le test est terminé
        if($id_question_courante > $DERNIERE_QUESTION_ID) {
            if($score_total > $dernier_max_score) {
                $dernier_max_score = $score_total;
            }
            $estDernierQuestion = true;
            $id_question_courante = 1;
            $score_test = $score_total;
            $score_total = 0;
        }

        $stmt = $pdo->prepare('UPDATE repense SET 
            id_q_courante = :id_question_courante,
            score_actuel = :score_total,
            dernier_score = :dernier_max_score
         WHERE id_utilisateur = :id_utilisateur');

        $stmt->execute([
            'id_question_courante' => $id_question_courante,
            'score_total' => $score_total,
            'id_utilisateur' => $id_utilisateur,
            'dernier_max_score' => $dernier_max_score,
        ]);
    } 
    
    else {
        $stmt = $pdo->prepare('INSERT INTO repense (id_utilisateur, id_q_courante, score_actuel, dernier_score)
             VALUES (:id_utilisateur, :id_question_courante, :score_total, 0)');

        $stmt->execute([
            'id_question_courante' => $id_question_courante,
            'score_total' => $score_total,
            'id_utilisateur' => $id_utilisateur,
        ]);
    }
}

// on passe au recap du test
if($estDernierQuestion) {
    header('Location: recaputilatif.php?score_total='.$score_test.'&max_score='.$repenseUtilisateur["dernier_score"]);
}

$question_courante = null;

foreach ($questions as $question) {
    if ($question['id_q']  == $id_question_courante){
        $question_courante = $question;
    } 
}

$autres_questions = array_filter($questions, function($q) use ($question_courante) {
    return $q['id_q'] !== $question_courante['id_q'];
   });

   shuffle($autres_questions);

   $choix_aleatoires = array_slice($autres_questions, 0, 3);

   $liste = array_merge([$question_courante], $choix_aleatoires);

   //mélanger la liste avant l'affichage
   shuffle($liste);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test métiers</title>
    <link rel="stylesheet" href="../styles/test_metier.css">
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

    <div class="container">
    
        <p class="question"><?= htmlspecialchars($question_courante['question']) ?></p>
    
        <form class="form">
            <?php foreach ($liste as $lst): ?>
    
                <div class="block">
                    <input type="radio" value="<?= $lst['id_r'] ?>" name="repense_utilisateur">
        
                    <img src="../ressources/images/<?= $lst['image'] ?>.<?= $lst['extension_image'] ?>" 
                        alt="<?= $lst['image'] ?>">
                </div>
    
            <?php endforeach; ?>
        </form>
        <div class="info">
            <p class="cadre">Question N°<?= htmlspecialchars($id_question_courante) ?></p>
            <p class="cadre">Score: <?= htmlspecialchars($score_total) ?></p>
        </div>
    
    </div>
            
    <script type="text/javascript">
        const maxEssais = 5;
        let essais = 0;
    
        let score_q = <?php echo $score_q;?>;
        let score_total = <?php echo $score_total;?>;
        let idQuestionCourante = parseInt(<?php echo $id_question_courante;?>);
        let bonneReponse = parseInt( <?php echo $question_courante["id_r"];?>);
        document.addEventListener("DOMContentLoaded", function () {
            if (!bonneReponse || !idQuestionCourante) return;
        document.querySelectorAll('input[name="repense_utilisateur"]').forEach(input => {
            input.addEventListener('change', function () {
                const value = parseInt(this.value);
    
                if (value === bonneReponse) {
                    alert("Bonne réponse !");
                    const prochaineQuestion = parseInt(idQuestionCourante) + 1;
                    score_total += score_q;
                    window.location.href = `test_metier.php?id_q=${prochaineQuestion}&score_total=${score_total}`;
                } else {
                    essais++;
                    score_q--;
                    if (essais < maxEssais) {
                        alert(`Mauvaise réponse. Il vous reste ${maxEssais - essais} tentative(s).`);
                    }
                    if (essais >= maxEssais) {
                        alert("5 mauvaises réponses. Passage à la question suivante.");
                        const prochaineQuestion = parseInt(idQuestionCourante) + 1;
                        score_total += score_q;
                        window.location.href = `test_metier.php?id_q=${prochaineQuestion}&score_total=${score_total}`;
                    }
                }
            });
        });
        });
    </script>

    <script src="../scripts/menu.js"></script>

</body>
</html>