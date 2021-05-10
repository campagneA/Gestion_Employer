<?php
include_once(__DIR__ . "/../view/view_bouton.php");
include_once(__DIR__ . "/../view/view_user.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <link rel="stylesheet" href="../css/css_new_compte.css">
</head>

<body>
    <?php
    if (isset($_GET['error']) == "error") {
        echo "<p>Erreur de saisie !!!</p>";
    }
    boutonRetourUser();
    formulaireInscriptionUser();
    ?>

</body>

</html>