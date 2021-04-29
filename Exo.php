<!-- Positif ou Négatif -->
<?php
function Pos_ou_neg($a, $b)
{
    if ($a + $b < 0)
        return "Il est négatif";
    elseif ($a + $b > 0)
        return "Il est positif";
    else
        return "Est égal a 0";
}
$a = readline("Enter the number : ");
$b = readline("Enter the number : ");
echo Pos_ou_neg($a, $b)
?>
<!-- Classé par groupe -->
<?php
function Classer($a)
{
    if ($a >= 12)
        return "Cadet";
    elseif ($a >= 10)
        return "Minime";
    elseif ($a >= 8)
        return "Pupille";
    elseif ($a >= 6)
        return "Poussin";
    else
        return "Il es trop jeune";
}
$a = readline("Enter your age : ");
echo Classer($a)
?>
<!-- Prédiction à la minute -->
<?php
function predi_minute($a, $b)
{
    if ($b == 59) {
        if ($a == 23) {
            $a = 00;
            $b = 00;
        } else {
            $a += 1;
            $b = 00;
        }
    } else {
        $b += 1;
    }
    return "Il sera $a" . ":" . "$b dans 1 minute.";
}
$a = readline("Enter the hours : ");
$b = readline("Enter the minutes : ");
echo predi_minute($a, $b)
?>
<!-- Prédiction à la seconde -->
<?php
function predi_seconde($a, $b, $c)
{
    if ($c == 59) {
        if ($b == 59) {
            if ($a == 23) {
                $a = 00;
                $b = 00;
                $c = 00;
            } else {
                $a += 1;
                $b = 00;
                $c = 00;
            }
        } else {
            $b += 1;
            $c = 00;
        }
    } else {
        $c += 1;
    }
    return "Il sera $a" . ":" . "$b:" . "$c dans 1 seconde.";
}
$a = readline("Enter the hours : ");
$b = readline("Enter the minutes : ");
$c = readline("Enter the seconds : ");

echo predi_seconde($a, $b, $c)
?>
<!-- Prix des Feuilles -->
<?php
function calcule($number)
{
    $a = 0.10;
    $b = 0.09;
    $c = 0.08;
    if ($number >= 30) {
        $reste = $number - 30;
        $result = ($a * 10) + ($b * 20) + ($c * $reste);
    } elseif ($number >= 10) {
        $reste = $number - 10;
        $result = ($a * 10) + ($b * $reste);
    } else {
        $result = $a * $number;
    }
    return "Le montant total est de $result";
}
$number = readline("Enter the numbers of photocopy : ");

echo calcule($number)
?>
<!-- Impôt -->
<?php
function impot($sexe, $age)
{
    if ($sexe == "homme" && $age >= 20) {
        echo "Vous êtes imposable";
    } elseif ($sexe == "femme" && $age >= 18 && $age <= 35) {
        echo "Vous êtes imposable";
    } else {
        echo "vous n'êtes pas imposable";
    }
}
$sexe = readline("Enter your sexe : ");
$age = readline("Enter your age : ");

echo impot($sexe, $age)
?>
<!-- Assurance -->
<?php
function assurance($age, $age_permis, $accident)
{
    if ($age < 25 && $age_permis < 2) {
        $total_point = 2;
    } elseif ($age >= 25 && $age_permis >= 2) {
        $total_point = 0;
    } else {
        $total_point = 1;
    }
    $total_point = $total_point + $accident;
    if ($total_point == 0) {
        return "Pastille Vert";
    } elseif ($total_point == 1) {
        return "Pastille orange";
    } elseif ($total_point == 2) {
        return "Pastille Rouge";
    }
    return "Refuser";
}

$age = readline("Enter your age : ");
$age_permis = readline("Enter the age of your licence : ");
$accident = readline("Enter the number of accidents : ");

