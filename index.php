<?php 

include 'header.php';

?>

<?php
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
            
        echo '<p class="resultat">Du hade ' . $GLOBALS["answersCorrect"] . ' / ' . count($questions) . ' rätt!</p>';
            
        }
    ?>

<form method="POST">
<?php
  foreach($questions as $key => $value) {
    $newQuestion = new Question($value['question'], $value['answerOne'], $value['answerX'], $value['answerTwo'], $value['correctAnswer'], $value['image'], $key);
    $newQuestion->writeQuestion();
    $newQuestion->checkAnswer();
}


    ?>
    <button type="submit" name="submit">Resultat</button>
</form>



<?php

include 'footer.php';
?>

