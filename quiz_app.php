<?php

// an array of questions, each with a question and correct answer
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
];

//An array which store the user-provided answers
$answers = [];

//Use a foreach loop to display each question and collect the user's answer using readline()

foreach($questions as $index => $question){
    echo ($index+1) . ". ". $question['question']."\n";
    array_push($answers,trim(readline("Your answer :") ));
 }

/* Accepts two arrays as parameters and 
   Compares the user's answers to the correct answers and calculates the score.
   Returns the total score.
*/
function evaluateQuiz(array $questions, array $answers): int {
    $score=0;
    foreach($questions as $index => $question){
        if ($answers[$index] === $question['correct']) {
            $score++;
            }
        }
        return $score;
}
// evaluateQuiz function is used to get the score abd Display to the user
$result = 0;
$result = evaluateQuiz($questions,$answers);
echo "You scored {$result} out of ".count($questions).".\n";

//Provide feedback based on performance like, If the user scores full marks, display: "Excellent job!" so on.
if ($result > 2){
        echo "Excellent job!";
    }elseif($result > 1 && $result <3){
        echo "Good effort!";
    }else{
        echo "Better luck next time!";
    }

?>