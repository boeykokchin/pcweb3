<!-- This module attemmpt to wite html and bootstrap css inside PHP code. Found this method is a lot easier for logic control coding. -->

<?php
// Bring in database and header information
include "data.php";
include "header.php";

echo "<body class='container text-center d-flex flex-column'>";

// Display welcome player
$playerName = $_POST["name"];
echo "<div>";
echo "<h1 class='pt-5 display-3 text-primary text-center'>Welcome <span class='text-capitalize'>{$playerName}</span>!</h1>";
echo "</div>";

// Set the number of questions in quiz from player selection
$numQues = $_POST["numQues"];

// Set the number of multiple choices
$numMC = 3;

// Randomized database
shuffle($db);

echo "<div class='container'>";

// Start <form>
echo "<form action='result.php' method='POST' id='quiz'>";

// Start - Question loop
for ($quesloop = 1; $quesloop <= $numQues; $quesloop++) {

    echo "<div class='row' id='question'>";
    echo "<div class='col-12'>";

    // Set correct answer position - randomized
    $ansChosen = rand(1, $numMC);

    // Set Question picture
    echo "<p class='text-success lead'>Question: {$quesloop}</p>";
    echo "<img src='img/{$db[$ansChosen]['pic']}'>";
    echo "<div class='container'>";
    // Start - Generate multiple choices
    for ($i = 1; $i <= $numMC; $i++) {
        echo "<input type='hidden' name='ansCom-Q{$quesloop}' value='{$db[$ansChosen]['name']}'>";
        echo "<input type='hidden' name='quesPic-Q{$quesloop}' value='{$db[$ansChosen]['pic']}'>";
        echo "<input type='hidden' name='numQues' value='{$numQues}'>";
        echo "<div class='form-check-inline'>";
        echo "<label class='form-check-label'>";
        echo "<input type='radio' class='form-check-input' name='ansUsr-Q{$quesloop}' value='{$db[$i]['name']}'>{$db[$i]['name']}";
        echo "</label>";
        echo "</div>";
    }
    // End - Generate multiple choices

    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<hr>";

    // Remove current answer-question-element from quiz array - to eliminate repeat of same question
    array_splice($db, $ansChosen, 1);

    // Randomized database
    shuffle($db);
}
// End - Question loop

echo "<div class='text-center'>";
echo "<input class='btn btn-primary btn-lg' type='submit' value='Check Answers!' id='submit'>";
echo "</div>";

echo "</form>";
//  End - <form>

echo "</div>";

echo "<body>";

include "js.php";
include "footer.php";

?>