<?php 

include 'header.php';

?>

<form method="GET">
<?php
  foreach($questions as $key => $value) {
    $testar3 = new Question($value['question'], $value['answerOne'], $value['answerX'], $value['answerTwo'], $value['correctAnswer'], $key);
    $testar3->writeQuestion();
    $testar3->checkAnswers();
    $testar3->getChecked();
}


    ?>
    <button type="submit" name="submit">Resultat</button>
</form>

<?php
    if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
            
        echo 'Du hade ' . $GLOBALS["answersCorrect"] . ' / ' . count($questions) . ' rätt.';
            
        }
    ?>

<?php

include 'footer.php';
?>

