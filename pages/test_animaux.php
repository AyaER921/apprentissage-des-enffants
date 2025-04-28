<?php
include '../database/db.php';
session_start();

if (!isset($_SESSION['score'])) $_SESSION['score'] = 0;
if (!isset($_SESSION['question_index'])) $_SESSION['question_index'] = 0;

$question_index = $_SESSION['question_index'];

// Obtenir toutes les questions
$questions = mysqli_query($conn, "SELECT * FROM test_questions");
$questions_array = mysqli_fetch_all($questions, MYSQLI_ASSOC);

if ($question_index >= count($questions_array)) {
    header("Location: resultat.php");
    exit();
}

$current_question = $questions_array[$question_index];
$answers = mysqli_query($conn, "SELECT * FROM test_answers WHERE question_id = " . $current_question['id']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test Animaux</title>
    <link rel="stylesheet" href="../styles/style_test.css">
</head>
<body>
    
    <h2>Question <?php echo $question_index + 1; ?></h2>
    <p><?php echo $current_question['question']; ?></p>

    <?php if (!empty($current_question['video_path'])): ?>
        <video width="400" controls>
        <source src="<?php echo $current_question['video_path']; ?>" type="video/mp4">
        Votre navigateur ne supporte pas la vidéo.
        </video>
    <?php endif; ?>

    <?php if (!empty($current_question['image_path'])): ?>
        <img src="<?php echo $current_question['image_path']; ?>" alt="Image de la question" width="400">
    <?php endif; ?>
    <?php if (!empty($current_question['son_path'])): ?>
        <audio controls>
           <source src="<?php echo $current_question['son_path']; ?>" type="audio/mpeg">
        Votre navigateur ne supporte pas l'audio.
        </audio>
    <?php endif; ?>




    <form method="POST" action="verifier.php">
        <?php while ($row = mysqli_fetch_assoc($answers)): ?>
            <label>
                <input type="radio" name="reponse" value="<?php echo $row['id']; ?>" required>
                <?php echo $row['answer_text']; ?>
            </label><br>
        <?php endwhile; ?>
        <button type="submit">Suivant</button>
    </form>
</body>
</html>
