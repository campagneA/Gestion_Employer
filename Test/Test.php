<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url(../Image-test/Fond_de_site_profil2.jpg);
        }

        /* Barre de Navigation top */
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
        }

        li {
            float: left;
        }

        li a,
        .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover,
        .dropdown:hover .dropbtn {
            background-color: #111;
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <ul>
        <li><a href="accueil.php">SquareEnix</a></li>
        <li><a href="jeux.php">jeux</a></li>
        <li><a href="histoire.php">Histoire</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="quizz.php">Quizz</a></li>
        <li class="dropdown">
            <a class="dropbtn" href="boutique.php">Boutique</a>
            <div class="dropdown-content">
                <a href="">Nouveautés</a>
                <a href="">Jeux Vidéo</a>
                <a href="">Livres</a>
                <a href="">Goodies</a>
            </div>
        </li>
        <li style='float:right'><a href="Profil">Profil</a></li>
        <li style='float:right'><a href="Panier">Panier</a></li>
        <li style='float:right'><a href="Recherche">Search</a></li>
    </ul>
</body>

</html>