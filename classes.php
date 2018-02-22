
<?php 
include 'data.php';

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
        echo "<img src='$this->image'><h2>$this->question</h2>
        <div class='options'>
        <label for='$this->key'> $this->answerOne
        <input type='radio' name='$this->answerOne' id='$this->key' value='$this->answerOne'></label>

        <label for='$this->key'>$this->answerX
        <input type='radio' name='$this->answerX' id='$this->key' value='$this->answerX'></label>

        <label for='$this->key'>$this->answerTwo
        <input type='radio' name='$this->answerTwo' id='$this->key' value='$this->answerTwo'></label>
        </div>";
    }

    public function getChecked() {

        if(isset($_GET[$this->answerOne]) && isset($_GET[$this->answerX]) && isset($_GET[$this->answerTwo])){
            echo "Du kan bara välja ett alternativ på varje fråga!";
        } else {

        if(isset($_GET[$this->answerOne])){
            if('answer1' == $this->correctAnswer){
                echo "<p class='correct'>Rätt</p>";
                $GLOBALS["answersCorrect"] ++;
            } else {
                echo "<p class='wrong'>Fel</p>";
            }
        }


        if(isset($_GET[$this->answerX])){
            if('answerx' == $this->correctAnswer){
                echo "<p class='correct'>Rätt</p>";
                $GLOBALS["answersCorrect"] ++;
            } else {
                echo "<p class='wrong'>Fel</p>";
            }
        }

        if(isset($_GET[$this->answerTwo])){
            if('answer2' == $this->correctAnswer){
                echo "<p class='correct'>Rätt</p>";
                $GLOBALS["answersCorrect"] ++;
            } else {
                echo "<p class='wrong'>Fel</p>";;
            }
        }

    }
    



        /*$checkade = $_GET;
        //print_r($checkade);

        foreach($checkade as $checkad){
            //echo "du svarade $checkad";

            if ($checkad == $this->correctAnswer )//{ alltså kolla med isset om den finns! om den är ikryssad finns den  ej i post. sen kolla om den är rätt med correkt answer 
                echo "RÄTT";
            } else{
                return null;
            }

            /*foreach($questions as $key => $value)
            if($checkad == $value['correctAnswer']){
                echo "hahaha";
            }*/
        //}
        /*if(!empty($_GET['check_list'])) {
            foreach($_GET['check_list'] as $check) {
                    echo $check;
                }
                }*/
        //if (isset($_GET['submit'])) {
            //if(isset($_GET['checkbox']))
            //{
                /*print_r($_GET['checkbox']);
                $checkade = $_GET['checkbox'];
            
                foreach($checkade as $select){
                echo "$select";
                }*/
                
            //echo "You have selected :".$_GET['checkbox'];  //  Displaying Selected Value
           // }
        
    }

    public function checkAnswers() {

        //echo "$this->correctAnswer";
        
    //print_r($_GET[$this->answerOne]);


    }

}

//$testar = new Question('Vad heter jag?', 'jenny', 'Klara', 'Moa');
//$testar->writeQuestion();
//$testar->checkAnswers();

//$testar2 = new Question('Vad heter du?', 'karin', 'Frida', 'Sofia');
//$testar2->writeQuestion();
//$testar2->checkAnswers();







//print_r($questions);

//print_r($_GET);
//print_r($testar);


/*en class question 
text: string

answerone : sträng
answerx : sträng
answertwo: sträng 

gör en konstruktor(behöver text, answer1, answerx, answer2)


sortera frågor med rand 

skicka in rätt svar i konstruktorn(troligen)

tex answeronecorrect = true false boolean 

ha en array att skicka in med till konstruktorn(antar)

en funktion i klassen som kollar om objektet är rätt eller inte : function check answers(tar in answers), kolla om sant
eller falskt och returnera en boolean. 

med form, post. */
