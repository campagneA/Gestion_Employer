<?php session_start();
include_once(__DIR__ . "/../view/view_bouton.php");
include_once(__DIR__ . "/../view/view_employes.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/css_test_formulaire.css">
</head>

<body>
  <?php
  if (isset($_SESSION['userMail']) && !empty($_SESSION['userMail'])) {
    boutonDeconnexion();
    if (isset($_GET["error"])) {
      afficheMsgErreur($_GET["error"]);
    }
  } else {
    boutonConnexion();
  }

  formulaireInscriptionEmployer();
  boutonAfficheModifier();
  ?>
</body>

</html>