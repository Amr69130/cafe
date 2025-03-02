<?php
require_once('data.php');
var_dump($_POST);
foreach ($cafes as $cafe) {
    if ($_POST["name"] == $cafe["name"]) {
        if ($cafe["add_sugar"] == true) {

            header("Location: http://localhost/cafe/choixSucre.php?boisson=" . $cafe['name']);
            exit();
        } else {

            header("Location: http://localhost/cafe/confirmCommande.php?boisson=" . $cafe['name']);
            exit();
        }
    }
    header("Location: http://localhost/cafe/choixBoisson.php");

    // J'AI DU FAIRE PLUSIEURS ESSAI ET C'EST QUE EN METTANT 2 EXIT AUX 2 PREMIERS HEADER QUE J'AI LE BON RESULTAT SI J'AJOUTE UN 3EME OU SI J'EN ENLEVE CA FAIT TOUT FOIRE, DEMANDER A GAETAN POURQUOI
}
