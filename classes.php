
<?php 

class question {

    function __construct($question, $answerOne) {
        $this->question = $question;
        $this->answerOne = $answerOne;
        //this->answerX = $answerX;
        //this->answerTwo = $answerTwo;
    return $this->answerOne . " " . $this->question;
    }

    public function writeQuestion() {
        echo "Mitt namn är $this->answerOne och frågan är: $this->question ";
    }

}

$testar = new Question('Vad heter jag?', 'jenny');
$testar->writeQuestion();

print_r($testar);


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
