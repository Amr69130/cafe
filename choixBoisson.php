<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('data.php');
    ?>

    <form action="confirmBoisson.php" name="name" method="POST">
        <select name="name">

            <?php foreach ($cafes as $cafe) { ?>
                <option value="<?php echo $cafe["name"] ?>">
                    <?php echo $cafe["name"] . " " . $cafe["price"] . " €"; ?>
                </option>
            <?php

            } ?>

        </select>
        <button type="submit">VALIDER COMMANDE</button>
    </form>



</body>

</html>