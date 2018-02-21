<?php 

include 'header.php';

?>

<form method="GET">
<?php
  foreach($questions as $key => $value) {
    $testar3 = new Question($value['question'], $value['answerOne'], $value['answerX'], $value['answerTwo']);

$testar3->writeQuestion();
$testar3->checkAnswers();
}
    ?>
    <button type="submit">Resultat</button>
</form>

<?php

include 'footer.php';
?>

