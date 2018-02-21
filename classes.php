
<?php 
include 'data.php';

class question {

    function __construct($question, $answerOne, $answerX, $answerTwo, $correctAnswer, $key) {
        $this->question = $question;
        $this->answerOne = $answerOne;
        $this->answerX = $answerX;
        $this->answerTwo = $answerTwo;
        $this->correctAnswer = $correctAnswer;
        $this->key = $key;

    return $this->answerOne . " " . $this->question;
    }

    public function writeQuestion() {
        echo "<div><h2>$this->question</h2><label for='$this->key'>$this->answerOne</label> <input type='radio' name='$this->key' id='$this->key' value='$this->answerOne'>
        <label for='for='$this->answerTwo'>$this->answerX<input type='radio' name='$this->key' id='$this->key' value='$this->answerX'></label>
        <label>$this->answerTwo<input type='radio' name='$this->key' id='$this->key' value='$this->answerTwo'></label></div><br/><br/>";
    }

    public function getChecked() {

        print_r($_GET);

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

        echo "$this->correctAnswer";
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
