<?php
require_once('data.php');
var_dump($_POST);
foreach ($cafes as $cafe) {
    if ($_POST["name"] == $cafe["name"]) {
        if ($cafe["add_sugar"] == true) {

            header("Location: http://localhost/cafe/choixSucre.php");
            exit();
        } else {

            header("Location: http://localhost/cafe/confirmCommande.php");
            exit();
        }
    }
    header("Location: http://localhost/cafe/choixBoisson.php");
}
