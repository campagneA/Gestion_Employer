<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <style>
    body {
      background-image: url(../../Fil_Rouge_SquareEnix/Fil_Rouge/Logo/Fond_de_site_profil.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    .background {
      background-color: black;
    }

    h4 {
      color: red;
      text-align: center;
    }

    .position-bottom-left {
      position: absolute;
      bottom: 15%;
      left: 83%;
    }

    .position-compteur {
      position: absolute;
      top: 0%;
      right: 2%;
      background-color: white;
      font-size: 20px;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
      position: fixed;
      left: 6px;
      color: white;
      position: fixed;
      top: 0;
      left: 0;
    }

    li a {
      display: block;
      text-decoration: none;
      color: white;
      padding: 14px 16px;
    }

    li a:hover {
      background-color: #111;
      color: white;
    }
  </style>
</head>

<body>
  <?php
  if (!empty($_SESSION['userMail']) && isset($_SESSION['userMail'])) { ?>
    <ul>
      <li><a href="Deconnection.php">Deconnection</a></li>
    </ul>
  <?php } else { ?>
    <ul>
      <li><a href="Connection.php">Connection</a></li>
    </ul>
  <?php
  }
  if (!empty($_SESSION['userMail']) && isset($_SESSION['userMail'])) {
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
      while ($i != strlen($message)) {
        if ($message[$i] == 'a') {
          echo "<h4>\n- Numero Employes -</h4>";
        } else if ($message[$i] == 'b') {
          echo "<h4>\n- Nom -</h4>";
        } else if ($message[$i] == 'c') {
          echo "<h4>\n- Prenom -</h4>";
        } else if ($message[$i] == 'd') {
          echo "<h4>\n- Emploi -</h4>";
        } else if ($message[$i] == 'e') {
          echo "<h4>\n- Numero du Supérieur -</h4>";
        } else if ($message[$i] == 'f') {
          echo "<h4>\n- Date Embauche -</h4>";
        } else if ($message[$i] == 'g') {
          echo "<h4>\n- Salaire -</h4>";
        } else if ($message[$i] == 'h') {
          echo "<h4>\n- Commission -</h4>";
        } else if ($message[$i] == 'i') {
          echo "<h4>\n- Numero Service -</h4>";
        } else if ($message[$i] == 'j') {
          echo "<h4>\n- Numero Projet -</h4>";
        }
        $i++;
      }
      echo "</div>";
    };
  ?>

    <div class="d-grid gap-2 col-sm-3 m-2 mx-auto">
      <a class="btn btn-secondary" href="Test_formulaire.php" role="button">Formulaire d'inscription</a>
    </div>
    <form method="POST" action="Ajout_info.php">
      <div class="row">
        <div class="col-sm-3 m-2 mx-auto">
          <div class="input-group">
            <div class="input-group-text">Numero d'employé</div>
            <input type="text" class="form-control" id="noemp" name="noemp" placeholder="0000" value="<?php echo isset($_POST['noemp']) ? $_POST['noemp'] : ''; ?>" autofocus>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 m-2 mx-auto">
          <div class="input-group">
            <div class="input-group-text">Nom</div>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 m-2 mx-auto">
          <div class="input-group">
            <div class="input-group-text">Prenom</div>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 m-2 mx-auto">
          <div class="input-group">
            <div class="input-group-text">Emploi</div>
            <input type="text" class="form-control" id="emploi" name="emploi" placeholder="Développeur">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 m-2 mx-auto">
          <div class="input-group">
            <div class="input-group-text">Le Supérieur</div>
            <input type="number" class="form-control" id="sup" name="sup" placeholder="0000">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 m-2 mx-auto">
          <div class="input-group">
            <div class="input-group-text">Date d'embauche</div>
            <input type="date" class="form-control" id="embauche" name="embauche" placeholder="Entrer la date d'embauche">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 m-2 mx-auto">
          <div class="input-group">
            <div class="input-group-text">Le Salaire</div>
            <input type="number" class="form-control" id="sal" name="sal" placeholder="0000,00">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 m-2 mx-auto">
          <div class="input-group">
            <div class="input-group-text">La Commission</div>
            <input type="number" class="form-control" id="comm" name="comm" placeholder="Entrer la Commission">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 m-2 mx-auto">
          <div class="input-group">
            <div class="input-group-text">Le numero de service</div>
            <input type="number" class="form-control" id="noserv" name="noserv" placeholder="0">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 m-2 mx-auto">
          <div class="input-group">
            <div class="input-group-text">Le numero de projet</div>
            <input type="number" class="form-control" id="noproj" name="noproj" placeholder="100">
          </div>
        </div>
      </div>
      <div class="d-grid gap-2 col-3 m-2 mx-auto justify-content-md-center">
        <input type="submit" class="btn btn-primary" value="Ajouter" name="submit">
      </div>
    </form>
    <a class="btn btn-primary position-bottom-left" href="Affiche_Fichier.php">--Afficher/Modifier les données--</a>
  <?php } ?>
</body>

</html>