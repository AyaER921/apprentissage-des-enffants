<?php
include '../database/db.php';
session_start();

$reponse_id = $_POST['reponse'];

// Chercher si la réponse est correcte
$res = mysqli_query($conn, "SELECT is_correct, question_id FROM test_answers WHERE id = $reponse_id");
$row = mysqli_fetch_assoc($res);

$question_id = $row['question_id'];

// Initialiser un tableau d'erreurs si ce n'est pas encore fait
if (!isset($_SESSION['erreurs'])) {
    $_SESSION['erreurs'] = [];
}

if ($row['is_correct']) {
    // Si correct → ajouter le score
    $score_query = mysqli_query($conn, "SELECT score FROM test_questions WHERE id = $question_id");
    $score_row = mysqli_fetch_assoc($score_query);
    $_SESSION['score'] += $score_row['score'];
} else {
    // Si faux → enregistrer l'erreur
    // Chercher la question
    $question_res = mysqli_query($conn, "SELECT question FROM test_questions WHERE id = $question_id");
    $question_row = mysqli_fetch_assoc($question_res);
    
    // Chercher la bonne réponse
    $correct_answer_res = mysqli_query($conn, "SELECT answer_text FROM test_answers WHERE question_id = $question_id AND is_correct = 1");
    $correct_answer_row = mysqli_fetch_assoc($correct_answer_res);
    
    // Ajouter dans la session erreurs
    $_SESSION['erreurs'][] = [
        'question' => $question_row['question'],
        'bonne_reponse' => $correct_answer_row['answer_text']
    ];
}

$_SESSION['question_index']++;
header("Location: test_animaux.php");
exit();
?>