echo assurance($age, $age_permis, $accident);
?>
<!-- 0 < ... < 4 -->
<?php
function xx($number)
{
    $x = false;
    do {
        $number = readline("Enter a number : ");
        if ($number > 0 && $number < 4) {
            $x = true;
        }
    } while ($x == false);
}
echo xx($number)
?>
<!-- 9 < ... < 21 -->
<?php
function xxx($number)
{
    $x = false;
    do {
        $number = readline("Enter a number : ");
        if ($number > 9 && $number < 21) {
            $x = true;
        } elseif ($number < 10) {
            echo "trop petit";
        } else {
            echo "trop grand";
        }
    } while ($x == false);
}
echo xxx($number)
?>
<!-- +1, +2, +3.... -->
<?php
function accrementer($number)
{
    for ($i = $number + 1; $i < $number + 11; $i++) {
        echo "$i ";
    }
}
$number = readline("Enter a number : ");
echo accrementer($number);
?>
<!-- table de multiplication -->
<?php
function table_de($number)
{
    for ($i = 1; $i <= 10; $i++) {
        echo "$number" . "x" . "$i" . "=" . $number * $i . " ";
    }
}
$number = readline("Enter a number : ");
echo table_de($number);
?>
<!-- Addition -->
<?php
function additionne($number)
{
    $result = 0;
    for ($i = 1; $i <= $number; $i++) {
        $result += $i;
    }
    return "Le total est de $result";
}
$number = readline("Enter a number : ");
echo additionne($number);
?>
<!-- factorielle -->
<?php
function factorielle($number)
{
    for ($i = 1; $i <= $number; $i++) {
        if ($i == $number) {
            echo $i;
        } else {
            echo $i . " x ";
        }
    }
}
$number = readline("Enter a number : ");
echo factorielle($number);
?>
<!-- Plus grand (20) -->
<?php
function plus_grand()
{
    $plusGrand = 0;
    for ($i = 1; $i <= 20; $i++) {
        $number = readline("Enter a number : ");
        if ($i == 1) {
            $plusGrand = $number;
            $indexPlusGrand = $i;
        } elseif ($number > $plusGrand) {
            $plusGrand = $number;
            $indexPlusGrand = $i;
        }
    }
    echo ("Le plus grand de ces nombres est $plusGrand et c'était le nombre numero $indexPlusGrand");
}
echo plus_grand()
?>
<!-- Plus grand (?) -->
<?php
function plus_grand2()
{
    $i = 1;
    $plusGrand = 0;
    do {
        $number = readline("Enter a number : ");
        if ($i == 1) {
            $plusGrand = $number;
            $indexPlusGrand = $i;
        } elseif ($number > $plusGrand) {
            $plusGrand = $number;
            $indexPlusGrand = $i;
        }
        $i++;
    } while ($number != 0);
    echo ("Le plus grand de ces nombres est $plusGrand et c'était le nombre numero $indexPlusGrand");
}
echo plus_grand2()
?>
<!-- Rendre la monnaie -->
<?php
function monnaie($payment, $price)
{
    $number = $payment - $price;
    do {
        if ($number >= 10) {
            $number = $number - 10;
            echo ("-10€ ");
        } elseif ($number >= 5) {
            $number = $number - 5;
            echo ("-5€ ");
        } elseif ($number >= 1) {
            $number = $number - 1;
            echo ("-1€ ");
        }
    } while ($number > 0);
}
$price = readline("Enter a price : ");
$payment = readline("Enter payment : ");
echo monnaie($payment, $price);
?>
<!-- tableau - nombre de positif et de negatif -->
<?php
function new_tab()
{
    $negatif = 0;
    $positif = 0;
    $tab = [];
    $box = readline("Enter the number of boxes : ");
    for ($i = 0; $i < $box; $i++) {
        $number = readline("Enter the number : ");
        $tab[$i] = $number;
        if ($number < 0) {
            $negatif++;
        } elseif ($number > 0) {
            $positif++;
        }
    }
    echo ("Il y a $positif nombre positif(s) et $negatif nombre negatif(s)");
}
echo new_tab();
?>
<!-- tableau - total -->
<?php
function tab_total($tab)
{
    $i = 0;
    $result = 0;
    foreach ($tab as &$value) {
        $result += $tab[$i];
        $i++;
    }
    echo ("La somme total du tableau est de $result");
}
$tab = array(0 => 5, 1 => -4, 2 => 15, 3 => 9, 4 => -20);
echo tab_total($tab);
?>
<!-- tableau - fusion des 2 -->
<?php
function tab_fusion($tab1, $tab2)
{
    if (count($tab1) == count($tab2)) {
        $tabCombine = [];
        for ($i = 0; $i < count($tab1); $i++) {
            $a = $tab1[$i];
            $b = $tab2[$i];
            $tabCombine[$i] = $a + $b;
            echo $tabCombine[$i] . " ";
        }
    } else {
        return false;
    }
}
$tab1 = array(0 => 5, 1 => -4, 2 => 15, 3 => 9, 4 => -20);
$tab2 = array(0 => 19, 1 => -1, 2 => 10, 3 => 31, 4 => -5);
echo tab_fusion($tab1, $tab2);
?>
<!-- Tableau - multiplier les 2 -->
<?php
function tab_multiplication($tab1, $tab2)
{
    $tabCombine = [];
    $result = 0;
    for ($i = 0; $i < count($tab1); $i++) {
        for ($j = 0; $j < count($tab2); $j++) {
            $result += $tab1[$i] * $tab2[$j];
        }
    }
    echo ("Le total des 2 tableaux est de : $result");
}
$tab1 = array(0 => 5, 1 => 4, 2 => 15, 3 => 9, 4 => 20);
$tab2 = array(0 => 5, 1 => 3);
echo tab_multiplication($tab1, $tab2);
?>
<!-- tableau - +1 -->
<?php
function tab_acc()
{
    $tab = [];
    $box = readline("Enter the number of boxes : ");
    for ($i = 0; $i < $box; $i++) {
        $number = readline("Enter the number : ");
        $tab[$i] = $number;
    }
    foreach ($tab as &$value) {
        $value++;
        echo $value . " ";
    }
}
echo tab_acc();
?>
<!-- tableau - plus grand + index -->
<?php
function new_tableau()
{
    $tab = [];
    $box = readline("Enter the number of boxes : ");
    for ($i = 0; $i < $box; $i++) {
        $tab[$i] = readline("Enter the number : ");
    }
    echo tab_plus_grand($tab);
}
function tab_plus_grand($tab)
{
    $plusGrand = $tab[0];
    $indexPlusGrand = 0;
    for ($i = 0; $i < count($tab); $i++) {
        if ($tab[$i] > $plusGrand) {
            $plusGrand = $tab[$i];
            $indexPlusGrand = $i;
        }
    }
    echo ("Le plus grand de ces nombres est $plusGrand et c'était le nombre numero $indexPlusGrand");
}
echo new_tableau();
?>
<!-- tableau moyenne de la classe -->
<?php
function new_tableau2()
{
    $tab = [];
    $box = readline("Enter the number of boxes : ");
    for ($i = 0; $i < $box; $i++) {
        $tab[$i] = readline("Enter the number : ");
    }
    echo tab_moyenne($tab);
}
function tab_moyenne($tab)
{
    $result = 0;
    $tabmax = count($tab);
    for ($i = 0; $i < $tabmax; $i++) {
        $result += $tab[$i] / $tabmax;
    }
    $moyenneUp = 0;
    for ($i = 0; $i < $tabmax; $i++) {
        if ($tab[$i] >= $result) {
            $moyenneUp++;
        }
    }
    echo ("La moyenne de la classe est de $result, et il y a $moyenneUp élève(s) qui ont la moyenne");
}
echo new_tableau2();
?>
<!-- tableau - suite? -->
<?php
function new_tableau3()
{
    $tab = [];
    $box = readline("Enter the number of boxes : ");
    for ($i = 0; $i < $box; $i++) {
        $tab[$i] = readline("Enter the number : ");
    }
    echo tab_suite($tab);
}
function tab_suite($tab)
{
    $tabmax = count($tab);
    for ($i = 0; $i < $tabmax - 1; $i++) {
        if ($tab[$i] == $tab[$i + 1] - 1) {
        } else {
            return ("Ses éléments ne sont pas tous consécutif !!!");
        }
    }
    echo ("Ses éléments sont tous consécutifs !!!");
}
echo new_tableau3();
?>
<!-- tableau - tri -->
<?php
function tab_tri_decroissant($tab)
{
    $tabmax = count($tab);
    $yaEuPermut = true;
    while ($yaEuPermut) {
        $yaEuPermut = false;
        for ($i = 0; $i < $tabmax - 1; $i++) {
            if ($tab[$i] < $tab[$i + 1]) {
                $save = $tab[$i];
                $tab[$i] = $tab[$i + 1];
                $tab[$i + 1] = $save;
                $yaEuPermut = true;
            }
        }
    }
    foreach ($tab as $value) {
        echo $value . " ";
    }
}
function tab_tri_bulle($tab)
{
    $tabmax = count($tab);
    for ($i = 0; $i < $tabmax - 1; $i++) {
        $plusGrand = $tab[$i];
        $indexPlusGrand = $i;
        for ($j = $i + 1; $j < $tabmax; $j++) {
            if ($tab[$j] > $plusGrand) {
                $plusGrand = $tab[$j];
                $indexPlusGrand = $j;
            }
        }
        $save = $tab[$i];
        $tab[$i] = $tab[$indexPlusGrand];
        $tab[$indexPlusGrand] = $save;
    }
    foreach ($tab as $value) {
        echo $value . " ";
    }
}
$tab = array(0 => 5, 1 => 4, 2 => 7, 3 => 6, 4 => 3);
echo tab_tri_decroissant($tab);
echo "\n";
echo tab_tri_bulle($tab);
?>
<!-- tableau - inverse -->
<?php
function tab_inverse($tab)
{
    $tabmax = count($tab);
    $j = count($tab) - 1;
    for ($i = 0; $i < $tabmax / 2; $i++) {
        $save = $tab[$i];
        $tab[$i] = $tab[$j];
        $tab[$j] = $save;
        $j--;
    }
    foreach ($tab as $value) {
        echo $value . " ";
    }
}
$tab = array(0 => 5, 1 => 4, 2 => 7, 3 => 6, 4 => 3);
echo tab_inverse($tab);
?>
<!-- tableau - suppression -->
<?php
function suppression($tab, $index)
{
    for ($i = $index; $i < count($tab) - 1; $i++) {
        $tab[$i] = $tab[$i + 1];
    }
    array_pop($tab);
    foreach ($tab as $value) {
        echo $value . " ";
    }
}
$tab = array(5, 4, 7, 6, 3);
echo suppression($tab, $index = readline("Entrer la position du tableau a supprimer : "));
?>
<!-- tableau - dictionnaire -->
<?php
function  isIn($tab, $word)
{
    $startIndex = 0;
    $endIndex = count($tab);
    $found = false;
    while (!$found && $startIndex != $endIndex) {
        $middleIndex = ($startIndex + $endIndex) / 2;
        if ($word > $tab[$middleIndex]) {
            $startIndex = $middleIndex + 1;
        } else if ($word < $tab[$middleIndex]) {
            $endIndex = $middleIndex - 1;
        } else {
            $found = true;
        }
    }
    return $found;
}
$tab = array('a', 'c', 'e', 'h', 'i', 'j', 'l', 'n', 'p', 'r', 't', 'v', 'x', 'z');
if (isIn($tab, $search = readline("Type the word : "))) {
    echo ("Found !");
} else {
    echo ("404 Not Found !");
}
?>
<!-- nombre de lettre (mot)-->
<?php
function letter_number($word)
{
    $result = 0;
    for ($i = 0; $i < strlen($word); $i++) {
        $result++;
    }
    echo strlen($word);
    echo $result;
}
echo letter_number($word = readline("Enter the word : "))
?>
<!-- nombre de lettre (phrase) -->
<?php
function letter_number_sentence($sentence)
{
    $result = 0;
    for ($i = 0; $i < strlen($sentence); $i++) {
        if ($sentence[$i] == " ") {
        } else {
            $result++;
        }
    }
    echo $result;
}
echo letter_number_sentence($sentence = readline("Enter the sentence : "))
?>
<!-- number of voyelles -->
<?php
function voyelle_number_sentence($sentence)
{
    $voyelle = array("a", "e", "i", "o", "u", "y");
    $result = 0;
    for ($i = 0; $i < strlen($sentence); $i++) {
        for ($j = 0; $j < count($voyelle); $j++) {
            if ($sentence[$i] == $voyelle[$j]) {
                $result++;
            }
        }
    }
    echo $result;
}
echo voyelle_number_sentence($sentence = readline("Enter the sentence : "))
?>