<?php
include "data.php";
include "header.php"
?>

<html>

<body id="index-body" class="pt-5">
    <div class="container text-center">
        <h1>
            Welcome to Pokemon Challenge WAI!<br>
            <small>
                Year 2020 - there are 807 species of Pokemons borned!
            </small>
        </h1>
        <h2 class="display-4">
            Who Am I?
        </h2>
        <form action="quiz.php" method="POST" class="container text-center w-50">
            <div class="form-group">
                <label class="lead" for="name">Player Name:</label>
                <input type="text" class="form-control" placeholder="Player Nickname" id="name" name="name">
            </div>
            <div class="form-group">
                <label class="lead" for="numQues">Questions to challenge:</label>
                <select class="form-control" id="numQues" name="numQues">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary btn-lg" value="Enter Challenge Now!">
        </form>
    </div>

    <?php
    include "js.php";
    include "footer.php";
    ?>

</body>
<html>