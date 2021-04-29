<?php
$chaine = readline("Enter :");
if (preg_match("#^F[1-9]{9}$#", $chaine)) {
    echo "Vous êtes bien connecté";
} else {
    echo "Erreur de référence client";
}

$chaine = readline("Enter :");
if (preg_match("#^0[1-9]{1}([\s.-]*\d{2}){4}$#", $chaine)) {
    echo "Numéro enregisté";
} else {
    echo "Format Numéro incorrect";
}

$chaine = readline("Enter :");
if (preg_match("#^[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?]{2,}@[a-z0-9-_]{2,}\.[a-z]{2,3}$#i", $chaine)) {
    echo "Correct";
} else {
    echo "Incorrect";
}

$chaine = readline("Enter :");
if (preg_match("#^[12] [0-9]{2} [0-1][0-9] [1-9]{2} [1-9][0-9]{2} [0-9]{3} [0-9]{2}$#", $chaine)) {
    echo "Correct";
} else {
    echo "Incorrect";
}
