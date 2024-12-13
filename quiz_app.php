<?php

// Defining and declaring required function

/* valuateQuiz(array $questions, array $answers): int  

$questions: An array of questions where each question has a question text and a correct answer.
$answers: An array of user-provided answers.
Compares the user's answers to the correct answers and calculates the score.
Returns the total score. */

function evaluateQuiz(array $questions, array $answers): int {
    $score = 0;
    foreach ($questions as $index => $question){
        if ($answers[$index] === $question['correct']) {
            $score++;
        }
    }
    return $score;
}


// Creating a set of quiz questions
$questions = [

    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?','correct' => 'Shakespeare'],

];

// Collecting answers from the user

$answers = [];
foreach ($questions as $index => $question) {
    echo ($index+1) . ". " . $question ['question'] . "\n";
    $answers[] = trim(readline("Your answer: "));
}

// Evaluating user's score
// Calculating based on correct answers
$score = evaluateQuiz($questions, $answers);
echo "\nYou scored $score out of " . count($questions) . ".\n";

// Provide feedback based on performance
if ($score === count($questions)) {
    echo "Excellent job! \n";
}elseif ($score > 1) {
    echo "Good effort! \n";
}else{
    echo "Better luck next time!\n";
}

?>