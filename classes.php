
<?php 

$answersCorrect = 0;

class question {

    function __construct($question, $answerOne, $answerX, $answerTwo, $correctAnswer, $image, $key) {
        $this->question = $question;
        $this->answerOne = $answerOne;
        $this->answerX = $answerX;
        $this->answerTwo = $answerTwo;
        $this->correctAnswer = $correctAnswer;
        $this->image = $image;
        $this->key = $key;

    return $this->answerOne . " " . $this->question;
    }

    public function writeQuestion() {
        echo "<img src='$this->image'><h2>$this->key . $this->question</h2>
        <div class='options'>
        <label for='$this->key'> 1. $this->answerOne";

        echo '<input type="radio" name="options' . $this->key . '[]" id=" ' . $this->key . '" value="' . $this->answerOne . '"></label>';

        echo "<label for='$this->key'> X. $this->answerX";
        echo '<input type="radio" name="options' . $this->key . '[]" id=" ' . $this->key . '" value="' . $this->answerX . '"></label>';

        echo "<label for='$this->key'> 2. $this->answerTwo";
        echo '<input type="radio" name="options' . $this->key . '[]" id=" ' . $this->key . '" value="' . $this->answerTwo . '"></label>';
        //<input type='radio' name='options . $this->key' id='$this->key' value='$this->answerTwo'></label>
        echo "</div>";
    }

    //alla tre alternativ får samma key

    public function checkAnswer() {

    
        if(isset($_POST['options' . $this->key])){
            $animals = $_POST['options' . $this->key];

            foreach ($animals as $animal){ 
                if($animal == $this->correctAnswer){
                    echo "<p class='correct'>Rätt</p>";
                    $GLOBALS["answersCorrect"] ++;
                } else {
                    echo "<p class='wrong'>Fel</p>";
                }
            }
        }    

    }


}


