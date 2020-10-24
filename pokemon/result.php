<!-- This module attemmpt to wite both html and bootstrap css inside PHP code and vice-versa. -->

<?php
// Bring in database and header information
include "data.php";
include "header.php";

// if ($result = isset($_POST) && !empty($_POST)) {
//     echo "<h1 class='display-1'>{$result}</h1>";
//     echo "Post received!<br>";
// } else {
//     echo "Please attempt and complete all the questions!";
// }

// Collect number of questions in the quiz
$numQues = $_POST["numQues"];

// Reset correct answer counter to 0
$correct = 0;

// Collect the answers from the questions and run a total count of correct answers
for ($q = 1; $q <= $numQues; $q++) {
    if ($_POST["ansUsr-Q{$q}"] == $_POST["ansCom-Q{$q}"]) {
        $correct++;
    }
}
?>

<html>

<body class="container text-center d-flex flex-column">
    <h1 class="pt-5 text-center text-primary bg-light sticky-top"><?php echo "You have <span class='text-success font-weight-bolder'>{$correct}</span> out of <span class='text-dark'>{$numQues}</span> correct answers!"; ?></h1>

    <!-- Generate the list of questions, correct answers and player answers. Indicate correct/wrong answers to each question  -->
    <?php for ($q = 1; $q <= $numQues; $q++) {
        echo "<p class='lead text-center text-success'>Question {$q}</p>";
        echo "<div class='d-flex flex-row justify-content-center align-items-end'>";
        echo "<div class='p-2'>";
        echo "<img class='' src='img/{$_POST["quesPic-Q{$q}"]}'>";
        echo "</div>";
        echo "<div class='p-2'>";
        echo "<p class='lead'>{$_POST["ansCom-Q{$q}"]}</p>";
        echo "<p class='small badge badge-dark'>Correct Answer</p>";
        echo "</div>";
        echo "<div class='p-2'>";
        if ($_POST["ansUsr-Q{$q}"] == $_POST["ansCom-Q{$q}"]) {
            echo "<h3 class='pb-4'><span class='badge badge-pill badge-success'>Correct!</span></h3>";
        } else {
            echo "<h3 class='pb-4'><span class='badge badge-pill badge-danger'>Wrong!</span></h3>";
        }
        echo "<p class='lead'>{$_POST["ansUsr-Q{$q}"]}</p>";
        echo "<p class='small badge badge-info'>Your Answer</p>";
        echo "</div>";
        echo "</div>";
        echo "<hr>";
    } ?>
    <a class="btn btn-warning btn-lg" href="supportme.php">Support Us!</a>
</body>

<?php
include "js.php";
include "footer.php";
?>

</html>