
<?php 

class question {

    function __construct($question, $answerOne, $answerX, $answerTwo) {
        $this->question = $question;
        $this->answerOne = $answerOne;
        $this->answerX = $answerX;
        $this->answerTwo = $answerTwo;
    return $this->answerOne . " " . $this->question;
    }

    public function writeQuestion() {  
        echo "$this->question<label>$this->answerOne<input type='radio' name='$this->answerOne'></label>
        <label>$this->answerX<input type='radio' name='$this->answerX'></label>
        <label>$this->answerTwo<input type='radio' name='$this->answerTwo'></label><br/><br/>";
    }

    public function checkAnswers() {
       
    
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
