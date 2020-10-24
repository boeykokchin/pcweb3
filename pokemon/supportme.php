<?php
include "data.php";
include "header.php";
?>

<html>

<body id="index-body" class="pt-5 container text-center">
    <h1>Support Us in our next development!</h2>
        <h3>Upcoming Features:</h3>
        <ul class="container py-2 w-50 list-group">
            <li class="list-group-item list-group-item-success">3D animated figures</li>
            <li class="list-group-item list-group-item-info">Players Medal Board in Pokemon Challenge WAI</li>
            <li class="list-group-item list-group-item-primary">Online Live challenge with multiple players</li>
        </ul>
        <form class="container text-center w-50" action="index.php" method="POST">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email and we will get in touch with you!" id="email" name="email">
            </div>
            <input type="submit" class="btn btn-primary" value="Send">
        </form>
        </div>
        <?php
        include "js.php";
        include "footer.php";
        ?>
</body>

</html>