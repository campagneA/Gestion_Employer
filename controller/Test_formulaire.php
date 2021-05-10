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
  } else {
    boutonConnexion();
  }

  if (isset($_SESSION['userMail']) && !empty($_SESSION['userMail'])) {
    $fp = fopen("compteur.txt", "r+");
    $nbvisites = fgets($fp, 10);
    if ($nbvisites == "") {
      $nbvisites = 0;
    }
    $nbvisites++;
    fseek($fp, 0);
    fputs($fp, $nbvisites);
    fclose($fp);
    echo "<p class='position-compteur'>Nombre de visiteurs total: $nbvisites</p>";
    if (isset($_GET["error"])) {
      $i = 0;
      $message = $_GET["error"];
      echo "<div class='background'><h4>Erreur de saisie :</h4>";
      for ($i = 0; $i < count($message); $i++) {
        echo $message[$i];
      }
    }
    echo "</div>";
  };

  formulaireInscriptionEmployer();
  boutonAfficheModifier();
  ?>
</body>

</html>