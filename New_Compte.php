<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <style>
        body {
            background-image: url(Image-test/Fond_de_site_profil2.jpg);
            background-size: cover no-repeat;
        }

        form {
            position: absolute;
            top: 20%;
            left: 27%;
            background-image: url(Image-test/Fond_ecran_history2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            display: block;
            width: 800px;
            height: 400px;
            border: 3px solid rgba(33, 119, 240, 0.75);
            color: white;
        }

        form h2,
        form h1 {
            text-align: center;
        }

        form input[type=text],
        form input[type=password] {
            width: 300px;
            height: 30px;
            position: relative;
            left: 31%;
        }

        form input[type=text]:focus,
        form input[type=password]:focus {
            background-color: black;
            color: white;
        }

        form button {
            font-size: medium;
            position: absolute;
            right: 5%;
            bottom: 9%;
            width: 110px;
            height: 30px;
            background-color: white;
            border: 2px solid black;
        }

        form button:hover {
            background-color: rgba(45, 45, 45, 1);
            color: white;
        }

        p {
            display: inline-block;
            padding: 5px;
            position: absolute;
            top: 0;
            left: 47%;
            background-color: red;
            border: 2px solid black;
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
    if (isset($_GET['error']) == "error") {
        echo "<p>Erreur de saisie !!!</p>";
    }
    ?>
    <ul>
        <li><a href="Connection.php">Retour</a></li>
    </ul>
    <form action="Creation_Compte.php" method="POST">
        <h1>Créez un compte</h1>
        <h2>Compte Mail</h2>
        <input type="text" name="newUser" placeholder="abc@example.com" autofocus>
        <h2>Mot de Passe</h2>
        <input type="password" name="newPass" placeholder="*******">
        <h2>Confirmer Mot de Passe</h2>
        <input type="password" name="newPassConf" placeholder="*******">
        <button type="submit">Créer</button>
    </form>
</body>

</html>