<?php
require_once('data.php');

var_dump($_GET); ?>

<form action="confirmCommande.php?boisson= .$cafe['name]" method="POST">
    <h1>CHOISIR NOMBRE DE SUCRE (1 à 5)</h1>
    <input type="number" min="0" max="5">






    <button type="submit">VALIDER COMMANDE</button>
</form>