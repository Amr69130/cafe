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

    <form action="confirmBoisson.php" method="POST">

        <select name="boisson">
            <?php
            foreach ($cafes as $info) {
                echo "<option value='{$info['name']}'>{$info['name']} - {$info['price']}€</option>";
            }

            ?>
        </select>
        <button type="submit">VALIDER COMMANDE</button>

    </form>



</body>

</html>