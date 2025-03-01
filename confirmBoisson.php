<?php
require_once('data.php');
var_dump($_POST);
foreach ($cafes as $cafe) {
    if ($_POST["name"] == $cafe["name"]) {
        header("Location: http://localhost/cafe/choixSucre.php");
        exit();
    } else {
        header("Location: http://localhost/cafe/choixBoisson.php");
        exit();
    }
}
