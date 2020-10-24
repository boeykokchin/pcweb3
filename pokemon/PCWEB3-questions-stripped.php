<?php

if (isset($_POST)) {
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Quiz</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap core CSS (works only if you have downloaded Bootstrap; if not, paste over from a Bootstrap website) -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <h1>Quiz</h1>
    <form action="#" method="post" id="quiz">
        <div class="row" id="question-1>">
            <div class="col sm-12">
                <div class="qntxtbox">
                    <h4>Question 1</h4>
                </div>
                <input class="ans" type="text" name="answer-1" placeholder="Answer here" />
            </div>
        </div>
        <div class="row" id="question-2>">
            <div class="col sm-12">
                <div class="qntxtbox">
                    <h4>Question 2</h4>
                </div>
                <input class="ans" type="text" name="answer-2" placeholder="Answer here" />
            </div>
        </div>
        <div class="row" id="question-3>">
            <div class="col sm-12">
                <div class="qntxtbox">
                    <h4>Question 3</h4>
                </div>
                <input class="ans" type="text" name="answer-3" placeholder="Answer here" />
            </div>
        </div>
        <input type="submit" value="Submit Quiz">
    </form>
</body>

</html>