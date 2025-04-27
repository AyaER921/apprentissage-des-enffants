let scoreActuel = <?= $SCORE_INITIAL ?>; 
const maxEssais = <?= $MAX_SCORE?>;
let essais = 0; 
const bonneReponse = "<?= $question_courante['id_r']?>"; 
const idQuestionCourante = <?= $question_courante['id_q'] ?>;
document.querySelectorAll('input[name="repense_utilisateur"]')
