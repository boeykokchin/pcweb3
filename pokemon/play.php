<?php
// Include database.php and header.php
include "database.php";
include "header.php";
include "js.php";

$playerName = $_POST["name"];
$playerEmail = $_POST["email"];


// Display welcome player
echo "<h1 class='text-center'> Welcome {$playerName}!</h1>";
echo "<h2 class='text-center'> (W)ho (A)m (I)?</h2>";
// echo $playerEmail;

// Create a quiz database set in mixed array format from master database (refer database.php)
$quiz = $db;
// echo count($quiz) . "<br>";
// echo $quiz[0] . $quiz[0]["name"] . $quiz[0]["pic"] . "<br>";

// Create randomized indexes in quiz database -this single dataset will be used as questions, answers and multiple choices
// shuffle($quiz);

// Set the number of questions in quiz
$numQues = 2;

// Set the number of multiple choice - type starting from 0 - e.g., 2 means 3 multiple choices
$numMC = 2;

// Extract a question set from the top array elements
// $quesSet = array_slice($quiz, 0, ($numMC + 1));
$quesSet = $quiz;
// echo count($question);


// Set correct answer - randomized
$ansChosen = rand(0, $numMC);
// echo $ansChosen . "<br>";

// Form starts here
echo "<form action='result.php' method='POST'>";

// Question loop starts here
for ($quesloop = 1; $quesloop <= $numQues; $quesloop++) {

    // Set Question picture
    echo "Question: {$quesloop}";
    echo "<img src='img/{$quesSet[$ansChosen]['pic']}'>";
    // echo "Question Picture: " . $question[$ansChosen]["pic"];

    // Generate multiple choices
    for ($i = 0; $i <= $numMC; $i++) {
        echo "<input type='hidden' name='ansCom-Q{$quesloop}' value='{$quesSet[$ansChosen]['name']}'>";
        echo "<div class='form-check-inline'>";
        echo "<label class='form-check-label'>";
        echo "<input type='radio' class='form-check-input' name='ansUsr-Q{$quesloop}' value='{$quesSet[$i]['name']}'>{$quesSet[$i]['name']}";
        echo "</label>";
        echo "</div>";
        // echo "Choice#" . $i . $question[$i]["name"] . "<br>";
    }

    // array_splice($quesSet, $ansChosen, 1);
}
// Question loop ends here

echo "<input class='btn btn-primary' type='submit' value='submit' id='submit'>";
echo "</form>";
//  Form ends here

// $ansCom = $question[$ansChosen]["name"];
// $ansUsr = $question[0]["name"];
// $ansUsr = $_POST["ansUsr"];

// echo "Computer Answer: " . $ansCom . "<br>";
// echo "User Answer: " . $ansUsr . "<br>";


// if ($ansUsr == $ansCom) {
//     echo "<br><h3 class='text-center'>Hooray! You are Correct!</h3>";
// } else {
//     echo "<br><h3 class='text-center'>Oops! You are Wrong!</h3>";
// }

// Remove current answer-question-element from quiz array - to prevent repeat of same question
// array_splice($quiz, $ansChosen, 1);
// echo count($quiz);
// printArray($quiz);


// shuffle($quiz);

// printArray($quiz);



include "footer.php";

// Temporary function to check database array - to remove before submission
function printArray($aDB)
{
    $count = 0;
    while ($count <= count($aDB)) {
        echo "Name: " . $aDB[$count]["name"] . " is picture file - " . $aDB[$count]["pic"] . "<br>";
        $count++;
    }
}
